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
    }else {
      // var form = document.querySelector(".paciente-novo-form");
      elementoFilho = Pai(campoVazio).querySelector('span');
      removeClass(elementoFilho, 'campo-vazio');

      // var paciente = {
      //   "nome"           :form.nome.value,
      //   "cpf"            :form.dataNascimento.value,
      //   "rg"             :form.rg.value,
      //   "sexo"           :form.sexo.value,
      //   "dataNascimento" :form.dataNascimento.value,
      //   "responsavel"    :form.responsavel.value,
      //   "cpfResponsavel" :form.cpfResponsavel.value,
      //   "CEP"            :form.CEP.value,
      //   "endereco"       :form.endereco.value,
      //   "numeroEndereco" :form.numeroEndereco.value,
      //   "municipio"      :form.municipio.value,
      //   "bairro"         :form.bairro.value,
      //   "complemento"    :form.complemento.value,
      //   "telefone1"      :form.telefone1.value,
      //   "telefone2"      :form.telefone2.value,
      //   "email"          :form.email.value
      // };
      // salvar("http://nutricionista.com.br/pacientes/novo", "post", 'paciente', paciente, redirecionar, "");

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

function mensagemErro(erro) {
    var popupMensagem = estruturaDaMensagem(erro);

    if(mostrarErro) {
      addClass(popupMensagem, 'exibir');
      // mostrarErro = false;
    }

    myStopFunction(myVarTemp);

    myVarTemp = setTimeout(function(){
        removeClass(popupMensagem, 'exibir');
    }, 4000);
}

function estruturaDaMensagem(erro) {
  var boxErro = document.createElement("span");
      boxErro.textContent = erro;

  var popupMensagem = document.querySelector('#mensagem-erro');
      popupMensagem.appendChild(boxErro);

      return popupMensagem;
}
