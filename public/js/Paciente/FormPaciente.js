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
      const response = (xhr, classPagina) => {
        if(xhr.status == 404) {

          mostrarErro = true;
          mensagemErro("Recurso não encontrado");
          return;
        }

        if(xhr.status == 201) {

          mostrarErro = true;
          mensagemErro("Paciente Salvo", redirecionar);
          return;
        }

        if(xhr.status == 500) {

          // mostrarErro = true;
          console.log(xhr)
          // mensagemErro(xhr.responseText, redirecionar);
          return;
        }
      }

      let $formData = new FormData(event.target);

      if(action == "editar") {
        let id = extractIdUrl();

        $formData.append("id", id)
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