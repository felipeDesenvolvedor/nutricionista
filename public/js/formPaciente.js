document.addEventListener('DOMContentLoaded', function(){
  acoes();
});

function acoes() {
  $formPaciente = document.querySelector('.paciente-novo-form');

  if (!$formPaciente) {
      return;
  }

  var idCpf            = document.querySelector("#idCpf");
  var idRG             = document.querySelector("#idRG");
  var idSexo           = document.querySelector("#idSexo");
  var idDataNascimento = document.querySelector("#idDataNascimento");
  var idCpfResponsavel = document.querySelector("#idCpfResponsavel");
  var idCEP            = document.querySelector("#idCEP");
  var idEmail          = document.querySelector("#idEmail");
  var fotoPaciente     = document.querySelector("#foto-paciente");

  formPaciente();
  buscaEndereco();
  Modal();
}

function formPaciente() {
    var mostrarErro;
    var mensagem = {
        "campoVazio":"Por favor prencha todos os campos obrigatórios.",
        "emailInvalido":"email invalido"
    };

    var form = document.querySelector(".paciente-novo-form");
        form.addEventListener('submit', function() {
            validaCampoVazio(this.nome);
            validaCampoVazio(this.dataNascimento);
            validaCampoVazio(this.sexo);
            mensagemErro(mensagem.campoVazio);
        });

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
}

function buscaEndereco() {
    var campoCep = document.querySelector("#idCEP");

    campoCep.addEventListener('input', function(){
        if(this.value.length == 8) {
            buscar("http://viacep.com.br/ws/"+this.value+"/json", "get", '', '', prencherCampos);
        }
        else if(this.value.length < 8) {
            prencherCampos({logradouro:'', uf:'', bairro:'', complemento:''});
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
  function fechar() {
    var botao = document.querySelector('.modal-fechar');
    botao.addEventListener('click', function(){
      document.querySelector('.modal').classList.toggle('aberto');

    window.history.pushState('Object', "Orange Nutri", "http://nutricionista.com.br/pacientes");
    });
  }

  fechar();
}
