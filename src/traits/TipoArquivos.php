<?php
namespace src\traits;

trait TipoArquivos {
  public $pacientes;

  public function tipoFotoPaciente() {
    $this->pacientes = [
        "image/jpg",
        "image/jpeg",
        "image/png"
    ];

    return $this->pacientes;
  }
}
