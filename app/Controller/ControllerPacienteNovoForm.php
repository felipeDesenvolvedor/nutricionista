<?php

  namespace app;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  
    
  class ControllerPacienteNovoForm implements InterfaceController
  {

      public function __construct()
      {
      }
      
      public function processaRequisicao():void 
      {   
          $titulo = "Cadastro de paciente";
          require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
          require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoEsquerdo']);
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoTopo']);

          require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm']);
          
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainelLadoDireitoRodape']);
          require_once($GLOBALS['caminhoDosArquivos']['ViewFimHTML']);
      }
  }
?>