document.addEventListener('DOMContentLoaded', function(){
    $listaPacientes = document.querySelector('.lista-pacientes');

    if (!$listaPacientes) {
        return;
    }

    filtro();
});

function filtro() {
  $filtro = document.querySelector('.lista-pacientes-filtro');  
  $btnFiltros = document.querySelector('.btn-filtro-paciente');
  
  $btnFiltros.addEventListener('click', function(){
    $filtro.classList.toggle('esconder');
  });
}