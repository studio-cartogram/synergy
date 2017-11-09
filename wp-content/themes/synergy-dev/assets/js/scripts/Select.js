class SelectClinican {
  constructor(selectClass = '[data-select]') {
    this.selectEl = document.querySelectorAll(selectClass) 
    this.bindEvents()
  }
  
  bindEvents() {
    Array.prototype.forEach.call(this.selectEl, (select) => {
      select.addEventListener('change', this.handleChange) 
    })
  }
                                 
  handleChange(event) {
    window.location.href = event.target.value

    console.log(event)

  }
}

export default SelectClinican


