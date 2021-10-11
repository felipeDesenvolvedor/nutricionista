const editarPaciente = () => {

  $(document).on('click', ".lista-paciente-acao-rapida-editar", event => {
    let editarPaciente = "";
    let id = 0;

    editarPaciente = $(event.target).parents('.paciente');
    id = editarPaciente.attr("data-id").split('/');
    id = id[id.length - 1];

    window.history.pushState('Object', "Orange Nutri", `http://nutricionista.com.br/pacientes/editar/${id}`);

    buscar("http://nutricionista.com.br/pacientes/editar/", "post", "id", id, exibirPagina, "modal");
  });
}

$(document).ready(editarPaciente);
