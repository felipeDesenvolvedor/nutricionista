document.addEventListener('DOMContentLoaded', function(){
    $listaPacientes = document.querySelector('.lista-pacientes');

    if (!$listaPacientes) {
        return;
    }

    filtro();
    filtrarPaciente();
    // filtrarNome();
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
      var camposPrenchidos = inputEmpty(
          [form.nome, form.cpf, form.rg, form.responsavel, form.cpfResponsavel]
        );

      if(camposPrenchidos) {
        buscarPaciente({});
      }else {
        buscarPaciente({"nome":form.nome.value, "status":form.status.value,"cpf":form.cpf.value, "rg":form.rg.value, "responsavel":form.responsavel.value, "cpfResponsavel":form.cpfResponsavel.value});
      }
  });

  $campo.addEventListener('keyup', function(){
      var camposPrenchidos = inputEmpty(
        [form.nome, form.cpf, form.rg, form.responsavel, form.cpfResponsavel]
      );

      if(camposPrenchidos) {
        buscarPaciente({});
      }else {
        buscarPaciente({"nome":form.nome.value, "status":form.status.value,"cpf":form.cpf.value, "rg":form.rg.value, "responsavel":form.responsavel.value, "cpfResponsavel":form.cpfResponsavel.value});
      }
   });

  function buscarPaciente(paciente) {

    buscar('http://nutricionista.com.br/pacientes/buscar/', 'post', 'paciente', paciente, exibir, 'teste');

    function exibir(pacientes, classPagina) {
      var listaPacientes = document.querySelector('.lista-pacientes');
          listaPacientes.innerText = '';
          listaPacientes.innerHTML = pacientes;
    }
  }
}

function filtrarNome() {
  var letra = document.querySelector('.view-filtro-paciente-busca');
  var letraNova = letra.value;
  var teste = [];

  letra.addEventListener('input', function(){

      var arrayLetras = this.value.split(' ');
          toUpperCase(arrayLetras[arrayLetras.length - 1]);
  });

  function toUpperCase(palavraFinal) {
    if(!palavraFinal) {
      return;
    }

   letra.value = palavraFinal.charAt(0).toUpperCase() + palavraFinal.slice(1);
  }
}
