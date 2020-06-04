<?php 
        echo 
        '   <div>
                <form>
                    <input class="input-busca-paciente" type="text" name="" placeholder="Pesquisar por nome"/>
                    <input class="btn-filtro-paciente" type="button" name="" value="Filtros"/>
                    <input class="btn-busca-paciente" type="button" name="" value="Buscar"/>
                    <a href=/pacientes/novo><input class="btn-novo-paciente" type="button" name="" value="Novo"/></a>
                </form>
            </div>    
        ';

        echo '<div class="lista-pacientes-filtro esconder">';
                require_once($GLOBALS['caminhoDosArquivos']['ViewFiltroPaciente']);            
        echo '</div>';

        echo '<div class="lista-pacientes">';
            if(count($this->pacientes)) {
                $indice = 0;

                foreach($this->pacientes as $paciente)
                {   
                    $indice += 1;
                    
                    echo '<a href=/pacientes/editar/'.$paciente['idPaciente'].' data-status='.$paciente['status'].'>';
                        echo '<div class=lista-paciente>';
                            echo '<div class="lista-paciente-foto"></div>';
                    
                            echo '<div class="lista-paciente-dados">';
                                echo '<span>'.$paciente['nome'].'</span>';
                                echo '<span>'.$paciente['sexo'].'</span>';
                                echo '<span class="idade">'.$paciente['dataNascimento'].'</span>';
                            echo '</div>';
                        echo '</div>';
                    echo '</a>';

                    if ($indice % 2 != 0) {
                        echo '<div class="separador"></div>';
                    }
                }
            }
            else{
                echo '<p>Voçê ainda não possui pacientes cadastrados, para cadastrar clique no botão abaixo</p>';
                echo '<a href=/pacientes/novo><input class="btn-novo-paciente" type="button" name="" value="Novo"/></a>';
            }
        echo '</div>';
?>