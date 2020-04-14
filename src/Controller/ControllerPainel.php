<?php

namespace Nutricionista\Controller;

class ControllerPainel 
{

    public function iniciaPainel() 
    {   
        $diretorioAtual = explode('\\', $_SERVER['DOCUMENT_ROOT']);
        unset($diretorioAtual[4]);
        $path = implode('\\', $diretorioAtual);

        require_once($path.'\public\View\ViewPainel.php');
    }
}