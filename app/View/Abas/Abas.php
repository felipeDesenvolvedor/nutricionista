<?php
namespace app\View\Abas;

class Abas {

  private $abasItem;

  public function __construct($abasItem) {
    $this->abasItem = $abasItem;
  }

  public function construirAbas():string {
    $abas  = "<nav class='abas-container'>";
    $abas .= "<ul class='abas-lista'>";

    foreach($this->abasItem as $abaItem) {
      $abas .= "<li class='abas-item {$abaItem}'>";
      $itens = explode(" ", $abaItem);

        if(array_search("abas-item-arquivo", $itens)) {
          $abas .= "<input type='file' name='file'/>";
        }
      $abas .= "</li>";
    }

    $abas .= "</nav>";
    $abas .= "</ul>";

    return $abas;
  }
}
