<?php
namespace app\Controller;

class Head {

  public $head;

  public function __construct() {
    $this->head = [
      "reset"                       => "/public/css/reset.css",
      "font-awesome"                => "/public/css/font-awesome.css",
      "ViewPainelLadoEsquerdoStyle" => "/public/css/ViewPainelLadoEsquerdoStyle.css",
      "ViewPainelLadoDireitoStyle"  => "/public/css/ViewPainelLadoDireitoStyle.css",
      "index"                       => "/public/css/index.css",
      "ErrorMesage"                 => "/public/css/ErrorMesage.css",
      "listaPacienteScript"         => "/public/js/listaPacienteScript"
    ];
  }
}
