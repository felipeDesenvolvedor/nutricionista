<?php 
        echo 
        '   <div class="view-filtro">
                <form class="view-filtro-paciente-form">
                    <div>
                        <input class="input-busca-paciente" type="text" name="" placeholder="Pesquisar por nome"/>
                        <input class="btn-filtro-paciente" type="button" name="" value="Filtros"/>
                        <input class="btn-busca-paciente" type="button" name="" value="Buscar"/>
                        <a href=/pacientes/novo><input class="btn-novo-paciente" type="button" name="" value="Novo"/></a>
                    </div>
                    <div class="view-filtro-paciente">
                        <div>
                            <label for="idCpf">
                                <span> CPF:</span>
                                <input type="text" name="cpf" id="idCpf">
                            </label>

                            <label for="idRG">
                                <span>RG:</span>            
                                <input type="text" name="rg" id="idRG">
                            </label>
                            
                            <label for="idResponsavel">
                                <span>Responsavel: </span>
                                <input type="text" name="responsavel" id="idResponsavel">
                            </label>
                        </div>
                        
                        <div>
                            <label for="idCpfResponsavel">
                                <span>CPF Responsavel:</span> 
                                <input type="text" name="cpfResponsavel" id="idCpfResponsavel">
                            </label>

                            <label for="idMunicipio">
                                <span>Municipio</span>
                                <input type="text" name="municipio" id="idMunicipio">
                            </label>

                            <label for="idStatus">
                                <span>Status</span>
                                <select name="status" id="idStatus">
                                    <option value="todos">Todos</option>
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </form>
            </div>    
        ';

            if(count($this->pacientes)) {
                echo '<div class="lista-pacientes">';
                $indice = 0;
                
                foreach($this->pacientes as $paciente)
                {   
                    $indice += 1;
                    
                    $inativo = $paciente['status'] ? '' : 'esconder';
                    
                    echo "<a href=/pacientes/editar/{$paciente['idPaciente']} class='paciente'>";
                        echo '<div class=lista-paciente-box>';
                            echo '<div class="lista-paciente-foto"></div>';
                    
                            echo '<div class="lista-paciente-dados">';
                                echo '<span class="js-lista-paciente-nome">'.$paciente['nome'].'</span>';
                                echo '<span>'.$paciente['sexo'].'</span>';
                                echo $paciente['dataNascimento'];
                                echo '<span class="idade">'.$paciente['dataNascimento'].'</span>';
                            echo '</div>';
                        echo '</div>';
                    echo '</a>';

                    // if ($indice % 2 != 0) {
                    //     echo '<div class="separador"></div>';
                    // }
                }

                echo '</div>';
            }
            else{
                echo '<p>Voçê ainda não possui pacientes cadastrados, para cadastrar clique no botão abaixo</p>';
                echo '<a href=/pacientes/novo><input class="btn-novo-paciente" type="button" name="" value="Novo"/></a>';
            }
?>