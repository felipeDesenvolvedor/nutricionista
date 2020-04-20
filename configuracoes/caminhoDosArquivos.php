<?php

$diretorioAtual = explode(DIRECTORY_SEPARATOR, $_SERVER['DOCUMENT_ROOT']);
                  unset($diretorioAtual[count($diretorioAtual) - 1]);
$path           = implode(DIRECTORY_SEPARATOR, $diretorioAtual);
$path           .= DIRECTORY_SEPARATOR;

$caminhoDosArquivos = [
    "IndexModel"              => $path."src".DIRECTORY_SEPARATOR."Model".DIRECTORY_SEPARATOR."IndexModel.php",
    "rotas"                   => require_once($path."configuracoes".DIRECTORY_SEPARATOR."rotas".DIRECTORY_SEPARATOR."rotas.php"),
    "autoload"                => $path."autoload.php",
    "ViewListaPaciente"       => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewListaPaciente.php",
    "ViewMenuPainel"          => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewMenuPainel.php",
    "ViewMenuPainelCabecalho" => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewMenuPainelCabecalho.php",
    "ViewPacienteAcoes"       => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPacienteAcoes.php",
    "ViewPacientes"           => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPacientes.php",
    "ViewPainel"              => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainel.php",
    "ViewScriptsTable"        => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewScriptsTable.php",
    "ViewStylesTable"         => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewStylesTable.php",
    "ViewTablePacientes"      => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewTablePacientes.php",
    "ViewCadastrarPaciente"   => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewCadastrarPaciente.php",
    "ControllerPaciente"      => $path."src".DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR."ControllerPaciente.php",
    "reset"                   => "nutricionista/public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."reset.css",
    "font-awesome"            => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."font-awesome.css",
    "ViewPainelLadoEsquerdo"  => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPainelLadoEsquerdo.css",
    "ViewPainelLadoDireito"   => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPainelLadoDireito.css",
    "index"                   => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."index.css",
    "ViewHead"                => $path."public".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewHead.php", 
    "ControllerPaciente"      => $path."src".DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR."ControllerPaciente.php"  
];

$GLOBALS['caminhoDosArquivos'] = $caminhoDosArquivos;