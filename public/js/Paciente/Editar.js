const editarPaciente = () => {

  $(document).on('click', ".lista-paciente-acao-rapida-editar", event => {
    let editarPaciente = "";
    let idPaciente = 0;

    editarPaciente = $(event.target).parents('.paciente');
    idPaciente = editarPaciente.attr("data-id").split('/');
    idPaciente = idPaciente[idPaciente.length - 1];

    window.history.pushState('Object', "Orange Nutri", `http://nutricionista.com.br/pacientes/editar/${idPaciente}`);

    buscar("http://nutricionista.com.br/pacientes/editar/", "post", "idPaciente", idPaciente, exibirPagina, "modal");
  });
}

$(document).ready(editarPaciente);
