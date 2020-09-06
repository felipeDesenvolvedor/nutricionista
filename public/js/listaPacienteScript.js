document.addEventListener('DOMContentLoaded', function(){
    $listaPacientes = document.querySelector('.lista-pacientes');

    if (!$listaPacientes) {
        return;
    }

    filtro();
    filtrarPaciente();
});

function filtro() {
  $filtro = document.querySelector('.lista-pacientes-filtro');  
  $btnFiltros = document.querySelector('.btn-filtro-paciente');
  
  $btnFiltros.addEventListener('click', function(){
    $filtro.classList.toggle('esconder');
  });
}

function filtrarPaciente() {
  var $selectStatus     = document.querySelector("#idStatus");
  var $idCpf            = document.querySelector("#idCpf");
  var $idRG             = document.querySelector("#idRG");
  var $idResponsavel    = document.querySelector("#idResponsavel");
  var $idCpfResponsavel = document.querySelector("#idCpfResponsavel");
  var $idMunicipio      = document.querySelector("#idMunicipio");

  var $buscar = document.querySelector('.btn-busca-paciente');
  
  $buscar.addEventListener('click', function() {
    var statusSelecionado = $selectStatus.options[$selectStatus.selectedIndex].value;
   
    switch(statusSelecionado) {
      case 'todos':
        console.log(statusSelecionado); 
      break;
      case '0':
        if($('.paciente').hasClass('esconder')) {
          $('.paciente').removeClass("esconder");
        }
      break;
      case '1':
        console.log(statusSelecionado);
      break;  
    }

  });
}