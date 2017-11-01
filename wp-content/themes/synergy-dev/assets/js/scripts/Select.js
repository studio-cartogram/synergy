class SelectClinican {
  constructor(buttonClass = '[data-select]') {
    this.buttonEls = document.querySelectorAll(buttonClass) 
    this.bindEvents()
  }
  
  bindEvents() {
    Array.prototype.forEach.call(this.buttonEls, (button) => {
      button.addEventListener('click', this.handleClick.bind(null, button)) 
    })
  }

  handleClick(button) {
    const selectEl = document.querySelector(button.dataset.select)    
    const url = selectEl.options[selectEl.selectedIndex].value
    if (!url) {
      return
    }
    window.location.href = url
  }
                                
}

export default SelectClinican


