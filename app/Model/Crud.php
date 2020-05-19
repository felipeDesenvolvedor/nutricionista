<?php
namespace app\Model;

class Crud {    
    // public function salvar(string $tabela, array $parametros, array $valores) {   
    //     'nome, cpf, rg, dataNascimento, sexo, responsavel, cpfResponsavel, telefone1, telefone2, email, peso, altura, gorduraCorporal, imc';
        
    //     $this->mysql->query(`INSERT INTO $tabela ($parametros) VALUES (


    //     )`);  
    // }   
    public function buscar(string $tabela):array {   
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);
    
        $query = $mysql->query('SELECT * FROM '.$tabela);                       
        $resultado = $query->fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }
}