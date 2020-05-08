<?php

  namespace Nutricionista\Controller;

  require_once($GLOBALS['caminhoDosArquivos']['autoload']);
  use Nutricionista\Mode\ModelPaciente;
  use Nutricionista\Model\ModelPessoa;
  use Nutricionista\Model\ModelPacienteCaracteristicasFisicas;
  use Nutricionista\Model\ModelEndereco;
    
  class ControllerPacienteCadastrar implements InterfaceController
  {
    private $pessoa = [];
    private $pacienteCaracteristicasFisicas = [];
    private $endereco = [];
   

    public function __construct()
    {
    }
    
    public function cadastrar():array {
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        return [                                    
                "nome"           => filter_input(INPUT_POST, 'nome',           FILTER_SANITIZE_STRING), 
                "cpf"            => filter_input(INPUT_POST, 'cpf',            FILTER_SANITIZE_STRING),
                "rg"             => filter_input(INPUT_POST, 'rg',             FILTER_SANITIZE_STRING),
                "dataNascimento" => filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING),
                "sexo"           => filter_input(INPUT_POST, 'sexo',           FILTER_SANITIZE_STRING),
                "responsavel"    => filter_input(INPUT_POST, 'responsavel',    FILTER_SANITIZE_STRING),
                "cpfResponsavel" => filter_input(INPUT_POST, 'cpfResponsavel', FILTER_SANITIZE_STRING),   
                "CEP"            => filter_input(INPUT_POST, 'CEP',            FILTER_SANITIZE_STRING),   
                "endereco"       => filter_input(INPUT_POST, 'endereco',       FILTER_SANITIZE_STRING),   
                "numeroEndereco" => filter_input(INPUT_POST, 'numeroEndereco', FILTER_SANITIZE_STRING),   
                "municipio"      => filter_input(INPUT_POST, 'municipio',      FILTER_SANITIZE_STRING),   
                "bairro"         => filter_input(INPUT_POST, 'bairro',         FILTER_SANITIZE_STRING),   
                "complemento"    => filter_input(INPUT_POST, 'complemento',    FILTER_SANITIZE_STRING),   
                "telefone1"      => filter_input(INPUT_POST, 'telefone1',      FILTER_SANITIZE_STRING),   
                "telefone2"      => filter_input(INPUT_POST, 'telefone2',      FILTER_SANITIZE_STRING),   
                "email"          => filter_input(INPUT_POST, 'email',          FILTER_SANITIZE_STRING)   
        ];
     }
    }

    public function processaRequisicao():void 
    {  
        $ModelPessoa   = new ModelPessoa($this->cadastrar());
        $ModelEndereco = new ModelEndereco($this->cadastrar());    
        header('Location:/pacientes', true, 302);
    }
  }
?>