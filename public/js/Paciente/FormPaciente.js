document.addEventListener('DOMContentLoaded', function(){
  acoes();
});

function acoes() {
  formPaciente();
  buscaEndereco();
  Modal();
}

function formPaciente() {

  $(document).on('submit', ".paciente-novo-form", function(){

    var mostrarErro;
    var mensagem = {
        "campoVazio":"Por favor prencha todos os campos obrigatórios.",
        "emailInvalido":"email invalido"
    };

    validaCampoVazio(this.nome);
    validaCampoVazio(this.dataNascimento);
    validaCampoVazio(this.sexo);
    mensagemErro(mensagem.campoVazio);


    function validaCampoVazio(campo) {
        var elementoPai   = campo.parentNode;
        var elementoFilho = elementoPai.querySelector('span');

        if(!campo.value) {
            addErro(elementoFilho);

            mostrarErro = true;
            event.preventDefault();
        }else {
            removeErro(elementoFilho);
        }

        function addErro(elemento) {
            elemento.classList.add('campo-vazio');
        }

        function removeErro(elemento) {
            elemento.classList.remove('campo-vazio');
        }
    }

    function mensagemErro(erro) {

        if(mostrarErro) {
            var popupMensagem = document.querySelector('#mensagem-erro');
                popupMensagem.classList.add('exibir');
                popupMensagem.textContent = erro;
                mostrarErro = false;
        }

        setTimeout(function(){
            popupMensagem.classList.remove('exibir');
        }, 2000);
    }
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
