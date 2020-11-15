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
