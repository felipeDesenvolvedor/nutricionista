<?php
namespace app\Model;

class Crud {    
    public function buscar(string $tabela):array {   
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);
    
        $query = $mysql->query('SELECT * FROM '.$tabela);                       
        $resultado = $query->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }
}