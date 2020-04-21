<?php
    require_once($GLOBALS['caminhoDosArquivos']['autoload']);

    use Nutricionista\Controller\ControllerPaciente;
    
    $controllerPaciente = new ControllerPaciente();
    
    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $controllerPaciente->cadastrar([
            "nome"=>$_POST['nome'], 
                "cpf"=>$_POST['cpf'],
                "rg"=>$_POST['rg'],
                "dataNascimento"=>$_POST['dataNascimento'],
                "sexo"=>$_POST['sexo'],
                "responsavel"=>$_POST['responsavel'],
                "cpfResponsavel"=>$_POST['cpfResponsavel']   
            ]);
    }
?>