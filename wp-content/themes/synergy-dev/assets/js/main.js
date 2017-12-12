/**
 * Setup webpack public path
 * to enable lazy-including of
 * js chunks
 *
 */
import 'babel-polyfill'
import Barba from 'barba.js'
import log from './utils/log'
import './vendor/webpack.publicPath'
import loadSprite from './vendor/loadSprite'
import Scroll from './scripts/Scroll'
import Fade from './scripts/Fade'
import Togglers from './scripts/Togglers'
import Swiper from 'swiper'
import Waypoints from 'waypoints'
import removeClasses from './utils/removeClasses'
import './scripts/Blob'
// import './scripts/Toggle'
import SelectClinician from './scripts/Select'

import {Toggle} from './scripts/Toggle'

import {
  ACTIVE_CLASS,
} from './config'
class App {
  constructor() {
    new Togglers()
    new SelectClinician()
    this.nav = new Toggle('nav')
    this.locations = new Toggle('locations')
    this.answer = new Toggle('answer')
    this.init()
    loadSprite()
    document.body.classList.remove('js-is-loading')
    document.body.classList.add('js-is-initialized')
    Barba.Pjax.init()
    Barba.Prefetch.init()
    Barba.Pjax.getTransition = () =>  this.Transition
    Barba.Dispatcher.on('initStateChange', () => {
      document.body.classList.add('js-is-loading')
      document.body.classList.remove('js-is-leaving')
    })
    Barba.Dispatcher.on('linkClicked', el => {
      const xs = document.getElementsByClassName(ACTIVE_CLASS)
      el.classList.add(ACTIVE_CLASS)

      if (xs.length > 0) {
        removeClasses(xs, ACTIVE_CLASS)
      }

      // this.filter.hide && this.filter.hide()    
      this.nav.hide()
      this.locations.hide()
      this.answer.hide()
    })
    Barba.Dispatcher.on('transitionCompleted', (currentStatus, prevStatus) => {
      document.body.classList.remove('js-is-loading')
      document.body.classList.remove('js-is-leaving')
      this.init()
    })
    this.initTransitions()    
  }

  init = () => {
    // this.filter = new Toggle('filter') 
    this.select =  new SelectClinician()   
    this.scroll = new Scroll()
    this.fade = new Fade()
    this.initSlideshow()
    this.initWaypoints()
  }

  initWaypoints = () => {
    const waypointEls = document.querySelectorAll('.js-waypoint')

    Array.prototype.forEach.call(waypointEls, (waypoint, index) => {
      waypoint.classList.add('is-hidden')
      return new Waypoint({
        element: waypoint,
        handler: function(direction) {
          log(`${index} ${direction}`)
          waypoint.classList.add('is-visible')
          waypoint.classList.remove('is-hidden')
        },
        offset: '40%',
      })
    })
  }

  initSlideshow = () => {
    const slideshow = new Swiper('.js-slideshow', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 6000,
        disableOnInteraction: true,
      },
    })

  }

  initTransitions = () => {
    const _scrollTop = this.scroll.scrollTop.bind(this)
    // const _fadeOut = this.fade.fadeOut.bind(this)
    // const _fadeIn = this.fade.fadeIn.bind(this)

    this.Transition = Barba.BaseTransition.extend({
      start() {
        Promise
        .all([
          // _fadeOut(this.oldContainer).finished,
          this.newContainerLoading,
          _scrollTop().finished,
        ])
        .then(this.showNewPage.bind(this))
      },

      showNewPage() {
        // _fadeIn(this.newContainer)
        this.done()
      },
    })
  }
}

const app = new App()

window.app = app

