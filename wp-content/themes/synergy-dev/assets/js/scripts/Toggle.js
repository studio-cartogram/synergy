/**
 * Cartogram Toggle
 * @param {string} namespace
 * @param {object} [options] optional configuration object
 * @param {boolean} [options.withAsync] toggle functions to watch for async page transitions (ie: Barba.js)
 * @param {boolean} [options.debug] toggle debug mode
 * @class Toggle
 * @namespace Cartogram
 * @constructor
*/

var Cartogram = {}

var constants = {
  ACTIVE_CLASS: 'is-active',
  VISIBLE_CLASS: 'is-visible',
}

Cartogram.Toggle = function Toggle(namespace, options) {
  var toggleSelector = 'data-toggle-' + namespace
  var toggles = document.querySelectorAll('[' + toggleSelector + ']')

  if (!options) {
    var options = {}
  }

  
  if (!toggles.length) {
    if (options.debug) {
      console.log('Could not find toggle for ' + namespace + ' Toggle')
    }
    return null
  }

  var containerSelector = toggles[0].getAttribute(toggleSelector)

  var container = containerSelector
    ? document.querySelector(containerSelector)
    : document.querySelector('.js-' + namespace)

  if (!container) {
    if (options.debug) {
      console.log('Could not find container for ' + namespace + ' Container')
    }
    return null
  }

  var defaults = {
    withAync: false,
    debug: false,
  }

  this.namespace = namespace
  this.config = Object.assign(defaults, options)

  this.$nodes = {
    container: container,
    toggles: toggles,
    body: document.body,
    items: container.querySelectorAll('a[href], button'),
    close: container.querySelector('[' + toggleSelector + ']')
  }

  this.focusables = !this.$nodes.close
    ? addToArray(
        Array.prototype.slice.call(this.$nodes.items),
        // TODO: this is still broken because it will also loop the first toggle into the focusable group
        this.$nodes.toggles[0]
      )
    : Array.prototype.slice.call(this.$nodes.items)
    
  this.isVisible = false
  this.clickedToggle = null

  if (this.config.debug) {
    console.log('Adding ' + namespace + ' Toggle')

    if (!this.$nodes.container) {
      console.warn(namespace + ' Toggle is missing container element.')
      return false
    }
  }

  this.trapFocus = this._trapFocus.bind(this)
  this.hide = this._hide.bind(this)
  this.show = this._show.bind(this)
  this.init()
}

/**
 * Init
 * @method init
*/
Cartogram.Toggle.prototype.init = function() {
  Array.prototype.forEach.call(this.$nodes.toggles, toggle => toggle.addEventListener('click', this.show))

  
  this.$nodes.close && this.$nodes.close.addEventListener('click', this.hide)
  if (this.config.withAsync) {
    this.watchActiveItem()
  }
  if (this.config.debug) {
    console.log(this)
  }
}

/**
 * Show toggle
 * @method show
 * @param {event object} e event object returned from event handler
*/
Cartogram.Toggle.prototype._show = function(e) {
  if (this.isVisible) {
    return null
  }

  if (e) {
    e.preventDefault()
    this.clickedToggle = e.target
  }

  this.isVisible = true
  Array.prototype.forEach.call(this.$nodes.toggles, toggle => toggle.removeEventListener('click', this.show))
  Array.prototype.forEach.call(this.$nodes.toggles, toggle => toggle.addEventListener('click', this.hide))
  
  this.$nodes.body.classList.add(this.namespace + '--' + constants.VISIBLE_CLASS)
  this.setShowFocus()
  window.addEventListener('keydown', this.trapFocus)
  this.toggleAria()
}

/**
 * Hide toggle
 * @method hide
 * @param {event object} e event object returned from event handler
*/
Cartogram.Toggle.prototype._hide = function(e) {
  if (!this.isVisible) {
    return null
  }

  if (e) {
    e.preventDefault()
  }

  this.isVisible = false
  Array.prototype.forEach.call(this.$nodes.toggles, toggle => toggle.removeEventListener('click', this.hide))  
  Array.prototype.forEach.call(this.$nodes.toggles, toggle => toggle.addEventListener('click', this.show))
  this.$nodes.body.classList.remove(this.namespace + '--' + constants.VISIBLE_CLASS)
  window.removeEventListener('keydown', this.trapFocus)
  this.setHideFocus()
  this.toggleAria()
}


/**
 * Hide toggle if the active item was clicked
 * @method toggleAria
*/
Cartogram.Toggle.prototype.watchActiveItem = function() {
  var i
  var cb = function(e) {
    if (e.currentTarget.href === window.location.href) {
      e.preventDefault()
      e.stopPropagation()
      this.hide()
    }
  }

  for (i = 0; i < this.$nodes.items.length; i++) {
    this.$nodes.items[i].addEventListener('click', cb)
  }
}

/**
 * toggles aria-hidden
 * @method toggleAria
*/
Cartogram.Toggle.prototype.toggleAria = function() {
  if (this.isVisible) {
    return this.$nodes.container.setAttribute('aria-hidden', 'false')
  }

  this.$nodes.container.setAttribute('aria-hidden', 'true')
}

/**
 * Toggles the active class on items based on async route url status
 * @method updateActiveItem
 * @param {object} currentStatus
 * @param {object} prevStatus
*/
Cartogram.Toggle.prototype.updateActiveItem = function(currentStatus, prevStatus) {
  var currentUrl = currentStatus ? currentStatus.url.split(window.location.origin)[1] : window.location.pathname
  var prevUrl = prevStatus && prevStatus.url.split(window.location.origin)[1]
  var currentActiveLinkEl = this.$nodes.container.querySelector('[href="' + currentUrl + '"]')
  var prevActiveLinkEl = this.$nodes.container.querySelector('[href="' + prevUrl + '"]')

  if (prevUrl && prevActiveLinkEl) {
    prevActiveLinkEl.classList.remove(constants.ACTIVE_CLASS)
  }

  if (currentActiveLinkEl) {
    currentActiveLinkEl.classList.add(constants.ACTIVE_CLASS)
  }
}

/**
 * Set focus to the first item
 * @method setShowFocus
*/
Cartogram.Toggle.prototype.setShowFocus = function() {
  this.$nodes.items.length && this.$nodes.items[0].focus()
}

/**
 * Set focus back to the toggle
 * @method setHideFoucs
*/
Cartogram.Toggle.prototype.setHideFocus = function() {
  this.clickedToggle.focus && this.clickedToggle.focus()
}

/**
 * Trap focus on Toggle
 * @method trapFocus
 * @param {event object} e event object returned from event handler
*/
Cartogram.Toggle.prototype._trapFocus = function(e) {
  switch (e.keyCode) {
    case 27:
      return this.hide(e)

    case 9:
      var focusIndex = this.focusables.indexOf(document.activeElement)
      // debugger
      console.log(this.focusables)
      if (e.shiftKey) {
        if (focusIndex === 0) {
          this.focusables[this.focusables.length - 1].focus()
          return e.preventDefault()
        }

        return
      }

      if (focusIndex === this.focusables.length - 1) {
        this.focusables[0].focus()
        return e.preventDefault()
      }

      return
  }
}

function addToArray(arr, newEntry){
  return [].concat(arr, newEntry)
}

module.exports = Cartogram