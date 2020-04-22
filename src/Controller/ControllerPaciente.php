<?php

  namespace Nutricionista\Controller;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  use Nutricionista\Mode\ModelPaciente;
  use Nutricionista\Model\ModelPessoa;
  use Nutricionista\Model\ModelPacienteCaracteristicasFisicas;
  use Nutricionista\Model\ModelEndereco;
    
  class ControllerPaciente implements InterfaceController
  {
    private $pessoa = [];
    private $pacienteCaracteristicasFisicas = [];
    private $endereco = [];
   

    public function __construct()
    {
    }
    
    public function cadastrar(array $ModelPessoa) {
      $ModelPessoa = new ModelPessoa($ModelPessoa);
      header('Location: /pacientes', true, 302);
    }

    public function iniciaPainel():void 
    {   
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
    }
  }
?>