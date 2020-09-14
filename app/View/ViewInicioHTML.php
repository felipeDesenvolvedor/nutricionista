<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="icon" href=<?php echo $GLOBALS['caminhoDosArquivos']['iconFrutas'];?>>
        
        <script src=<?php echo $GLOBALS['caminhoDosArquivos']['jquery'];?>></script>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['reset'];?>>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['font-awesome'];?>> 
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['ViewPainelLadoEsquerdoStyle'];?>>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoStyle'];?>>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['ViewPacienteNovoFormStyle'];?>>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['listaPacienteStyle'];?>>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['ErrorMesage'];?>>
        <link rel="stylesheet" href=<?php echo $GLOBALS['caminhoDosArquivos']['index'];?>>
        <script src=<?php echo $GLOBALS['caminhoDosArquivos']['formPaciente'];?>></script>
        <script src=<?php echo $GLOBALS['caminhoDosArquivos']['listaPacienteScript'];?>></script>
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
                    <div class="usuario">
                            <div class="foto">
                                <img class="foto-usuario" src=<?php echo $GLOBALS['caminhoDosArquivos']['FotoUser']?>>
                            </div>
                            
                            <div>
                                <div class="nome"> Felipe Da Silva Santos</div>
                                <div class="plano">Plano Bronze</div>
                            </div>
                        </div>
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
                        <h1 class="painel-titulo"><?php echo $this->titulo ?></h1>

                        <?php 
                            require_once($this->getLayout());
                        ?> 

                    </div>
                    <div id="mensagem-erro"></div>  
                </div>       
            </section>                
        </main>
    </body>
</html>
       