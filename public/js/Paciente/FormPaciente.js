document.addEventListener('DOMContentLoaded', () => {
  acoes();
});

const acoes = () => {
  formPaciente();
  buscaEndereco();
  Modal();
}

const formPaciente = () => {

  let arquivo = "";

  $(document).on('change', '.abas-item-foto-paciente', (event) => {
      arquivo = {
        "nomeArquivo":event.target.files[0].name,
        "tipoArquivo":event.target.files[0].type
      }
      arquivo = arquivo;
  });

  $(document).on('submit', ".paciente-novo-form", (event) => {
    event.preventDefault();

    let form = document.querySelector(".paciente-novo-form");

    $('#mensagem-erro span').remove();

    if(!campoVazio(form.nome) && !campoVazio(form.dataNascimento) && !campoVazio(form.sexo)) {
     
      let $formData = new FormData(event.target);
      requestPost("http://nutricionista.com.br/pacientes/novo", "POST", 'paciente', $formData, response, "");

      const response = (responseText, classPagina) => {
        if(responseText) {

          mostrarErro = true;
          mensagemErro(responseText);
          return;
        }

        redirecionar("", "");
        return;
      }
    }
  });
}

const buscaEndereco = () => {

    $(document).on('input', "#idCEP", (event) => {
      let cep = event.target.value.replace('-', '');
      let cepLength = cep.length; 
      
      if(cepLength == 8) {
          buscar("http://viacep.com.br/ws/"+cep+"/json", "get", '', '', prencherCampos, '');
      }
      else if(cepLength < 8) {
          prencherCampos('{"logradouro":"", "uf":"", "bairro":"", "complemento":""}');
      }
    });

    const prencherCampos = (dados) => {
        let dados = JSON.parse(dados);
        document.querySelector("#idEndereco").value    = dados.logradouro;
        document.querySelector("#idMunicipio").value   = dados.uf;
        document.querySelector("#idBairro").value      = dados.bairro;
        document.querySelector("#idComplemento").value = dados.complemento;
    }
}

const Modal = () => {

  $(document).on('click', '.modal-fechar', () => fechar());

  $(document).on('keydown', window, (el) => {
    let esc = el.keyCode;
    if(esc == 27) {
      fechar();
    }
  })

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
}
