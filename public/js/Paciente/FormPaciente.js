const formPaciente = () => {

  let arquivo = "";

  $(document).on('change', '.abas-item-foto-paciente', event => {
      arquivo = {
        "nomeArquivo":event.target.files[0].name,
        "tipoArquivo":event.target.files[0].type
      }
      arquivo = arquivo;
  });

  $(document).on('submit', ".paciente-novo-form", event => {
    event.preventDefault();

    let form = document.querySelector(".paciente-novo-form");

    $('#mensagem-erro span').remove();

    if(!campoVazio(form.nome) && !campoVazio(form.dataNascimento) && !campoVazio(form.sexo)) {
      
      let action = form.dataset.action;
      const response = (responseText, classPagina) => {
        if(responseText != 201) {

          mostrarErro = true;
          console.log(responseText)
          mensagemErro(responseText);
          return;
        }

        if(responseText == 201) {

          redirecionar("", "");
          return;
        }
      }

      let $formData = new FormData(event.target);

      if(action == "editar") {
        $formData.append("id", window.location.pathname.slice(window.location.pathname.length - 1, window.location.pathname.length))
        requestPost("http://nutricionista.com.br/pacientes/editar", "post", 'paciente', $formData, response, "");
      }else {
        requestPost("http://nutricionista.com.br/pacientes/novo", "post", 'paciente', $formData, response, "");
      }
    }
  });
}

const buscaEndereco = () => {

    $(document).on('input', "#idCEP", event => {
      let cep = event.target.value.replace('-', '');
      let cepLength = cep.length; 
      
      if(cepLength == 8) {
          buscar("http://viacep.com.br/ws/"+cep+"/json", "get", '', '', prencherCampos, '');
      }
      else if(cepLength < 8) {
          prencherCampos('{"logradouro":"", "uf":"", "bairro":"", "complemento":""}');
      }
    });

    const prencherCampos = dados => {
        const {logradouro, uf, bairro, complemento} = JSON.parse(dados);

        document.querySelector("#idEndereco").value    = logradouro;
        document.querySelector("#idMunicipio").value   = uf;
        document.querySelector("#idBairro").value      = bairro;
        document.querySelector("#idComplemento").value = complemento;
    }
}

const Modal = () => {

  const fechar = () => {
    let modal = document.querySelector('.modal');

    if (!modal) {
        return;
    }

    if(modal.classList.contains('aberto')) {
      modal.classList.remove('aberto')
      window.history.pushState('Object', "Orange Nutri", "http://nutricionista.com.br/pacientes");
    };
  }

  $(document).on('click', '.modal-fechar', fechar);
  
  $(document).on('keydown', window, el => {
    let esc = el.keyCode;
    if(esc == 27) {
      fechar();
    }
  })
}

const acoes = () => {
  formPaciente();
  buscaEndereco();
  Modal();
}

document.addEventListener('DOMContentLoaded', acoes);