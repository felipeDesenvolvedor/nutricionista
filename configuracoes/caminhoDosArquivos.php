<?php
$path  = $_SERVER['DOCUMENT_ROOT'];
$path .= DIRECTORY_SEPARATOR;

$caminhoDosArquivos = [
    "IndexModel"                  => $path."app".DIRECTORY_SEPARATOR."Model".DIRECTORY_SEPARATOR."IndexModel.php",
    "rotas"                       => require_once($path."configuracoes".DIRECTORY_SEPARATOR."rotas".DIRECTORY_SEPARATOR."rotas.php"),
    "autoload"                    => $path."autoload.php",
    "ViewListaPaciente"           => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewListaPaciente.php",
    "ViewMenuPainel"              => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewMenuPainel.php",
    "ViewMenuPainelCabecalho"     => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewMenuPainelCabecalho.php",
    "ViewPacienteAcoes"           => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPacienteAcoes.php",
    "ViewPacientes"               => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPacientes.php",
    "ViewPainel"                  => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainel.php",
    "ViewScriptsTable"            => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewScriptsTable.php",
    "ViewStylesTable"             => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewStylesTable.php",
    "ViewTablePacientes"          => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewTablePacientes.php",
    "ViewPainelLadoEsquerdo"      => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoEsquerdo.php",
    "ViewPainelLadoDireito"       => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoDireito.php",
    "ViewPainelLadoDireitoTopo"   => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoDireitoTopo.php",
    "ViewPainelLadoDireitoRodape" => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoDireitoRodape.php",
    "ViewInicioHTML"              => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewInicioHTML.php",
    "ViewFimHTML"                 => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewFimHTML.php",
    "PacienteCadastrar"           => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."PacienteCadastrar.php",
    "ViewPacienteNovoForm"        => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPacienteNovoForm.php",
    "ControllerPacienteNovoForm"  => $path."app".DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR."ControllerPacienteNovoForm.php",
    "reset"                       => "nutricionista/app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."reset.css",
    "font-awesome"                => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."font-awesome.css",
    "ViewPainelLadoEsquerdoStyle" => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPainelLadoEsquerdoStyle.css",
    "ViewPainelLadoDireitoStyle"  => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPainelLadoDireitoStyle.css",
    "index"                       => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."index.css",
    "ViewHead"                    => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewHead.php",  
];

$GLOBALS['caminhoDosArquivos'] = $caminhoDosArquivos;