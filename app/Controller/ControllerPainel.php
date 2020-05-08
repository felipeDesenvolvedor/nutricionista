<?php

namespace Nutricionista\Controller;

class ControllerPainel implements InterfaceController
{

    public function processaRequisicao():void 
    {   
        $titulo = "Consulta Paciente";
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
    }
}