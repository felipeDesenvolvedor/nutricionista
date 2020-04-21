<?php

  namespace Nutricionista\Controller;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  
    
  class ControllerPacienteNovoForm implements InterfaceController
  {

      public function __construct()
      {
      }
      
      public function iniciaPainel():void 
      {   
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
      }
  }
?>