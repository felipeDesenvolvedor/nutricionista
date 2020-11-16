var myVarTemp;

function exibirPagina(conteudo, classPagina) {
  var body = $("body");
      $(`.${classPagina}`).remove();
      body.prepend(conteudo);
}

function myStopFunction(myVarTemp) {
  clearTimeout(myVarTemp);
}
