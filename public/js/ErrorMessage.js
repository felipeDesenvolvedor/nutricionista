var mostrarErro;
var mensagem = {
    "campoVazio":"Por favor prencha todos os campos obrigatórios.",
    "emailInvalido":"email invalido"
};

function campoVazio(campoVazio) {
    var elementoFilho;

    if(!campoVazio.value) {
      event.preventDefault();

      elementoFilho = Pai(campoVazio).querySelector('span');
      addClass(elementoFilho, 'campo-vazio');

      mostrarErro = true;
      mensagemErro(mensagem.campoVazio);

      return true;
    }else {
      elementoFilho = Pai(campoVazio).querySelector('span');
      removeClass(elementoFilho, 'campo-vazio');

      return false;
    }
}

function validaEmail(campoVazio) {
  var elementoPai   = campoVazio.parentNode;
  var elementoFilho = elementoPai.querySelector('span');

  if(!campoVazio.value) {
      addClass(elementoFilho);

      mostrarErro = true;
      event.preventDefault();
  }else {
      removeClass(elementoFilho);
  }
}

function mensagemErro(erro, cb) {
    var popupMensagem = estruturaDaMensagem(erro);

    if(mostrarErro) {
      addClass(popupMensagem, 'exibir');
      mostrarErro = false;
    }

    myStopFunction(myVarTemp);

    myVarTemp = setTimeout(function(){
        removeClass(popupMensagem, 'exibir');

        cb ? cb("", "") : "";
    }, 4000);
}

function estruturaDaMensagem(erro) {
  var boxErro = document.createElement("span");
      boxErro.textContent = erro;

  var popupMensagem = document.querySelector('#mensagem-erro');
      popupMensagem.appendChild(boxErro);

      return popupMensagem;
}
