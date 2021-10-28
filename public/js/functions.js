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


function inputEmpty(input) {
  return !input.value ? true : false;
} 

function extractIdUrl() {
  let pattern = /\/\d+/
  let text = window.location.href
  let result = text.match(pattern)
  result = result[0].split('/')[1]
  return result;
}