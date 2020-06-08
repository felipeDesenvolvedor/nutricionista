document.addEventListener('DOMContentLoaded', function(){    
    
    $formPaciente = document.querySelector('.paciente-novo-form');

    if (!$formPaciente) {
        return;
    }
    
    var idCpf            = document.querySelector("#idCpf");
    var idRG             = document.querySelector("#idRG");
    var idSexo           = document.querySelector("#idSexo");
    var idDataNascimento = document.querySelector("#idDataNascimento");
    var idCpfResponsavel = document.querySelector("#idCpfResponsavel");
    var idCEP            = document.querySelector("#idCEP"); 
    var idEmail          = document.querySelector("#idEmail");
    var fotoPaciente     = document.querySelector("#foto-paciente");

    formPaciente();
    buscaEndereco();
});


function formPaciente() {
    var mostrarErro;
    var mensagem = {
        "campoVazio":"Por favor prencha todos os campos obrigatórios.",
        "emailInvalido":"email invalido"
    };
    
    var form = document.querySelector(".paciente-novo-form");     
        form.addEventListener('submit', function() {
            validaCampoVazio(this.nome);
            validaCampoVazio(this.dataNascimento);
            validaCampoVazio(this.sexo);
            mensagemErro(mensagem.campoVazio);
        });   
    
    function validaCampoVazio(campo) {
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
            var popupMensagem = document.querySelector('#mensagem-erro');
                popupMensagem.classList.add('exibir');
                popupMensagem.textContent = erro;
                mostrarErro = false;
        }

        setTimeout(function(){
            popupMensagem.classList.remove('exibir');
        }, 2000)
    }
}

function buscaEndereco() {
    var campoCep = document.querySelector("#idCEP");
    
    campoCep.addEventListener('input', function(){
        if(this.value.length == 8) {
            endereco(this.value);
        }
    });

    function endereco(cep) {
        var url = "http://viacep.com.br/ws/"+cep+"/json";
        var xhr = new XMLHttpRequest();   
        xhr.open('GET', url, true);
            
        xhr.onreadystatechange = function() {
            // requisição finalizada 
         if(xhr.readyState == 4) {
                // requisicao bem sucedida 
             if(xhr.status == 200) {
                prencherCampos(JSON.parse(xhr.responseText));
             }
         }
 
        }
        xhr.send();
    }
    
    function prencherCampos(dados) {
        document.querySelector("#idEndereco").value    = dados.logradouro;
        document.querySelector("#idMunicipio").value   = dados.uf;
        document.querySelector("#idBairro").value      = dados.bairro;
        document.querySelector("#idComplemento").value = dados.complemento;
    }
}