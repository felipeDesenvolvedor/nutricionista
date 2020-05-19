<?php 
        echo 
        '
        <div>
            <form>
                <input class="input-busca-paciente" type="text" name="" placeholder="Pesquisar por nome"/>
                <input class="btn-filtro-paciente" type="button" name="" value="Filtros"/>
                <input class="btn-busca-paciente" type="button" name="" value="Buscar"/>
                <a href=/pacientes/novo><input class="btn-novo-paciente" type="button" name="" value="Novo"/></a>
            </form>
        </div>    
        ';

        echo '<div class="lista-pacientes">';
        if(count($this->pacientes)) {
            echo '<p>lista de pacientes</p>';     
        }
        else{
            echo '<p>Voçê ainda não possui pacientes cadastrados, para cadastrar clique no botão abaixo</p>';
            echo '<a href=/pacientes/novo><input class="btn-novo-paciente" type="button" name="" value="Novo"/></a>';
        }
        echo '</div>';
?>