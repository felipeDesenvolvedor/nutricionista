document.addEventListener('DOMContentLoaded', function(){    
    var idCpf            = document.querySelector("#idCpf");
    var idRG             = document.querySelector("#idRG");
    var idSexo           = document.querySelector("#idSexo");
    var idDataNascimento = document.querySelector("#idDataNascimento");
    var idCpfResponsavel = document.querySelector("#idCpfResponsavel");
    var idCEP            = document.querySelector("#idCEP"); 
    var idEmail          = document.querySelector("#idEmail");
    var fotoPaciente     = document.querySelector("#foto-paciente");

    formPaciente();
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
        mostrarErro = false;
        
        if(!mostrarErro) {
            var popupMensagem = document.querySelector('#mensagem-erro');
                popupMensagem.classList.add('exibir');
                popupMensagem.textContent = erro;
        }

        setTimeout(function(){
            popupMensagem.classList.remove('exibir');
        }, 2000)
    }
}