export default function smoothScroll(event) {
    event.preventDefault();
    
    const targetId = event.target.getAttribute("href"); 
    
    const targetElement = document.querySelector(targetId); 
    if (targetElement) {
      const offsetTop = targetElement.offsetTop; 
      window.scrollTo({
        top: offsetTop,
        behavior: "smooth" 
      });
    }
  }