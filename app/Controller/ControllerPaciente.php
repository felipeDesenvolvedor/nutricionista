<?php
  namespace app\Controller; 
  
  use src\classes\ClassRoutes;
  use app\Model\ModelPaciente;
  
  class ControllerPaciente
  { 
    public $rota;
    public $titulo;
    public $pacientes;

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
      $this->pacientes = new ModelPaciente();
      $this->pacientes = $this->pacientes->buscarPaciente();
       
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

    public function cadastrar() 
    {
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
          $paciente = new ModelPaciente();
          
          $paciente->salvarPaciente(
            [                                    
              "nome"           => filter_input(INPUT_POST, 'nome',           FILTER_SANITIZE_STRING), 
              "cpf"            => filter_input(INPUT_POST, 'cpf',            FILTER_SANITIZE_STRING),
              "rg"             => filter_input(INPUT_POST, 'rg',             FILTER_SANITIZE_STRING),
              "dataNascimento" => filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING),
              "sexo"           => filter_input(INPUT_POST, 'sexo',           FILTER_SANITIZE_STRING),   
              "CEP"            => filter_input(INPUT_POST, 'CEP',            FILTER_SANITIZE_STRING),   
              "endereco"       => filter_input(INPUT_POST, 'endereco',       FILTER_SANITIZE_STRING),   
              "numeroEndereco" => filter_input(INPUT_POST, 'numeroEndereco', FILTER_SANITIZE_STRING),   
              "municipio"      => filter_input(INPUT_POST, 'municipio',      FILTER_SANITIZE_STRING),   
              "bairro"         => filter_input(INPUT_POST, 'bairro',         FILTER_SANITIZE_STRING),   
              "complemento"    => filter_input(INPUT_POST, 'complemento',    FILTER_SANITIZE_STRING),   
              "telefone1"      => filter_input(INPUT_POST, 'telefone1',      FILTER_SANITIZE_STRING),   
              "telefone2"      => filter_input(INPUT_POST, 'telefone2',      FILTER_SANITIZE_STRING),   
              "email"          => filter_input(INPUT_POST, 'email',          FILTER_SANITIZE_STRING)   
            ],
            filter_input(INPUT_POST, 'responsavel',    FILTER_SANITIZE_STRING),
            filter_input(INPUT_POST, 'cpfResponsavel', FILTER_SANITIZE_STRING)
          );
          
          header('Location:/pacientes', true, 302);
        }
    }
  }
?>