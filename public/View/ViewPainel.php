<?php
    $caminho = $_SERVER['REQUEST_URI'];    
    
    require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php
        require_once($GLOBALS['caminhoDosArquivos']['ViewHead']);
    ?>
    
    <body>
        <main class="main">
            <section class="painel-lado-esquerdo">
                <div>
                    <div class="plataforma">Nutricionista</div>
                    <div class="usuario">
                        
                        <div class="foto">
                            <img class="foto-usuario" src="/View/img/foto-user.png"/>
                        </div>
                        
                        <div>
                            <div class="nome"> Felipe Da Silva Santos</div>
                            <div class="plano">Plano Bronze</div>
                        </div>
                        
                    </div>
                </div>

                <div>
                    <ul class="menu-painel"> 
                        <?php 
                            foreach($menuPainel as $item)
                            {
                                echo '<li>';
                                    echo '<a href='.$item['link'].'>';
                                        echo '<i class="fa '.$item['class'].'"></i>'; 
                                        echo '<span>'.$item['info'].'</span>';
                                    echo '</a>';

                                    if(isset($item['subitem']))
                                    {
                                        echo '<li>'.$item['subitem']['subItem2'].'</li>';
                                        echo '<li>'.$item['subitem']['subItem3'].'</li>';
                                    }
                                echo '</li>';
                            }
                        ?>
                    </ul>   
                </div>
            </section>

            <section class="painel-lado-direito">
                <div class="painel-cabecalho">
                    <div class="botao-editar-layput">Editar Layout</div>      
                    <div class="botao-sair">Sair</div>      
                </div>       
                
                <div class="painel-corpo">
                         
                    <div class="acoes">                
                        <h1 class="painel-titulo">Consulta Pacientes</h1>
                        <?php

                        if($caminho === '/' || $caminho === '/pacientes') {
                            require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
                            require_once($GLOBALS['caminhoDosArquivos']['ViewListaPaciente']);
                            acoes(); 
                            listarPacientes(); 
                        }elseif($caminho === '/pacientes/cadastrar') {
                            require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteFormCadastrar']);
                            require_once($GLOBALS['caminhoDosArquivos']['PacienteCadastrar']);
                        }
                        ?>   
                    </div>      
                </div>       
            </section>
        </main>
    </body>
</html>
