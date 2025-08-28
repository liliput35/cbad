const burgerEl = document.getElementById("burgerEl") ; 
const menuEl = document.getElementById("menuEl") ; 

burgerEl.addEventListener("click", () => { 
    menuEl.classList.toggle("burger-clicked") ; 

})

const dateEl = document.getElementById("date-el") ; 

const months = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

const today = new Date();
const month = months[today.getMonth()]; 
const day = today.getDate();
const year = today.getFullYear();

dateEl.textContent = month + " " + day + ", " + year;