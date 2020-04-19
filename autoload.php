<?php
    spl_autoload_register(function (string $nomeCompletoDaClasse) {
            
            $diretorioAtual = explode(DIRECTORY_SEPARATOR, $_SERVER['DOCUMENT_ROOT']);
                unset($diretorioAtual[count($diretorioAtual) - 1]);
            $path = implode(DIRECTORY_SEPARATOR, $diretorioAtual);
            $path .= DIRECTORY_SEPARATOR;
        
            $caminhoArquivo = str_replace('Nutricionista', $GLOBALS['path'].'src', $nomeCompletoDaClasse);
            $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
            $caminhoArquivo .= '.php';
            
            if (file_exists($caminhoArquivo)) {
                require_once $caminhoArquivo;
            }
        }
    );
?>