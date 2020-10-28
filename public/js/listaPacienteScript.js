document.addEventListener('DOMContentLoaded', function(){
    $listaPacientes = document.querySelector('.lista-pacientes');

    if (!$listaPacientes) {
        return;
    }

    filtro();
    filtrarPaciente();
    // filtrarNome();
});

function filtro() {
  $filtro = document.querySelector('.view-filtro-paciente');
  $btnFiltros = document.querySelector('.view-filtro-paciente-btn');

  $btnFiltros.addEventListener('click', function(){
    $filtro.classList.toggle('aberto');
  });
}

function filtrarPaciente() {
  var $buscar = document.querySelector('.view-filtro-paciente-btn-busca');
  var $campo = document.querySelector('.view-filtro-paciente-busca');
  var form = document.querySelector('.view-filtro-paciente-form');

  $buscar.addEventListener('click', function(){
      var nome           = form.nome.value;
      var status         = form.status.value;
      var cpf            = form.cpf.value;
      var rg             = form.rg.value;
      var responsavel    = form.responsavel.value;
      var cpfResponsavel = form.cpfResponsavel.value;

      if(!status && !nome && !cpf && !rg && !responsavel && !cpfResponsavel) {
        buscarPaciente({});
      }else {

        buscarPaciente({"nome":nome, "status":status,"cpf":cpf, "rg":rg, "responsavel":responsavel, "cpfResponsavel":cpfResponsavel});
      }
  });

  $campo.addEventListener('keyup', function(){
    var nome           = form.nome.value;
    var status         = form.status.value;
    var cpf            = form.cpf.value;
    var rg             = form.rg.value;
    var responsavel    = form.responsavel.value;
    var cpfResponsavel = form.cpfResponsavel.value;

    if(status && !nome && !cpf && !rg && !responsavel && !cpfResponsavel) {
      buscarPaciente({});
    }else {

      buscarPaciente({"nome":nome, "status":status,"cpf":cpf, "rg":rg, "responsavel":responsavel, "cpfResponsavel":cpfResponsavel});
    }

   });

  function buscarPaciente(paciente) {

      buscar('http://nutricionista.com.br/pacientes/buscar/', 'post', 'paciente', paciente, exibir);

      function exibir(pacientes) {
        var listaPacientes = document.querySelector('.lista-pacientes');
            listaPacientes.innerText = '';

            JSON.parse(pacientes).forEach(function(paciente) {
              var pacienteLinha = `
                <div class=lista-paciente-box>
                    <img src="/public/img/paciente-foto.jpg" class="lista-paciente-foto">

                    <div class="lista-paciente-dados">
                        <span class="js-lista-paciente-nome">${paciente['nome']}</span>
                        <span>${paciente['sexo']}</span>
                        ${paciente['dataNascimento']}
                        <span class="idade">${paciente['dataNascimento']}</span>
                    </div>

                    <div class='lista-pacientes-acao-rapida'>
                      <span class='lista-paciente-acao-rapida-inativar lista-paciente-acao-rapida-item'></span>
                      <span class='lista-paciente-acao-rapida-editar lista-paciente-acao-rapida-item'></span>
                      <span class='lista-paciente-acao-rapida-atendimento lista-paciente-acao-rapida-item'></span>
                      <span class='lista-paciente-acao-rapida-agenda lista-paciente-acao-rapida-item'></span>
                    </div>
                </div>
              `;

              var separador = document.createElement('div');
                  separador.classList.add('separador');

              var elementoPaciente = document.createElement('div');
                  elementoPaciente.setAttribute('data-id', `/pacientes/editar/${paciente['idPaciente']}`);
                  elementoPaciente.classList.add('paciente');

              elementoPaciente.innerHTML = pacienteLinha;
              listaPacientes.appendChild(elementoPaciente);

              $('.separador').remove();
              $('.paciente').prepend(separador);
        });
      }
  }
}


function filtrarNome() {
  var letra = document.querySelector('.view-filtro-paciente-busca');
  var letraNova = letra.value;
  var teste = [];

letra.addEventListener('input', function(){

    var arrayLetras = this.value.split(' ');
        toUpperCase(arrayLetras[arrayLetras.length - 1]);

});


function toUpperCase(palavraFinal) {
      if(!palavraFinal) {
        return;
      }

     letra.value = palavraFinal.charAt(0).toUpperCase() + palavraFinal.slice(1);
}

}
