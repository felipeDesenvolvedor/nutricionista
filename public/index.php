<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('..'.DIRECTORY_SEPARATOR.'configuracoes'.DIRECTORY_SEPARATOR.'caminhoDosArquivos.php');
require_once('../configuracoes/configuracoes.php');
require_once('../src/vendor/autoload.php');

use app\Dispatch;    
$dispatch = new Dispatch();

// select * from paciente where `status` like '%0%' and `cpf` like '%461%' and `rg` like '%50%' and `responsavel` like '%%' and `cpfResponsavel` like '%%'
// $array = json_decode('{"status":"todos","cpf":"461","rg":"50","responsavel":"","cpfResponsavel":"","municipio":""}', true);
// $query = 'select * from paciente where ';


// foreach ($array as $propriedade => $valor) {
//     if($propriedade === 'cpfResponsavel') {

//         $query .= " $propriedade like '%$valor%'";
//     break;
//     }else {
//         $query .= " $propriedade like '%$valor%' and";
//      }
// }

// echo "$query";