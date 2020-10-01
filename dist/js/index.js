document.addEventListener('DOMContentLoaded', function(){
  toggleMenu();
});

function toggleMenu() {
  let hamburguer = document.querySelector('.js-hamburguer');
  let menu = document.querySelector('.painel-lado-esquerdo');

  hamburguer.addEventListener('click', toggle);

  function toggle() {
    menu.classList.toggle('fechado');
  }
}
