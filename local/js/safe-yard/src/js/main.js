import 'swiper/css';
import "./vendor/lazyload";
import "./vendor/lazysized.unveilhooks";
import "./vendor/libs/hystmodal.min.css";
import "./vendor/libs/hystmodal.min.js";

import Slider from "./vendor/slider";
import initModal from "./vendor/initModal";
import validation from "./vendor/validation";
import phoneMask from "./vendor/inputMask";

import InitBurgerModal from "./modules/burgerModal"
import InitAnchors from './modules/anchors.js';

document.addEventListener("DOMContentLoaded", () => {
  window.letai = {};
  window.letai.modal = {}
  
  initModal();
  validation()
  phoneMask()
  const sliderInstance = new Slider();
  sliderInstance.initializeSliders();
  
  InitBurgerModal()
  InitAnchors()
});
