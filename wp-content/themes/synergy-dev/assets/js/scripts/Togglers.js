class Togglers {
  constructor(buttonClass = '[data-toggle]') {
    this.toggleButtons = document.querySelectorAll(buttonClass) 
    this.bindEvents()
  }
  
  bindEvents() {
    Array.prototype.forEach.call(this.toggleButtons, (button) => {
      button.addEventListener('click', this.toggle.bind(null, button)) 
    })
  }
                                 
  toggle(button) {
    const toggleEl = document.querySelector(button.dataset.toggle)
    const toggleClass = button.dataset.toggleClass || 'is-toggled'

    if(!toggleEl) {
      return
    }

    if(toggleEl.classList.contains(toggleClass)) {
       return toggleEl.classList.remove(toggleClass)
    }

    toggleEl.classList.add(toggleClass)
  }
}

export default Togglers


