<?php

if(count($this->pacientes)) {

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
          echo "</div>";

          echo "<div class='lista-pacientes-acao-rapida'>
                  <span class='lista-paciente-acao-rapida-inativar lista-paciente-acao-rapida-item'></span>
                  <span class='lista-paciente-acao-rapida-editar lista-paciente-acao-rapida-item'></span>
                  <span class='lista-paciente-acao-rapida-atendimento lista-paciente-acao-rapida-item'></span>
                  <span class='lista-paciente-acao-rapida-agenda lista-paciente-acao-rapida-item'></span>
                </div>";
      echo "</div>";
      echo "<div class='separador'></div>";
  }
}
// else{
//     echo "<p>Voçê ainda não possui pacientes cadastrados, para cadastrar clique no botão abaixo</p>";
//     echo "<a href=/pacientes/novo><input class='btn-novo-paciente' type='button' name='' value='Novo'/></a>";
// }
