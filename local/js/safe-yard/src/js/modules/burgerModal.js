import gsap from "gsap";

export default function InitBurgerModal() {
  const burgerModalButton = document.querySelectorAll(".js-burger-button")
  const burgerModal = document.querySelector(".js-burger-modal")
  const burgerModalLinks = document.querySelectorAll(".js-burger-link")
  
  if(!burgerModal || !burgerModalButton) return
  
  gsap.set([burgerModal], {y: "-100%", autoAlpha: 0})
  gsap.set([burgerModalLinks], {y: "10%", autoAlpha: 0})
  
  let intermediateValue = false
  
  function openModal() {
    document.body.style.overflow = "hidden"
    
    let tl = gsap.timeline()
    
    tl.to(burgerModal, {
      ease: "power3",
      duration: 1,
      y: "0%",
      autoAlpha: 1
    })
    
    burgerModalLinks?.forEach((link) => {
      tl.to(link, {
        ease: "power1",
        duration: .1,
        autoAlpha: 1,
        y: "0%"
      })
    })
  }
  
  function closeModal() {
    document.body.style.overflow = "auto"
    
    let tl = gsap.timeline()
    
    tl.to(burgerModal, {
      ease: "power3",
      duration: 1,
      y: "-100%",
    })
    
    burgerModalLinks?.forEach((link) => {
      tl.to(link, {
        ease: "power1",
        duration: 0,
        autoAlpha: 0,
        y: "10%"
      })
    })
  }
  
  function toggleModal() {
    intermediateValue = !intermediateValue
    
    intermediateValue ? openModal() : closeModal()
  }
  
  burgerModalButton.forEach((button) => {
    button.addEventListener("click", () => toggleModal())
  })
}