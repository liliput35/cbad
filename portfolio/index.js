const burgerEl = document.getElementById("burgerEl") ; 
const menuEl = document.getElementById("menuEl") ; 

burgerEl.addEventListener("click", () => { 
    menuEl.classList.toggle("burger-clicked") ; 

})
