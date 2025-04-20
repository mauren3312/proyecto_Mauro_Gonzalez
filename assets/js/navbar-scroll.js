const navbar = document.getElementById('mainNavbar');
let prevScrollPos = window.pageYOffset; //guarda la posicion del scroll que al iniciar la pagina seria 0

window.addEventListener("scroll", function () {//evento que se activa con el scroll del mouse
  const currentScrollPos = window.pageYOffset;//guarda la posicion actual del scroll

  //si el scroll actual es menor a 50 o es menor a la posicion anterior,
  //significa que esta subiendo
  if (currentScrollPos < 50 || currentScrollPos < prevScrollPos) {
    navbar.style.top = "0";//el navbar se muestra
  } else {
    navbar.style.top = "-70px";//el navbar se oculta
  }

  prevScrollPos = currentScrollPos;//guardamos la posicion anterior para ir haciendo comparaciones
});

document.addEventListener("mousemove", function (e) {//evento que se activa al mover el mouse
  
  if (e.clientY < 50) {//si el mouse se acerca a los 50px en el eje Y
    navbar.style.top = "0";//el navbar se muestra
  }
});
