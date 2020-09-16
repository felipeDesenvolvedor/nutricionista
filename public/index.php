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

// $array = json_decode('{"status":"todos","cpf":"4","rg":" ","responsavel":" ","cpfResponsavel":" ","municipio":" "}');
// var_dump($array);