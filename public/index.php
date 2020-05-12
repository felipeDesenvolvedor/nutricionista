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


// require_once($GLOBALS['caminhoDosArquivos']['autoload']);
// $rotas = $GLOBALS['caminhoDosArquivos']["rotas"];

// $caminho = $_SERVER['REQUEST_URI'];

// if (!array_key_exists($caminho, $rotas)) {
//     http_response_code(404);
//     exit();
// }

// $classControladora = $rotas[$caminho];

// $controlador = new $classControladora();
// $controlador->processaRequisicao();
