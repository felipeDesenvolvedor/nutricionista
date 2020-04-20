<?php

  namespace Nutricionista\Controller;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  use Nutricionista\Mode\ModelPaciente;
  use Nutricionista\Model\ModelPessoa;
  use Nutricionista\Model\ModelPacienteCaracteristicasFisicas;
  use Nutricionista\Model\ModelEndereco;
    
  class ControllerPaciente
  {
    private $pessoa = [];
    private $pacienteCaracteristicasFisicas = [];
    private $endereco = [];
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

      public function cadastrar($pessoa) {
        var_dump($pessoa);
      }

      public function iniciaPainel() 
      {   
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
      }
  }
?>