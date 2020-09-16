<?php
namespace app\Model;

class Crud {
    
    public $mysql;

    public function __construct($mysql)
    {   
        $this->mysql = $mysql;
    }
    
    public function buscar(string $tabela):array {   
        $query = $this->mysql->query('SELECT * FROM '.$tabela);                       
        $resultado = $query->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }

    public function buscarRegistro(string $tabela, string $parametro, string $valorParametro):array {   
        $query = $this->mysql->query('SELECT * FROM '.$tabela.' where '.$parametro.' = '.$valorParametro);                       
        $resultado = $query->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }

    public function editarRegistro(string $tabela, string $coluna, string $valores, string $colunaid, string $id) {
        $query = $this->mysql->query("UPDATE $tabela SET $coluna = '$valores' where $colunaid = '$id'");
    }
}