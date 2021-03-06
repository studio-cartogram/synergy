import anime from 'animejs';

class Blob {
  constructor() {
    this.init();
  }
  
  init = () => {
    var morphingOne = anime({
      targets: '#morphing .path-one',
      d: [
        { value: 'M287.078125,431.007813 C373.007066,557.373859 472.490223,443.022024 474.25,248.70089 C476.09375,45.1071402 394.867188,15.4609375 254.095756,38.3828125 C171.686354,51.8015722 29.073699,104.415414 35.7327857,204.914063 C42.3918725,305.412711 163.109375,248.70089 287.078125,431.007813 Z' }
      ],
      duration: 11000,
      loop: true,
      direction: "alternate",
      easing: "easeInOutQuad"
    });
    
    var morphingTwo = anime({
      targets: '#morphing .path-two',
      d: [
        { value: 'M374.039062,447.21875 C526.765625,347.59375 346.460938,189.070313 437.515625,98.96875 C528.570312,8.8671875 286.203125,15.4921875 185.21875,57.625 C84.234375,99.7578125 34.4375,177.609375 30.328125,312.414062 C26.21875,447.21875 221.3125,546.84375 374.039062,447.21875 Z' }
      ],
      duration: 15000,
      loop: true,
      direction: "alternate",
      easing: "easeInOutQuad"
    });
    
    var morphingThree = anime({
      targets: '#morphing .path-three',
      d: [
        { value: 'M57.578125,196.789063 C89.7114787,293.291538 190.838539,469.638838 296.109375,475.609375 C398.59375,481.421875 444.505503,335.624991 426.5,246.870473 C370.632813,-28.515625 -23.3125,-46.140625 57.578125,196.789063 Z' }
      ],
      duration: 12000,
      loop: true,
      direction: "alternate",
      easing: "easeInOutQuad"
    });
  }
}

export default Blob;

