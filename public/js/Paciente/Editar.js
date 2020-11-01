$(document).ready(function(){
  editar();
});


function editar() {
  var editarPaciente = "";
  var idPaciente = 0;

  $(document).on('click', ".lista-paciente-acao-rapida-editar", function(){
    editarPaciente = $(this).parents('.paciente');
    idPaciente = editarPaciente.attr("data-id").split('/');
    idPaciente = idPaciente[idPaciente.length - 1];

    window.history.pushState('Object', "Orange Nutri", `http://nutricionista.com.br/pacientes/editar/${idPaciente}`);

    buscar("http://nutricionista.com.br/pacientes/editar/", "post", "idPaciente", idPaciente, exibirPagina, "modal");
  })
}
