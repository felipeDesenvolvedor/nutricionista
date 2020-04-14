<?php 
    require_once($path.'\public\View\ViewPacienteAcoes.php');
    require_once($path.'\public\View\ViewListaPaciente.php');
    require_once($path.'\public\View\ViewMenuPainel.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="View/css/reset.css">
        <link rel="stylesheet" href="View/css/font-awesome.css"> 
        <link rel="stylesheet" href="View/css/ViewPainelLadoEsquerdo.css">
        <link rel="stylesheet" href="View/css/ViewPainelLadoDireito.css">
        <link rel="stylesheet" href="View/css/index.css">

        <style>
            pre {
                font-size: 16px;
                line-height: 23px;
            }
        </style>
    </head>
    <body>
        <main class="main">
            <section class="painel-lado-esquerdo">
                <div>
                    <div class="plataforma">Nutricionista</div>
                    <div class="usuario">
                        
                        <div class="foto">
                            <img class="foto-usuario" src="View/img/foto-user.png"/>
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
                                        echo '<li>'.$item['subitevicom']['subItem3'].'</li>';
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
                    <h1 class="painel-titulo">Consulta Pacientes</h1>      
                    
                    <div class="acoes">
                        <div>
                            <?php 
                                acoes(); 
                            ?>
                        </div>
                        <div class="lista-pacientes">
                            <?php 
                                listarPacientes(); 
                            ?>
                        </div>   
                    </div>      
                </div>       
            </section>
        </main>
    </body>
</html>
