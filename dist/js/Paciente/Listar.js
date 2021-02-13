document.addEventListener('DOMContentLoaded', () => {
    const listaPacientes = document.querySelector('.lista-pacientes');

    if (!listaPacientes) {
        return;
    }

    filtro();
    filtrarPaciente();
});

const filtro = () => {
  $filtro = document.querySelector('.view-filtro-paciente');
  $btnFiltros = document.querySelector('.view-filtro-paciente-btn');

  $btnFiltros.addEventListener('click', () => $filtro.classList.toggle('aberto'));
}

const filtrarPaciente = () => {
  var $buscar = document.querySelector('.view-filtro-paciente-btn-busca');
  var $campo  = document.querySelector('.view-filtro-paciente-busca');
  var form    = document.querySelector('.view-filtro-paciente-form');

  const buscarPaciente = (paciente) => {
    const listaPacientes = document.querySelector('.lista-pacientes');
    const exibir = (pacientes, classPagina) => {
      listaPacientes.innerText = '';
      listaPacientes.innerHTML = pacientes;
    }

    buscar('http://nutricionista.com.br/pacientes/buscar/', 'post', 'paciente', paciente, exibir, '');
  }

  const pegarDadosEntrada = () => {
    var camposEmBrancos = inputEmpty(form.nome) && inputEmpty(form.cpf) && inputEmpty(form.rg) && inputEmpty(form.responsavel) && inputEmpty(form.cpfResponsavel);

    if(camposEmBrancos) {
      buscarPaciente({});
    }else {
      buscarPaciente({"nome":form.nome.value, "cpf":form.cpf.value, "rg":form.rg.value, "responsavel":form.responsavel.value, "cpfResponsavel":form.cpfResponsavel.value});
    }
  }

  $buscar.addEventListener('click', () => pegarDadosEntrada());
  $campo.addEventListener('keyup', () => pegarDadosEntrada());
}
