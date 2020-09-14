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
      var status            = form.status.value;
      var cpf               = form.cpf.value;
      var rg                = form.rg.value;
      var responsavel       = form.responsavel.value;
      var cpfResponsavel    = form.cpfResponsavel.value;
      var municipio         = form.municipio.value;
      
      buscarPaciente({'status':status, 
      'cpf':cpf, 
      'rg':rg, 
      'responsavel':responsavel, 
      'cpfResponsavel':cpfResponsavel, 
      'municipio':municipio});
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
      function endereco(paciente) {
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
                  console.log(xhr.responseText);
              }
          }

        }
      }

      endereco(paciente);
  }
}