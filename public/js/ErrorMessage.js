var mostrarErro;

function campoVazio(campo) {
    var elementoPai   = campo.parentNode;
    var elementoFilho = elementoPai.querySelector('span');

    if(!campo.value) {
        addErro(elementoFilho);

        mostrarErro = true;
        return mostrarErro;
    }else {
      var form = document.querySelector(".paciente-novo-form");

      removeErro(elementoFilho);

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

      mostrarErro = false;
      return mostrarErro;
    }

    function addErro(elemento) {
        elemento.classList.add('campo-vazio');
    }

    function removeErro(elemento) {
        elemento.classList.remove('campo-vazio');
    }
}

function validaEmail(campo) {
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
