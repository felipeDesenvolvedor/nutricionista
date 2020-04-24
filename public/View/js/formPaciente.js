document.addEventListener('DOMContentLoaded', function(){    
    var idNome           = document.querySelector("#idNome");
    var idCpf            = document.querySelector("#idCpf");
    var idRG             = document.querySelector("#idRG");
    var idSexo           = document.querySelector("#idSexo");
    var idDataNascimento = document.querySelector("#idDataNascimento");
    var idCpfResponsavel = document.querySelector("#idCpfResponsavel");
    var idCEP            = document.querySelector("#idCEP"); 
    var idEmail          = document.querySelector("#idEmail");
    var fotoPaciente     = document.querySelector("#foto-paciente");
    var campoVazio;

    formPaciente();
});


function formPaciente() {
    var mostrouErro;
    var mensagem = {
        "campoVazio":"Campo vazio",
        "emailInvalido":"email invalido"
    };
    
    var form = document.querySelector(".paciente-novo-form");     
        form.addEventListener('submit', function() {
            validaCampoVazio(this.nome);
            validaCampoVazio(this.dataNascimento);
            validaCampoVazio(this.sexo);
        });   
    
    function validaCampoVazio(campo) {
        var elementoPai   = campo.parentNode;
        var elementoFilho = elementoPai.querySelector('span');
    
        if(!campo.value) {
            addErro(elementoFilho);
            mensagemErro(mensagem.campoVazio);
    
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
        // mostrouErro = false;
        
        // if(!mostrouErro) {
        //     alert(erro);
        //     mostrouErro = true;
        // }
    }
}