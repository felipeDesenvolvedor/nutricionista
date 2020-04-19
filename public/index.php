<?php
require_once('..'.DIRECTORY_SEPARATOR.'configuracoes'.DIRECTORY_SEPARATOR.'caminhoDosArquivos.php');

require_once($GLOBALS['caminhoDosArquivos']['autoload']);
$rotas = $GLOBALS['caminhoDosArquivos']["rotas"];

$caminho = $_SERVER['REQUEST_URI'];

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

echo $rotas[$caminho];
$classControladora = $rotas[$caminho];

$controlador = new $classControladora();
$controlador->iniciaPainel();
