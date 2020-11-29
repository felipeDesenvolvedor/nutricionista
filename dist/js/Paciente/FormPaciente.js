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

    $('#mensagem-erro span').remove();

    console.log(campoVazio(form.nome));
    console.log(campoVazio(form.dataNascimento));
    console.log(campoVazio(form.sexo));

    if(!campoVazio(form.nome) && !campoVazio(form.dataNascimento) && !campoVazio(form.sexo)) {
      var form = document.querySelector(".paciente-novo-form");
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
      salvar("http://nutricionista.com.br/pacientes/novo", "post", 'paciente', paciente, redirecionar, "");
    }

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
