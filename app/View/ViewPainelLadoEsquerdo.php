<section class="painel-lado-esquerdo">
                <div>
                    <div class="plataforma">Nutricionista</div>
                    <div class="usuario">
                        
                        <div class="foto">
                            <img class="foto-usuario" src=<?php $GLOBALS['caminhoDosArquivos']['FotoUser']?>>
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