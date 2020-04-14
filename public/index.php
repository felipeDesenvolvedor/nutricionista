<?php
$diretorioAtual = explode('\\', $_SERVER['DOCUMENT_ROOT']);
unset($diretorioAtual[4]);
$path = implode('\\', $diretorioAtual);

require_once($path.'\autoload.php');

$caminho = $_SERVER['REQUEST_URI'];
$rotas = require_once($path.'\configuracoes\rotas\rotas.php');

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}


$classControladora = $rotas[$caminho];

$controlador = new $classControladora();
$controlador->iniciaPainel();