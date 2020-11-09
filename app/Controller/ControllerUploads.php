<?php
namespace app\Controller;

/**
 *
 */
class ControllerUploads
{

  function __construct()
  {
    echo FOTOSPACIENTES;
  }

  public function enviar($destino) {
    $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);

    if ($_FILES && !empty($_FILES['file']['name'])) {
        $fileUploads = $_FILES["file"];

        $allowebTypes = [
            "image/jpg",
            "image/jpeg",
            "image/png",
            "application/pdf"
        ];

        $newFilename = $fileUploads['name'];

        if(in_array($fileUploads['type'], $allowebTypes)) {
            if(move_uploaded_file($fileUploads['tmp_name'], "$destino{$newFilename}")) {
                echo "<p class='trigger sucess'>Arquivo enviado com sucesso</p>";
            }else {
                echo "<p class='trigger warning'>Erro inesperado</p>";
            }
        }else {
            echo "<p class='trigger error'>Tipo de arquivo não permitido</p>";
        }
    }else {
        if(!$_FILES && $getPost) {
            echo "<p class='trigger warning'>Parece que o arquivo é muito grande !!</p>";
        }
        if($_FILES) {
            echo "<p class='trigger warning'>Selecione o arquivo antes de enviar !!</p>";
            die();
        }
    }
  }
}
