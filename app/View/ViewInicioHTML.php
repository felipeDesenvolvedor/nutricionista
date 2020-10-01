<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Nutri</title>
    <link rel="icon" href="/public/img/icon-frutas.ico">
    <script src="/public/js/jquery-3.4.1.min.js"></script>
    <script src="/public/js/Ajax.js"></script>
    <link rel="stylesheet" href="/public/css/reset.css">
    <link rel="stylesheet" href="/public/css/font-awesome.css">
    <link rel="stylesheet" href="/public/css/ViewPainelLadoEsquerdoStyle.css">
    <link rel="stylesheet" href="/public/css/ViewPainelLadoDireitoStyle.css">
    <link rel="stylesheet" href="/public/css/ViewPacienteNovoFormStyle.css">
    <link rel="stylesheet" href="/public/css/listaPacienteStyle.css">
    <link rel="stylesheet" href="/public/css/ErrorMesage.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/Modal.css">
    <script src="/public/js/listaPacienteScript.js"></script>
    <script src="/public/js/index.js"></script>
</head>
<body>
  <div class="fundo"></div>
    <main class="main">
      <div class="limite">
        <section class="painel-lado-esquerdo">
            <ul class="menu-painel">
                <?php
                echo '
                  <li>
                    <div class="usuario">
                        <img class="foto-usuario" src="/public/img/foto-user.png">
                        <div>
                          <div class="nome"> Felipe Da Silva Santos</div>
                          <div class="plano">Plano Bronze</div>
                        </div>
                    </div>
                  </li>
                ';

                    foreach($menuPainel as $item):
                        echo '<li>';
                            echo '<a href='.$item['link'].'>';
                                echo '<i class="fa '.$item['class'].'"></i>';
                                echo '<span>'.$item['info'].'</span>';
                            echo '</a>';

                            if (isset($item['subitem'])) {
                                echo '<li>'.$item['subitem']['subItem2'].'</li>';
                                echo '<li>'.$item['subitem']['subItem3'].'</li>';
                            }
                        echo '</li>';
                    endforeach;
                ?>
            </ul>
            <div class="painel-lado-esquerdo-hamburguer js-hamburguer"></div>
        </section>

        <section class="painel-lado-direito">

            <div class="painel-corpo">
              <div class="acoes">
                <h1 class="painel-titulo">
                  <?php echo $this->titulo ?>
                  <span>sair</span>
                </h1>
                <?php
                  if($this->getLayout()) {
                      require_once($this->getLayout());
                  }
                ?>
              </div>
              <div id="mensagem-erro"></div>
            </div>

        </section>
      </div>
    </main>
    <script src="/public/js/formPaciente.js"></script>
</body>
</html>
