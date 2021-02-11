document.addEventListener('DOMContentLoaded', function(){
    $listaPacientes = document.querySelector('.lista-pacientes');

    if (!$listaPacientes) {
        return;
    }

    filtro();
    filtrarPaciente();
});

function filtro() {
  $filtro = document.querySelector('.view-filtro-paciente');
  $btnFiltros = document.querySelector('.view-filtro-paciente-btn');

  $btnFiltros.addEventListener('click', function(){
    $filtro.classList.toggle('aberto');
  });
}

function filtrarPaciente() {
  var $buscar = document.querySelector('.view-filtro-paciente-btn-busca');
  var $campo  = document.querySelector('.view-filtro-paciente-busca');
  var form    = document.querySelector('.view-filtro-paciente-form');

  $buscar.addEventListener('click', function(){
    pegarDadosEntrada();
  });

  $campo.addEventListener('keyup', function(){
    pegarDadosEntrada();
   });

   function pegarDadosEntrada() {
      var camposEmBrancos = inputEmpty(form.nome) && inputEmpty(form.cpf) && inputEmpty(form.rg) && inputEmpty(form.responsavel) && inputEmpty(form.cpfResponsavel);

      if(camposEmBrancos) {
        buscarPaciente({});
      }else {
        buscarPaciente({"nome":form.nome.value, "cpf":form.cpf.value, "rg":form.rg.value, "responsavel":form.responsavel.value, "cpfResponsavel":form.cpfResponsavel.value});
      }
   }

  function buscarPaciente(paciente) {

    buscar('http://nutricionista.com.br/pacientes/buscar/', 'post', 'paciente', paciente, exibir, 'teste');

    function exibir(pacientes, classPagina) {
      var listaPacientes = document.querySelector('.lista-pacientes');
          listaPacientes.innerText = '';
          listaPacientes.innerHTML = pacientes;
    }
  }
}
