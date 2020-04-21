<?php

namespace Nutricionista\Controller;

class ControllerPainel implements InterfaceController
{

    public function iniciaPainel():void 
    {   
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
    }
}