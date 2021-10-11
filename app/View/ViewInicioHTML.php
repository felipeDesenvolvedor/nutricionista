<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Orange Nutri</title>
    <link rel="icon" href="/public/img/icon-frutas.ico">
    <script src="/public/js/jquery-3.4.1.min.js"></script>
    <script src="/public/js/Ajax.js"></script>
    <link rel="stylesheet" href="/public/css/_partial.css">
    <link rel="stylesheet" href="/public/css/reset.css">
    <link rel="stylesheet" href="/public/css/font-awesome.css">
    <link rel="stylesheet" href="/public/css/ViewPainelLadoEsquerdoStyle.css">
    <link rel="stylesheet" href="/public/css/ViewPainelLadoDireitoStyle.css">
    <link rel="stylesheet" href="/public/css/ViewPacienteNovoFormStyle.css">
    <link rel="stylesheet" href="/public/css/listaPacienteStyle.css">
    <link rel="stylesheet" href="/public/css/ErrorMesage.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/Modal.css">
    <link rel="stylesheet" href="/public/css/Abas.css">
</head>
<body>
  <div class="fundo"></div>
    <main class="main">
      <div class="limite">
        <section class="painel-lado-esquerdo">
            <ul class="menu-painel">
                <?php
                    echo "<li>";
                      require_once(__DIR__."/Usuario/Dados.php"); // Dados do Usuario
                    echo "</li>";

                    require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']); // Menu
                ?>
                <div class="painel-lado-esquerdo-hamburguer js-hamburguer"><i class="fa fa-bars"></i></div>
            </ul>

        </section>
        <section class="painel-lado-direito">

            <div class="painel-corpo">
              <div class="acoes">
                <h1 class="painel-titulo">
                  <?php echo $this->titulo ?>
                </h1>
                <span class="painel-sair">sair</span>
                <?php
                  if($this->getLayout()) {
                      require_once($this->getLayout());
                  }
                ?>
              </div>
            </div>

        </section>
        <div class="menu-painel-fundo"></div>
      </div>
    </main>

    <script src="/public/js/functions.js"></script>
    <script src="/public/js/ErrorMessage.js"></script>
    <script src="/public/js/index.js"></script>
    <script src="/public/js/Paciente/FormPaciente.js"></script>
    <script src="/public/js/Paciente/Listar.js"></script>
    <script src="/public/js/Paciente/Novo.js"></script>
    <script src="/public/js/Paciente/Editar.js"></script>

</body>
</html>
