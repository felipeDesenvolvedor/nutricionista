<section class="painel-lado-direito">
    <div class="painel-cabecalho">
        <div class="botao-editar-layput">Editar Layout</div>      
        <div class="botao-sair">Sair</div>      
    </div>       
    
    <div class="painel-corpo">
                
        <div class="acoes">                
            <h1 class="painel-titulo"><?php echo $titulo ?></h1>
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