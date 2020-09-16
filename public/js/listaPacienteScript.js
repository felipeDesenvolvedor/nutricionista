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
      var status            = form.status.value ? form.status.value : " ";
      var cpf               = form.cpf.value ? form.cpf.value : " ";
      var rg                = form.rg.value ? form.rg.value : " ";
      var responsavel       = form.responsavel.value ? form.responsavel.value : " ";
      var cpfResponsavel    = form.cpfResponsavel.value ? form.cpfResponsavel.value: " ";
      var municipio         = form.municipio.value ? form.municipio.value : " ";
      
      // buscarPaciente('{"status":'+status+',"cpf":'+cpf+',"rg":'+rg+',"responsavel":'+responsavel+', "cpfResponsavel":'+cpfResponsavel+', "municipio":'+municipio+'}');
      buscarPaciente({"status":status,"cpf":cpf, "rg":rg, "responsavel":responsavel, "cpfResponsavel":cpfResponsavel, "municipio":municipio});
  });
  
  // $buscar.addEventListener('click', function() {
  //   var statusSelecionado = 
   
  //   switch(statusSelecionado) {
  //     case 'todos':
  //       console.log(statusSelecionado); 
  //     break;
  //     case '0':
  //       console.log(statusSelecionado);
  //     break;
  //     case '1':
  //       console.log(statusSelecionado);
  //     break;  
  //   }

  // });


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
      //      "<a href=/pacientes/editar/{$paciente['idPaciente']} class='paciente'>";
      //     '<div class=lista-paciente-box>';
      //         '<div class="lista-paciente-foto"></div>';
      
      //         '<div class="lista-paciente-dados">';
      //             '<span class="js-lista-paciente-nome">'.$paciente['nome'].'</span>';
      //             '<span>'.$paciente['sexo'].'</span>';
      //             $paciente['dataNascimento'];
      //             '<span class="idade">'.$paciente['dataNascimento'].'</span>';
      //         '</div>';
      //     '</div>';
      // '</a>';

        JSON.parse(pacientes).forEach(function(el) {
          console.log(el);
        });
      }
  }
}