<?php
  $abas = [
    "aba_1" => "abas-item-sobre",
    "aba_2" => "abas-item-anamenese",
    "aba_3" => "abas-item-avaliacao-clinica",
    "aba_4" => "abas-item-avaliacao-laboratorial",
    "aba_5" => "js-abas-item-foto-paciente abas-item-foto-paciente"
  ];

  $action = "cadastrar";
 ?>

<nav class="abas-container">
  <ul class="abas-lista">
    <?php
      foreach($abas as $aba) {

        if ($action == "cadastrar" && $aba == "Sobre") {
          continue;
        }
        echo "<li class='abas-item {$aba}'></li>";
      }
     ?>
  </ul>
</nav>
