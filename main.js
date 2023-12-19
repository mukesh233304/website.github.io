let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('bx-bx');
  navbar.classList.toggle('active');
}
window.onscroll = () => {
  menu.classList.remove('bx-x');
  navbar.classList.remove('active')
}

const sr = scrollreveal({
  distance: 60
  duration: 2500
  delay: 400
  reset: true
})
sr.reveal('.text',{delay: 200, origin:'top'});