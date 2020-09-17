document.addEventListener('DOMContentLoaded', function(){
    $listaPacientes = document.querySelector('.lista-pacientes');

    if (!$listaPacientes) {
        return;
    }

    filtro();
    filtrarPaciente();
});

function filtro() {
  $filtro = document.querySelector('.view-filtro-paciente');  
  $btnFiltros = document.querySelector('.btn-filtro-paciente');
  
  $btnFiltros.addEventListener('click', function(){
    $filtro.classList.toggle('aberto');
  });
}

function filtrarPaciente() {
  var $buscar = document.querySelector('.btn-busca-paciente');
  var form = document.querySelector('.view-filtro-paciente-form');

  $buscar.addEventListener('click', function(){ 
      var status         = form.status.value;
      var cpf            = form.cpf.value;
      var rg             = form.rg.value;
      var responsavel    = form.responsavel.value;
      var cpfResponsavel = form.cpfResponsavel.value;
      var municipio      = form.municipio.value;
      
      if(status && !cpf && !rg && !responsavel && !cpfResponsavel && !municipio) {
        buscarPaciente({});
      }else {

        buscarPaciente({"status":status,"cpf":cpf, "rg":rg, "responsavel":responsavel, "cpfResponsavel":cpfResponsavel, "municipio":municipio});
      }
  });

  function buscarPaciente(paciente) {
      function buscar(paciente) {
        var xhr = new XMLHttpRequest();   
        var url = `http://nutricionista.com.br/pacientes/buscar/`;
        xhr.open('POST', url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`paciente=${JSON.stringify(paciente)}`);

        xhr.onreadystatechange = function() {
            // requisição finalizada 
          if(xhr.readyState == 4) {
                  // requisicao bem sucedida 
              if(xhr.status == 200) {
                  exibir(xhr.responseText);
              }
          }

        }
      }

      buscar(paciente);

      function exibir(pacientes) {
        var listaPacientes = document.querySelector('.lista-pacientes');
            listaPacientes.innerText = '';
        
            JSON.parse(pacientes).forEach(function(paciente) {
              var pacienteLinha = `
                <div class=lista-paciente-box>
                    <div class="lista-paciente-foto"></div>
            
                    <div class="lista-paciente-dados">
                        <span class="js-lista-paciente-nome">${paciente['nome']}</span>
                        <span>${paciente['sexo']}</span>
                        ${paciente['dataNascimento']}
                        <span class="idade">${paciente['dataNascimento']}</span>
                    </div>
                </div>
              `;

              var elementoPaciente = document.createElement('a');
                  elementoPaciente.setAttribute('href', `/pacientes/editar/${paciente['idPaciente']}`);
                  elementoPaciente.classList.add('paciente');

              elementoPaciente.innerHTML = pacienteLinha;
              listaPacientes.appendChild(elementoPaciente);
              
        });
      }
  }
}