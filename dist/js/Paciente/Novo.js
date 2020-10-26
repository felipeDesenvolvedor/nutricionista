$(document).ready(function(){
  novo();
});


function novo() {
    var addPaciente = $(".view-filtro-paciente-btn-novo");

  addPaciente.click(function(){
    window.history.pushState('Object', "Orange Nutri", "http://nutricionista.com.br/pacientes/novo");

    buscar("http://nutricionista.com.br/pacientes/novo", "get", "", "", exibirPagina);
  })
}
