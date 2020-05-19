<?php
#arquivos diretorios raizes
$pastaInterna = "";
define("DIRPAGE", "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define("DIRREQUISICAO", "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
}else{
    define("DIRREQUISICAO", "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

#Diretorios especificos
define("DIRAUDIO",  DIRPAGE."public/audio/");
define("DIRCSS",    DIRPAGE."public/css/");
define("DIRFONTES", DIRPAGE."public/fontes/");
define("DIRIMG",    DIRPAGE."public/img/");
define("DIRJS",     DIRPAGE."public/js/");
define("DIRVIDEO",  DIRPAGE."public/video/");

# Acesso ao banco de dados
define("HOST", "localhost");
define("USER", "nutricionista");
define("PASS", "1234");
define("DB",   "nutricionista");
?>