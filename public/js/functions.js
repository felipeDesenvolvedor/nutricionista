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
