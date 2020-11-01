function exibirPagina(conteudo, classPagina) {
  var body = $("body");
      $(`.${classPagina}`).remove();
      body.prepend(conteudo);
}
