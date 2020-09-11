<?php
namespace app\Model;

use app\Model\Crud;
use app\Model\ModelPessoa;

class ModelPaciente extends ModelPessoa
{
    private $pessoa;
    private $responsavel;
    private $cpfResponsavel;

    public function __construct() 
    {
        // $this->pessoa = $pessoa;
        // $this->pacienteCaracteristicasFisicas = $pacienteCaracteristicasFisicas;
        // $this->endereco = $endereco;
    }
    
    public function salvarPaciente(array $pessoa, string $responsavel, string $cpfResponsavel) 
    {
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);

        $this->pessoa = new ModelPessoa($pessoa);

        var_dump($this->pessoa['dataNascimento']);

        $this->responsavel    = $responsavel;
        $this->cpfResponsavel = $cpfResponsavel;

        // $query = $mysql->prepare('INSERT INTO paciente(nome, cpf, rg, dataNascimento, sexo, responsavel, cpfResponsavel, telefone1, telefone2, email) VALUES(?,?,?,?,?,?,?,?,?,?);');
        
        // $query->bind_param('ssssssssss', $pessoa['nome'], $pessoa['cpf'], $pessoa['rg'], $pessoa['dataNascimento'], $pessoa['sexo'], $this->responsavel, $this->cpfResponsavel, $pessoa['telefone1'], $pessoa['telefone2'], $pessoa['email']);
        // $query->execute();
        // $query->close();
    }

    public function buscarPaciente(string $valorParametro):array
    {   
        $crud = new Crud();
        return $crud->buscarRegistro('paciente', 'idPaciente', $valorParametro);
    }

    public function buscarPacientes():array
    {   
        $crud = new Crud();
        return $crud->buscar('paciente');
    }

    public function buscarPacientesStatus(string $valorParametro):array
    {   
        $crud = new Crud();
        return $crud->buscarRegistro('paciente', 'status', $valorParametro);
    }

    public function editarPaciente(array $valores, string $idPaciente)
    {   
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);
        
        $query = $mysql->query("UPDATE paciente SET nome = '$valores[nome]', cpf = '$valores[cpf]', rg = '$valores[rg]', sexo = '$valores[sexo]', dataNascimento = '$valores[dataNascimento]', responsavel = '$valores[responsavel]', cpfResponsavel = '$valores[cpfResponsavel]', telefone1 = '$valores[telefone1]', telefone2 = '$valores[telefone2]', email = '$valores[email]' where idPaciente = '$idPaciente'");
    }

    public function inativarPaciente(string $idPaciente, string $status)
    {
        require($GLOBALS['caminhoDosArquivos']['Conexao']);
        $query = $mysql->query('UPDATE paciente SET status = '.$status.' where idPaciente = '.$idPaciente);
    }
}