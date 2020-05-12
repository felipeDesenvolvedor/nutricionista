<?php

  namespace app\Controller; 
    
  class ControllerPaciente
  {
    public function __construct()
    {
      self::pacientes();
    }
    
    public function pacientes()
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

    public function novo() {
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