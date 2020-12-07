var myVarTemp;

function exibirPagina(conteudo, classPagina) {
  var body = $("body");
      $(`.${classPagina}`).remove();
      body.prepend(conteudo);
}

function redirecionar(conteudo, classPagina) {
  window.location = "/";
}

function myStopFunction(myVarTemp) {
  clearTimeout(myVarTemp);
}

function Pai(elemento) {
  var elementoPai = elemento.parentNode;
  return elementoPai;
}

function addClass(elemento, classe) {
    elemento.classList.add(classe);
}

function removeClass(elemento, classe) {
    elemento.classList.remove(classe);
}
