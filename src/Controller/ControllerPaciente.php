<?php

  namespace Nutricionista\Controller;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  use Nutricionista\Mode\ModelPaciente;
  use Nutricionista\Model\ModelPessoa;
  use Nutricionista\Model\ModelPacienteCaracteristicasFisicas;
  use Nutricionista\Model\ModelEndereco;
  //use Nutricionista\Controller\InterfaceController;
    
  class ControllerPaciente implements InterfaceController
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

      /*public function cadastrar(array $ModelPessoa, array $ModelPacienteCaracteristicasFisicas, array $ModelEndereco) {
        $ModelPessoa                         = new ModelPessoa($ModelPessoa);
        $ModelPacienteCaracteristicasFisicas = new ModelPacienteCaracteristicasFisicas($ModelPacienteCaracteristicasFisicas);
        $ModelEndereco                       = new ModelPessoa($ModelEndereco);
      }*/

      public function cadastrar(array $ModelPessoa) {
        $ModelPessoa = new ModelPessoa($ModelPessoa);
        header('Location:http://localhost:8080/pacientes');
      }

      public function iniciaPainel():void 
      {   
          require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
      }
  }
?>