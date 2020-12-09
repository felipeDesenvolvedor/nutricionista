<?php
namespace app\Controller;

/**
 *
 */
class ControllerUploads
{

  function __construct()
  {
  }

  public function enviar($destino, $tipos):string {

    $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);

    if ($_FILES && !empty($_FILES['file']['name'])) {
        $fileUploads = $_FILES["file"];

        $allowebTypes = $tipos;

        $newFilename = $fileUploads['name'];

        if(in_array($fileUploads['type'], $allowebTypes)) {
            if(move_uploaded_file($fileUploads['tmp_name'], "$destino{$newFilename}")) {
                return "0";
            }else {
                return "Erro inesperado";
            }
        }else {
            return "Tipo de arquivo não permitido";
        }
    }else {
        if(!$_FILES && $getPost) {
            return "Parece que o arquivo é muito grande !!";
        }

        return "";
    }
  }
}
