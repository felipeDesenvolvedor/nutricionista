<?php
namespace app\Model;

class Crud {    
    public function buscar(string $tabela):array {   
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);
    
        $query = $mysql->query('SELECT * FROM '.$tabela);                       
        $resultado = $query->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }

    public function buscarRegistro(string $tabela, string $parametro, string $valorParametro):array {   
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);
    
        $query = $mysql->query('SELECT * FROM '.$tabela.' where '.$parametro.' = '.$valorParametro);                       
        $resultado = $query->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }
}