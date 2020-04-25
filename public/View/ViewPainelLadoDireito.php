<?php 
require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoTopo']);

if($caminho === '/' || $caminho === '/pacientes') {
 
}elseif($caminho === '/pacientes/novo') {
    require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm']);
}elseif($caminho === '/pacientes/cadastrar') {
    require_once($GLOBALS['caminhoDosArquivos']['PacienteCadastrar']);
}

require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoRodape']);
?>   