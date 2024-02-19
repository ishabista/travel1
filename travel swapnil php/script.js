let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
     menu.classList.toggle('fa-times');
     navbar.classList.toggle('active');


};
window.scroll= () =>{
     menu.classList.remove('fa-times');
     navbar.classList.remove('active');
}
