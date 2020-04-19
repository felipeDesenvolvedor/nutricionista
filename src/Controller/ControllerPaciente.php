<?php

  namespace Nutricionista\Controller;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  use Nutricionista\Mode\ModelPaciente;
  use Nutricionista\Model\ModelPessoa;
  use Nutricionista\Model\ModelPacienteCaracteristicasFisicas;
  use Nutricionista\Model\ModelEndereco;
  
  class ControllerPaciente
  {
      private $pessoa                         = [];
      private $pacienteCaracteristicasFisicas = [];
      private $endereco                       = [];

      /*
      public function __construct(array $pessoa, array $pacienteCaracteristicasFisicas, array $endereco)
      {
        $this->pessoa = $pessoa;
        $this->pacienteCaracteristicasFisicas = $pacienteCaracteristicasFisicas;
        $this->endereco = $endereco;
      }*/

      public function __construct()
      {
      }


      public function recuperaPaciente():array
      {
        $paciente = [$this->pessoa, $this->pacienteCaracteristicasFisicas, $this->endereco];  
        return $paciente;   
      }

      public function definirPaciente() 
      {
        $pessoa                         = $this->pessoa;
        $pacienteCaracteristicasFisicas = $this->pacienteCaracteristicasFisicas;
        $endereco                       = $this->endereco;
        
        $modelPaciente = new ModelPaciente($pessoa, $pacienteCaracteristicasFisicas, $endereco);
      }

      public function iniciaPainel() 
      {   
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
      }
  }  
?>