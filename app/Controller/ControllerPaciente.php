<?php
  namespace app\Controller; 
  
  use src\classes\ClassRoutes;
  
  class ControllerPaciente
  { 
    public $rota;
    public $titulo;

    public function __construct($method)
    {   
        if(!$method) {
          self::pacientes();
        }
    }

    public function getRota():string 
    {
      return $this->rota;
    }

    public function setRota(string $rota) 
    {
      $this->rota = $rota;
    }
    
    public function pacientes()
    {   
      $this->setRota($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
      
      $this->titulo = "Consulta Paciente";
      require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
      require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']); 
    }

    public function novo() 
    {
      $this->setRota($GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm']);

      $this->titulo = "Cadastro de paciente";
      require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
      require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);
    }
  }
?>