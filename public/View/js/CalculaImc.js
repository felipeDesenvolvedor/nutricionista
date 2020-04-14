var titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida Nutricionista";

var pacientes = document.querySelectorAll(".paciente");

  
for (var i = 0; i < pacientes.length; i++) {
    var pesoEhValido = true;
    var alturaEhValida = true;

    var paciente = pacientes[i];

    var tdPeso = paciente.querySelector(".info-peso");
    var peso = tdPeso.textContent;

    var tdAltura = paciente.querySelector(".info-altura");
    var altura = tdAltura.textContent;

    var tdImc = paciente.querySelector(".info-imc");

    if (validaPeso(peso)) {
        console.log("Peso inválido!");
        pesoEhValido = false;
        tdImc.textContent = "Peso inválido";
        paciente.classList.add("paciente-invalido");
    }

    if (validaAltura(altura)) {
        console.log("Altura inválida!");
        alturaEhValida = false;
        tdImc.textContent = "Altura inválida";
        paciente.classList.add("paciente-invalido");
    }

    if (pesoEhValido && alturaEhValida) {
        var imc = calculaImc(peso, altura);
        tdImc.textContent = imc;
    }
}

function calculaImc(peso, altura) {
    var imc = 0;
    imc = peso / (altura * altura);

    return imc.toFixed(2);
}

function validaPeso(peso) {
    return peso <= 0 || peso >= 1000
}

function validaAltura(altura) {
    return altura <= 0 || altura >= 3.00
}

function validaPacienteInvalido(paciente) {
    var pesoInvalido   = validaPeso(paciente.peso);
    var alturaInvalido = validaAltura(paciente.altura)    

    var pacienteInvalido = pesoInvalido && alturaInvalido;
    
    if (pacienteInvalido) {
        errorShow("Paciente Invalido");     
        return true; 
    }else 
    if (pesoInvalido) {
        errorShow("Peso invalido");
        return true;
    }else 
    if (alturaInvalido) {
        errorShow("Altura Invalida");
    }  
}
