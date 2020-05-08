<?php
    spl_autoload_register(function (string $nomeCompletoDaClasse) {
            
            $path  = $_SERVER['DOCUMENT_ROOT'];
            $path .= DIRECTORY_SEPARATOR;
                
            $caminhoArquivo = str_replace('Nutricionista', $GLOBALS['path'].'app', $nomeCompletoDaClasse);
            $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
            $caminhoArquivo .= '.php';
            
            if (file_exists($caminhoArquivo)) {
                require_once $caminhoArquivo;
            }
        }
    );
?>