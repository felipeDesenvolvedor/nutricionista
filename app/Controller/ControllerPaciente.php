<?php
  namespace app\Controller; 
  
  use src\classes\ClassRoutes;
  use app\Model\ModelPaciente;
  
  class ControllerPaciente
  { 
    public $rota;
    public $titulo;
    public $pacientes;
    public $layout;
    public $renderizado;
    public $action;

    public function __construct($method)
    {   
        if(!$method) {
          self::pacientes();
        }
    }

    public function getLayout():string 
    {
      return $this->layout;
    }

    public function setLayout(string $layout) 
    {
      $this->layout = $layout;
    }
    
    public function editar(string $valorParametro) 
    {
      $this->pacientes = new ModelPaciente();

      if($_SERVER['REQUEST_METHOD'] === 'GET') { 
        $this->action = "editar";
        $this->setLayout($GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm']);
        $this->pacientes = $this->pacientes->buscarPaciente($valorParametro);
        
        $this->titulo = "Editar Paciente";
        require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);
        
        $renderizado = false;
        
      }elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
        $paciente = [
          "nome"           =>$_POST['nome'],
          "cpf"            =>$_POST['cpf'],
          "rg"             =>$_POST['rg'],
          "sexo"           =>$_POST['sexo'],
          "dataNascimento" => $_POST['dataNascimento'],
          "responsavel"    => $_POST['responsavel'],
          "cpfResponsavel" => $_POST['cpfResponsavel'],
          "CEP"            => $_POST['CEP'],
          "endereco"       => $_POST['endereco'],
          "numeroEndereco" => $_POST['numeroEndereco'],
          "municipio"      => $_POST['municipio'],
          "bairro"         => $_POST['bairro'],
          "complemento"    => $_POST['complemento'],
          "telefone1"      => $_POST['telefone1'],
          "telefone2"      => $_POST['telefone2'],
          "email"          => $_POST['email']
        ];
        
        $this->pacientes->editarPaciente($paciente, $valorParametro);
        header('Location:/pacientes', true, 302);
      }
    }

    public function inativar(string $valorParametro)
    {
      $this->pacientes = new ModelPaciente();
      $pacientes = $this->pacientes->buscarPaciente($valorParametro);

      if($pacientes[0]['status'] == '1') {

        $this->pacientes->inativarPaciente($valorParametro, '0');
        header('Location:/pacientes', true, 302);  
      }else {
    
        $this->pacientes->inativarPaciente($valorParametro, '1');
        header('Location:/pacientes', true, 302);
      }
    }

    public function pacientes()
    { 
      var_dump(json_decode('{"status":"todos","cpf":"4","rg":"","responsavel":"","cpfResponsavel":"","municipio":""}'));
      if($_SERVER['REQUEST_METHOD'] === 'GET') {

        $this->setLayout($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
        $this->pacientes = new ModelPaciente();
        $this->pacientes = $this->pacientes->buscarPacientes([]);
        $this->titulo = "Consulta Paciente";
        require_once($GLOBALS['caminhoDosArquivos']['ViewMenuPainel']);
        require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']); 
      }
    }

    public function buscar(string $paciente)
    {
 
      if(!empty($_POST)) {
        
        // $array = json_encode($_POST['paciente']);
        echo $_POST['paciente'];
        // $this->pacientes = new ModelPaciente();
        // $this->pacientes = $this->pacientes->buscarPacientes(str_split($_POST['paciente']));
        // echo json_encode(["teste"=>"teste"]);  

        // header('Location:/pacientes', true, 302);
      }

      // header('Location:/pacientes', true, 302);
    }

    public function novo() 
    {
      $this->action = "cadastrar";
      $this->setLayout($GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm']);

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