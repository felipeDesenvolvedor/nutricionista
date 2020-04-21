<?php

namespace Nutricionista\Controller;
//use Nutricionista\Controller\InterfaceController;

class ControllerPainel implements InterfaceController
{

    public function iniciaPainel():void 
    {   
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
    }
}