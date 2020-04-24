<?php

namespace Nutricionista\Controller;

class ControllerPainel implements InterfaceController
{

    public function iniciaPainel():void 
    {   
        $titulo = "Consulta Paciente";
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
    }
}