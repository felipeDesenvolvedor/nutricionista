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

  public function enviar($destino):string {
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
                return 0;
            }else {
                return "<p class='trigger warning'>Erro inesperado</p>";
            }
        }else {
            return "<p class='trigger error'>Tipo de arquivo não permitido</p>";
        }
    }else {
        if(!$_FILES && $getPost) {
            return "<p class='trigger warning'>Parece que o arquivo é muito grande !!</p>";
        }
    }
  }
}
