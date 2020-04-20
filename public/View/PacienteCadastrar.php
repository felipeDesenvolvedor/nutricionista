<?php
    require_once($GLOBALS['caminhoDosArquivos']['autoload']);

    use Nutricionista\Controller\ControllerPaciente;

    $arrayPessoa[] = $_POST['nome'];
    $arrayPessoa[] = $_POST['cpf'];
    $arrayPessoa[] = $_POST['dataNascimento'];
    $arrayPessoa[] = $_POST['sexo'];
    $arrayPessoa[] = $_POST['responsavel'];
    $arrayPessoa[] = $_POST['cpfResponsavel'];


    if(!empty($arrayPessoa)) {
        $controllerPaciente = new ControllerPaciente();
        $controllerPaciente->cadastrar($arrayPessoa);
    }
?>