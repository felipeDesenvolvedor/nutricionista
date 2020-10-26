<div class='view-filtro'>
  <form class='view-filtro-paciente-form'>
    <div>
      <input class='view-filtro-paciente-busca view-filtro-paciente-campo' type='text' name='nome' placeholder='Pesquisar por nome'/>
      <a class='view-filtro-paciente-btn-novo'>Novo</a>
      <input class='view-filtro-paciente-btn-busca' type='button' name='' value='Buscar'/>
      <input class='view-filtro-paciente-btn' type='button' name='' value='Filtros'/>
    </div>

    <div class='view-filtro-paciente'>
      <div class='view-filtro-paciente-container'>
        <label for='idCpf' class='view-filtro-paciente-container-campo'>
          <input type='text' name='cpf' id='idCpf' placeholder='CPF' class='view-filtro-paciente-campo'>
        </label>

        <label for='idRG' class='view-filtro-paciente-container-campo'>
          <input type='text' name='rg' id='idRG' placeholder='RG' class='view-filtro-paciente-campo'>
        </label>

        <label for='idResponsavel' class='view-filtro-paciente-container-campo'>
          <input type='text' name='responsavel' id='idResponsavel' placeholder='Responsavel' class='view-filtro-paciente-campo'>
        </label>
      </div>

      <div class='view-filtro-paciente-container'>
        <label for='idCpfResponsavel' class='view-filtro-paciente-container-campo'>
          <input type='text' name='cpfResponsavel' id='idCpfResponsavel' placeholder='CPF Responsavel' class='view-filtro-paciente-campo'>
        </label>
        <label for='idStatus' class='view-filtro-paciente-container-campo'>
          <select name='status' id='idStatus'>
            <option value='todos'>Status</option>
            <option value='0'>Inativo</option>
            <option value='1'>Ativo</option>
          </select>
        </label>
      </div>
    </div>
  </form>
</div>

<?php
      if(count($this->pacientes)) {
          echo "<div class='lista-pacientes'>";

          foreach($this->pacientes as $paciente)
          {
              $inativo = $paciente['status'] ? '' : 'esconder';

              echo "<div data-id=/pacientes/editar/{$paciente['idPaciente']} class='paciente'>";
                  echo "<div class=lista-paciente-box>";
                      echo "<img src='/public/img/paciente-foto.jpg' class='lista-paciente-foto'/>";

                      echo "<div class='lista-paciente-dados'>";
                          echo "<span class='js-lista-paciente-nome'>{$paciente['nome']}</span>";
                          echo "<span>{$paciente['sexo']}</span>";
                          echo $paciente['dataNascimento'];
                          echo "<span class='idade'>{$paciente['dataNascimento']}</span>";
                      echo "</div>";

                      echo "<div class='lista-pacientes-acao-rapida'>
                              <span>inativar</span>
                              <span>editar</span>
                              <span>blabla</span>
                              <span>blabla</span>
                            </div>";
                  echo "</div>";

              echo "</div>";
              echo "<div class='separador'></div>";
          }

          echo "</div>";
      }
      else{
          echo "<p>Voçê ainda não possui pacientes cadastrados, para cadastrar clique no botão abaixo</p>";
          echo "<a href=/pacientes/novo><input class='btn-novo-paciente' type='button' name='' value='Novo'/></a>";
      }
?>
