class Slideshow {
  constructor() {
    this.slides = document.querySelectorAll('#js-slideshow .js-slide')
    this.currentSlide = 0
    if (this.slides.length > 0) {
      this.slideInterval = setInterval(this.nextSlide, 8000)
    }
  }

  nextSlide = () => {
    this.slides[this.currentSlide].className = 'js-slide slideshow__slide'
    this.currentSlide = (this.currentSlide+1)%this.slides.length
    this.slides[this.currentSlide].className = 'js-slide slideshow__slide is-active'
    const height = this.slides[this.currentSlide].querySelector('.testimonial').clientHeight
    document.querySelector('#js-slideshow').style.height = this.slides[this.currentSlide].querySelector('.testimonial').clientHeight + 'px'
  }
}

export default Slideshow

