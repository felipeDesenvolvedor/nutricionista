<?php

  namespace Nutricionista\Controller; 
    
  class ControllerPaciente implements InterfaceController
  {
    public function __construct()
    {
    }
    
    public function processaRequisicao():void 
    {  
        $titulo = "Consulta Paciente";
        require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoEsquerdo']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoTopo']);

        require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewListaPaciente']);
        acoes(); 
        listarPacientes();
        
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoRodape']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewFimHTML']);
    
    }
  }
?>