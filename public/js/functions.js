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


function inputEmpty(inputs) {
 
 const empty = inputs.map(input => {

  if(!input.value) {
    return true;
  }else {
    return false;
  }
 });

 return empty.find(item => item == false || item == true);
} 