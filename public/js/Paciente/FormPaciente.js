document.addEventListener('DOMContentLoaded', () => {
  acoes();
});

const acoes = () => {
  formPaciente();
  buscaEndereco();
  Modal();
}

const formPaciente = () => {

  var arquivo = "";

  $(document).on('change', '.abas-item-foto-paciente', function(event) {
      arquivo = {
        "nomeArquivo":event.target.files[0].name,
        "tipoArquivo":event.target.files[0].type
      }
      arquivo = arquivo;
  });

  $(document).on('submit', ".paciente-novo-form", function(event){
    event.preventDefault();

    var form = document.querySelector(".paciente-novo-form");

    $('#mensagem-erro span').remove();

    if(!campoVazio(form.nome) && !campoVazio(form.dataNascimento) && !campoVazio(form.sexo)) {
      var paciente = {
        "nome"           :form.nome.value,
        "cpf"            :form.dataNascimento.value,
        "rg"             :form.rg.value,
        "sexo"           :form.sexo.value,
        "dataNascimento" :form.dataNascimento.value,
        "responsavel"    :form.responsavel.value,
        "cpfResponsavel" :form.cpfResponsavel.value,
        "CEP"            :form.CEP.value,
        "endereco"       :form.endereco.value,
        "numeroEndereco" :form.numeroEndereco.value,
        "municipio"      :form.municipio.value,
        "bairro"         :form.bairro.value,
        "complemento"    :form.complemento.value,
        "telefone1"      :form.telefone1.value,
        "telefone2"      :form.telefone2.value,
        "email"          :form.email.value
      };


      var $formData = new FormData(event.target);
      requestPost("http://nutricionista.com.br/pacientes/novo", "POST", 'paciente', $formData, response, "");

      function response(responseText, classPagina) {
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

    $(document).on('input', "#idCEP", function(event){
      let cep = event.target.value.replace('-', '');
      let cepLength = cep.length; 
      
      if(cepLength == 8) {
          buscar("http://viacep.com.br/ws/"+cep+"/json", "get", '', '', prencherCampos, '');
      }
      else if(cepLength < 8) {
          prencherCampos('{"logradouro":"", "uf":"", "bairro":"", "complemento":""}');
      }
    });

    function prencherCampos(dados) {
        var dados = JSON.parse(dados);
        document.querySelector("#idEndereco").value    = dados.logradouro;
        document.querySelector("#idMunicipio").value   = dados.uf;
        document.querySelector("#idBairro").value      = dados.bairro;
        document.querySelector("#idComplemento").value = dados.complemento;
    }
}

const Modal = () => {

  $(document).on('click', '.modal-fechar', function(){
      fechar();
  });

  $(document).on('keydown', window, function(el){
    var esc = el.keyCode;
    if(esc == 27) {
      fechar();
    }
  })

  function fechar() {
    var modal = document.querySelector('.modal');

    if (!modal) {
        return;
    }

    if(modal.classList.contains('aberto')) {
      modal.classList.remove('aberto')
      window.history.pushState('Object', "Orange Nutri", "http://nutricionista.com.br/pacientes");
    };
  }
}
