$(document).ready(function(){
  novo();
});


function novo() {
    // var addPaciente = $(".view-filtro-paciente-btn-novo");

  $(document).on('click', ".view-filtro-paciente-btn-novo", function(){
    window.history.pushState('Object', "Orange Nutri", "http://nutricionista.com.br/pacientes/novo");

    buscar("http://nutricionista.com.br/pacientes/novo", "get", "", "", exibirPagina, "modal");
  })

  // $(document).on('submit', ".paciente-novo-form", function(){
  //
  // });
}
