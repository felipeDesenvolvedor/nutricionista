<?php
$path  = $_SERVER['DOCUMENT_ROOT'];
$path .= DIRECTORY_SEPARATOR;
define("DIRPAGE_teste", "http://{$_SERVER['HTTP_HOST']}/");

$caminhoDosArquivos = [
    "IndexModel"                  => $path."app".DIRECTORY_SEPARATOR."Model".DIRECTORY_SEPARATOR."IndexModel.php",
    "autoload"                    => $path."src".DIRECTORY_SEPARATOR."autoload.php",
    "ViewPacienteLista"           => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."Paciente".DIRECTORY_SEPARATOR."ViewPacienteLista.php",
    "ViewMenuPainel"              => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewMenuPainel.php",
    "ViewMenuPainelCabecalho"     => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewMenuPainelCabecalho.php",
    "ViewPacienteAcoes"           => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."Paciente".DIRECTORY_SEPARATOR."ViewPacienteAcoes.php",
    "ViewPacientes"               => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPacientes.php",
    "ViewPainel"                  => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainel.php",
    "ViewScriptsTable"            => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewScriptsTable.php",
    "ViewStylesTable"             => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewStylesTable.php",
    "ViewTablePacientes"          => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewTablePacientes.php",
    "ViewPainelLadoEsquerdo"      => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoEsquerdo.php",
    "ViewPainelLadoDireitoTopo"   => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoDireitoTopo.php",
    "ViewPainelLadoDireitoRodape" => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewPainelLadoDireitoRodape.php",
    "ViewInicioHTML"              => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewInicioHTML.php",
    "ViewFimHTML"                 => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewFimHTML.php",
    "ViewFiltroPaciente"          => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewFiltroPaciente.php",
    "PacienteCadastrar"           => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."PacienteCadastrar.php",
    "ViewPacienteNovoForm"        => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."Paciente".DIRECTORY_SEPARATOR."ViewPacienteNovoForm.php",
    "ControllerPacienteNovoForm"  => $path."app".DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR."ControllerPacienteNovoForm.php",
    "reset"                       => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."reset.css",
    "font-awesome"                => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."font-awesome.css",
    "ViewPainelLadoEsquerdoStyle" => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPainelLadoEsquerdoStyle.css",
    "ViewPainelLadoDireitoStyle"  => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPainelLadoDireitoStyle.css",
    "index"                       => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."index.css",
    "ErrorMesage"                 => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ErrorMesage.css",
    "ViewHead"                    => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."ViewHead.php",
    "ViewPacienteNovoFormStyle"   => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."ViewPacienteNovoFormStyle.css",
    "listaPacienteStyle"          => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."listaPacienteStyle.css",
    "ModalStyle"                  => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."Modal.css",
    "Ajax"                        => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."js".DIRECTORY_SEPARATOR."Ajax.js",
    "iconFrutas"                  => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."icon-frutas.ico",
    "FotoUser"                    => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."foto-user.png",
    "jquery"                      => DIRPAGE_teste."public".DIRECTORY_SEPARATOR."js".DIRECTORY_SEPARATOR."jquery-3.4.1.min.js",
    "Conexao"                     => $path."app".DIRECTORY_SEPARATOR."Model".DIRECTORY_SEPARATOR."Conexao.php",
    "Modal"                       => $path."app".DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR."Modal".DIRECTORY_SEPARATOR."Modal.php"
];
