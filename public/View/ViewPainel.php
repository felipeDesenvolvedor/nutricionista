<?php
    $caminho = $_SERVER['REQUEST_URI'];    
    
    require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);

    require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);

    require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoEsquerdo']);
?>

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
            }elseif($caminho === '/pacientes/novo') {
                require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm']);
            }elseif($caminho === '/pacientes/cadastrar') {
                require_once($GLOBALS['caminhoDosArquivos']['PacienteCadastrar']);
            }
            ?>   
        </div>      
    </div>       
</section>
     
<?php 
    require_once($GLOBALS['caminhoDosArquivos']['ViewFimHTML']);
?>
     
