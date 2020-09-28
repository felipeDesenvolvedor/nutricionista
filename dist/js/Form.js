function buscaPaciente () {
    var nomeProcurado = document.querySelectorAll(".info-nome");
    
    function buscaNome() {
        document.querySelector("#busca-paciente").addEventListener("input", function() {
            var valorDigitado = this.value;
            filtra(valorDigitado);
        });
    }

    function filtra(valorDigitado) {
        nomeProcurado.forEach(function(el){
            var nome = el.textContent;
            var expressao = new RegExp(valorDigitado, "i");
            if (!expressao.test(nome)) {
                el.parentNode.classList.add("invisivel");
            }
            else {
                el.parentNode.classList.remove("invisivel");
            }
        });
    }

    buscaNome();
}

// buscaPaciente();
