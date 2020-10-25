<?php
namespace src\classes;

class ClassValidate {
  public function CPF($cpf) {
    if(mb_strlen($cpf) == 11) {

      $cpfGrupoOne   = mb_substr($cpf, 0, 3);
      $cpfGrupoTwo   = mb_substr($cpf, 3, 3);
      $cpfGrupoThree = mb_substr($cpf, 6, 3);
      $cpfGrupoFor   = mb_substr($cpf, 9, 2);
      echo "$cpfGrupoOne.$cpfGrupoTwo.$cpfGrupoThree-$cpfGrupoFor";
    }else {

      $cpfGrupoOne   = mb_substr($cpf, 0, 3);
      $cpfGrupoTwo   = mb_substr($cpf, 4, 3);
      $cpfGrupoThree = mb_substr($cpf, 8, 3);
      $cpfGrupoFor   = mb_substr($cpf, 12, 2);
      echo "$cpfGrupoOne.$cpfGrupoTwo.$cpfGrupoThree-$cpfGrupoFor";
    }
  }
}
