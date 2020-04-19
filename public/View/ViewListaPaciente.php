<?php

    function listarPacientes() {
        
        echo '<div class="lista-pacientes">';
            if(0) {
                echo '<p>lista de pacientes</p>';     
            }
            else{
                echo '<p>Voçê ainda não possui pacientes cadastrados, para cadastrar clique no botão abaixo</p>';
                echo '<input class="btn-novo-paciente" type="button" name="" value="Novo"/>';
            }
        echo '</div>';
    }
?>