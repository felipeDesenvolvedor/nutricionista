<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

header('Access-Control-Allow-Origin: *');

require_once('..'.DIRECTORY_SEPARATOR.'configuracoes'.DIRECTORY_SEPARATOR.'caminhoDosArquivos.php');
require_once('../configuracoes/configuracoes.php');
require_once('../src/vendor/autoload.php');

// use src\classes\ClassValidate;
//
// $validateCPF = new ClassValidate();
//
// $validateCPF->CPF("46120848886");
// $validateCPF->CPF("461=208*488+86");


use app\Dispatch;
$dispatch = new Dispatch();
