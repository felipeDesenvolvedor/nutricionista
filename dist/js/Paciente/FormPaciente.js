document.addEventListener('DOMContentLoaded', function(){

  acoes();
});

function acoes() {
  formPaciente();
  buscaEndereco();
  Modal();
}

function formPaciente() {


  $(document).on('click', ".novo-paciente-salvar", function(){
    var form = document.querySelector(".paciente-novo-form");
    var mensagem = {
        "campoVazio":"Por favor prencha todos os campos obrigatórios.",
        "emailInvalido":"email invalido"
    };

    $('#mensagem-erro span').remove();

    validaCampoVazio(form.nome);
    validaCampoVazio(form.dataNascimento);
    validaCampoVazio(form.sexo);
    mensagemErro(mensagem.campoVazio);

    // validaEmail(this.email);
    // mensagemErro(mensagem.emailInvalido);
  });
}

function buscaEndereco() {

    $(document).on('input', "#idCEP", function(){
      if(this.value.length == 8) {
          buscar("http://viacep.com.br/ws/"+this.value+"/json", "get", '', '', prencherCampos);
      }
      else if(this.value.length < 8) {
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

function Modal() {

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
