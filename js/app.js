/**
 * MENU SECUNDARIO
 */

var menuDoc = document.getElementsByClassName('link-nav-arrow')[0];
var listSecond = document.querySelector('.list-nav-second');

var teste = listSecond.classList;

//console.log(teste);

menuDoc.addEventListener('click', function(){

    
   listSecond.classList.toggle('hide');
    menuDoc.classList.toggle('arrow');
    
});

const elements = document.querySelectorAll('.link-nav-arrow');
elements.forEach(item => {
  item.addEventListener('click', function() {
    item.nextElementSibling.classList.toggle('hide');
    item.classList.toggle('arrow');
  });
});

/**
 * MENU HAMBURGUER
 * ACIONAMENTO DO MENU
 */

var iconMenu = document.querySelector(".icon-menu");
var menu = document.querySelector(".menu");
var content = document.querySelector(".content")

/**
 * Menu_move do Hamburguer
 */
iconMenu.addEventListener("click", function(){

  menu.classList.toggle('menu_move');
  content.classList.toggle('content_move');
      
});







