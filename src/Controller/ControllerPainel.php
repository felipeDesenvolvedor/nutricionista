<?php

namespace Nutricionista\Controller;

class ControllerPainel 
{

    public function iniciaPainel() 
    {   
        require_once($GLOBALS['caminhoDosArquivos']['ViewPainel']);
    }
}