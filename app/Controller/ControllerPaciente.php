<?php
  namespace app\Controller;

  use src\traits\TipoArquivos;
  use src\classes\ClassRoutes;
  use app\Model\ModelPaciente;
  use app\View\Modal\Modal;
  use app\Controller\ControllerUploads;
  use app\Dispatch;

  class ControllerPaciente {
    use TipoArquivos;

    public $rota;
    public $titulo;
    public $pacientes;
    public $pacienteid;
    public $layout;
    public $action;
    public $abas = [
      "aba_2" => "abas-item-anamenese",
      "aba_3" => "abas-item-avaliacao-clinica",
      "aba_4" => "abas-item-avaliacao-laboratorial"
    ];

    public function __construct($method)
    {
        if(!$method) {
          self::pacientes();
        }
    }

    public function getLayout():string
    {
      return !empty($this->layout) ? $this->layout : '';
    }

    public function setLayout(string $layout)
    {
      $this->layout = !empty($layout) ? $layout : '';
    }

    public function editar()
    {
      
      $this->pacientes = new ModelPaciente();

      // if($_SERVER['REQUEST_METHOD'] === 'GET') {
      //   $this->action = "editar";

      //   $this->setLayout($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
        
      //   $this->pacientes = [];
      //   $this->titulo = "Consulta de Pacientes";
      //   require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);

      //   $modal = new Modal(
      //     ['class'=>''],
      //     ['titulo'=>'Cadastro de paciente'],
      //     [
      //     'tipo'     => 'htmlCompleto',
      //     'conteudo' => $GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm'],
      //     'objeto'   => $this,
      //     'abas'     => $this->abas
      //     ],
      //     ['botao'=>'']
      //   );
      // }

      $dispatch = new Dispatch();


      if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idBusca'])) {

        $valorParametro = $_POST['idBusca'];
        $this->pacientes  = $this->pacientes->buscarPaciente($valorParametro)[0];

        $this->action = "editar";

        $modal = new Modal(
            ['class'=>''],
            ['titulo'=>'Editar Paciente'],
            [
            'tipo'     => 'htmlCompleto',
            'conteudo' => $GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm'],
            'objeto'   => $this,
            'abas'     => $this->abas
            ],
            ['botao'=>'']
        );

      }elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $valorParametro = $_POST['id'];
        $paciente = [
          "nome"           =>$_POST['nome'],
          "cpf"            =>$_POST['cpf'],
          "rg"             =>$_POST['rg'],
          "sexo"           =>$_POST['sexo'],
          "dataNascimento" => $_POST['dataNascimento'],
          "responsavel"    => $_POST['responsavel'],
          "cpfResponsavel" => $_POST['cpfResponsavel'],
          // "CEP"            => $_POST['CEP'],
          // "endereco"       => $_POST['endereco'],
          // "numeroEndereco" => $_POST['numeroEndereco'],
          // "municipio"      => $_POST['municipio'],
          // "bairro"         => $_POST['bairro'],
          // "complemento"    => $_POST['complemento'],
          "telefone1"      => $_POST['telefone1'],
          "telefone2"      => $_POST['telefone2'],
          "email"          => $_POST['email']
        ];

        try {
          $this->pacientes->editarPaciente($paciente, $valorParametro);
          header("HTTP/1.1 201 Created");
        }catch(Exception $erro) {
          header('HTTP/1.1 500 Internal Server Error');
        }

        // http_response_code(201);
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
      if($_SERVER['REQUEST_METHOD'] === 'GET') {

        $this->setLayout($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
        $this->pacientes = new ModelPaciente();
        $this->pacientes = $this->pacientes->buscarPacientes([]);
        $this->titulo = "Consulta de Pacientes";
        require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);
      }
    }

    public function buscar(string $paciente)
    {
      $array = json_decode($_POST['paciente'], true);

      if(count($array)) {

          $this->pacientes = new ModelPaciente();
          $this->pacientes = $this->pacientes->buscarPacientes($array);
          require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteLista']);
      }else {

        $this->pacientes = new ModelPaciente();
        $this->pacientes = $this->pacientes->buscarPacientes([]);
        require_once($GLOBALS['caminhoDosArquivos']['ViewPacienteLista']);
      }
    }

    public function novo()
    {
      $retorno = 0;
      if($_SERVER['REQUEST_METHOD'] === 'GET') {

        $this->action = "novo";

        $this->pacientes = new ModelPaciente();
        $this->pacientes = $this->pacientes->buscarPacientes([]);
        $this->setLayout($GLOBALS['caminhoDosArquivos']['ViewPacienteAcoes']);
        
        $this->titulo = "Consulta de Pacientes";
        require_once($GLOBALS['caminhoDosArquivos']['ViewInicioHTML']);

        $modal = new Modal(
          ['class'=>''],
          ['titulo'=>'Cadastro de paciente'],
          [
          'tipo'     => 'htmlCompleto',
          'conteudo' => $GLOBALS['caminhoDosArquivos']['ViewPacienteNovoForm'],
          'objeto'   => $this,
          'abas'     => $this->abas
          ],
          ['botao'=>'']
        );

      }elseif($_SERVER['REQUEST_METHOD'] === 'POST') {

        // $controllerUploads = new ControllerUploads();
        // $upload            = $controllerUploads->enviar(FOTOSPACIENTES, $this->tipoFotoPaciente());

        // if ($upload != "0") {
        //     echo $upload;
        //     die();
        // }

        $paciente = new ModelPaciente();

        $retorno = $paciente->salvarPaciente(
            [
              "nome"           => ucwords(filter_input(INPUT_POST, 'nome',      FILTER_SANITIZE_STRING)),
              "cpf"            => filter_input(INPUT_POST, 'cpf',               FILTER_SANITIZE_STRING),
              "rg"             => filter_input(INPUT_POST, 'rg',                FILTER_SANITIZE_STRING),
              "dataNascimento" => filter_input(INPUT_POST, 'dataNascimento',    FILTER_SANITIZE_STRING),
              "sexo"           => filter_input(INPUT_POST, 'sexo',              FILTER_SANITIZE_STRING),
              "CEP"            => filter_input(INPUT_POST, 'CEP',               FILTER_SANITIZE_STRING),
              "endereco"       => ucwords(filter_input(INPUT_POST, 'endereco',  FILTER_SANITIZE_STRING)),
              "numeroEndereco" => filter_input(INPUT_POST, 'numeroEndereco',    FILTER_SANITIZE_STRING),
              "municipio"      => ucwords(filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING)),
              "bairro"         => ucwords(filter_input(INPUT_POST, 'bairro',    FILTER_SANITIZE_STRING)),
              "complemento"    => filter_input(INPUT_POST, 'complemento',       FILTER_SANITIZE_STRING),
              "telefone1"      => filter_input(INPUT_POST, 'telefone1',         FILTER_SANITIZE_STRING),
              "telefone2"      => filter_input(INPUT_POST, 'telefone2',         FILTER_SANITIZE_STRING),
              "email"          => filter_input(INPUT_POST, 'email',             FILTER_SANITIZE_STRING),
            ],
            filter_input(INPUT_POST, 'responsavel',    FILTER_SANITIZE_STRING),
            filter_input(INPUT_POST, 'cpfResponsavel', FILTER_SANITIZE_STRING)
          );


          if($retorno) {
            header("HTTP/1.1 201 Created");
          }else {
            header("HTTP/1.1 404 Not Found");
          }
      }
    }
  }
?>
