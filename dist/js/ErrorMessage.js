var mostrarErro;

function campoVazio(campoVazio) {

    if(!campoVazio.value) {
        addErro(campoVazio);

        mostrarErro = true;
        // return mostrarErro;
    }else {
      // var form = document.querySelector(".paciente-novo-form");

      removeErro(campoVazio);

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

      // mostrarErro = false;
      // return mostrarErro;
    }
}

function validaEmail(campoVazio) {
  var elementoPai   = campoVazio.parentNode;
  var elementoFilho = elementoPai.querySelector('span');

  if(!campoVazio.value) {
      addErro(elementoFilho);

      mostrarErro = true;
      event.preventDefault();
  }else {
      removeErro(elementoFilho);
  }
}

function addErro(elemento) {
    let elementoFilho = campoAlvo(elemento);
    elementoFilho.classList.add('campo-vazio');
}

function removeErro(elemento) {
    let elementoFilho = campoAlvo(elemento);
    elementoFilho.classList.remove('campo-vazio');
}

function campoAlvo(elemento) {
  var elementoPai   = elemento.parentNode;
  var elementoFilho = elementoPai.querySelector('span');

  return elementoFilho;
}

function mensagemErro(erro) {


    if(mostrarErro) {

        var boxErro = document.createElement("span");
            boxErro.textContent = erro;

        var popupMensagem = document.querySelector('#mensagem-erro');
            popupMensagem.classList.add('exibir');

            popupMensagem.appendChild(boxErro);
            mostrarErro = false;
    }

    myStopFunction(myVarTemp);

    myVarTemp = setTimeout(function(){
        popupMensagem.classList.remove('exibir');
    }, 4000);

}
