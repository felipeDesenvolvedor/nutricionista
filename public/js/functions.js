var myVarTemp;

function exibirPagina(conteudo, classPagina) {
  var body = $("body");
      $(`.${classPagina}`).remove();
      body.prepend(conteudo);
}

function redirecionar(conteudo, classPagina) {
  console.log(conteudo);
}

function myStopFunction(myVarTemp) {
  clearTimeout(myVarTemp);
}

function Pai(elemento) {
  var elementoPai = elemento.parentNode;
  return elementoPai;
}

function addErro(elemento, classe) {
    elemento.classList.add(classe);
}

function removeErro(elemento, classe) {
    elemento.classList.remove(classe);
}
