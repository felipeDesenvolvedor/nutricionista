var mostrarErro;

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

function validaEmail(campo) {
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

        var boxErro = document.createElement("span");
            boxErro.textContent = erro;

        var popupMensagem = document.querySelector('#mensagem-erro');
            popupMensagem.classList.add('exibir');

            popupMensagem.appendChild(boxErro);
            // mostrarErro = false;
    }

    myStopFunction(myVarTemp);

    myVarTemp = setTimeout(function(){
        popupMensagem.classList.remove('exibir');
    }, 4000);

}
