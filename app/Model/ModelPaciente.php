<?php
namespace app\Model;

use app\Model\Crud;
use app\Model\ModelPessoa;

class ModelPaciente extends ModelPessoa
{
    private $pessoa;
    private $responsavel;
    private $cpfResponsavel;
    private $mysql;

    public function __construct() 
    {
        // $this->pessoa = $pessoa;
        // $this->pacienteCaracteristicasFisicas = $pacienteCaracteristicasFisicas;
        // $this->endereco = $endereco;
        require_once($GLOBALS['caminhoDosArquivos']['Conexao']);
        $this->mysql = $mysql;
    }
    
    public function salvarPaciente(array $pessoa, string $responsavel, string $cpfResponsavel, string $status) 
    {
        $this->pessoa = new ModelPessoa($pessoa);

        $this->responsavel    = $responsavel;
        $this->cpfResponsavel = $cpfResponsavel;

        $query = $this->mysql->prepare('INSERT INTO paciente(nome, cpf, rg, dataNascimento, sexo, responsavel, cpfResponsavel, telefone1, telefone2, email, status) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        
        $query->bind_param('sssssssssss', $pessoa['nome'], $pessoa['cpf'], $pessoa['rg'], $pessoa['dataNascimento'], $pessoa['sexo'], $this->responsavel, $this->cpfResponsavel, $pessoa['telefone1'], $pessoa['telefone2'], $pessoa['email'], $status);
        $query->execute();
        $query->close();
    }

    public function buscarPaciente(string $valorParametro):array
    {   
        $crud = new Crud($this->mysql);
        return $crud->buscarRegistro('paciente', 'idPaciente', $valorParametro);
    }

    public function buscarPacientes(array $paciente):array
    {   
        if(count($paciente)) {
           
            $buscarPacientes = $this->mysql->prepare("select * from paciente where cpf = ?");
            $buscarPacientes->bind_param('s', $paciente['cpf']);
            $buscarPacientes->execute();
            
            echo json_encode($buscarPacientes, true);
            
            return $paciente = $buscarPacientes->get_result()->fetch_assoc();
        }else {
            $crud = new Crud($this->mysql);
            return $crud->buscar('paciente');
        }
    }

    public function buscarPacientesStatus(string $valorParametro):array
    {   
        $crud = new Crud($this->mysql);
        return $crud->buscarRegistro('paciente', 'status', $valorParametro);
    }

    public function editarPaciente(array $valores, string $idPaciente)
    {   
        $query = $this->mysql->query("UPDATE paciente SET nome = '$valores[nome]', cpf = '$valores[cpf]', rg = '$valores[rg]', sexo = '$valores[sexo]', dataNascimento = '$valores[dataNascimento]', responsavel = '$valores[responsavel]', cpfResponsavel = '$valores[cpfResponsavel]', telefone1 = '$valores[telefone1]', telefone2 = '$valores[telefone2]', email = '$valores[email]' where idPaciente = '$idPaciente'");
    }

    public function inativarPaciente(string $idPaciente, string $status)
    {
        $query = $this->mysql->query('UPDATE paciente SET status = '.$status.' where idPaciente = '.$idPaciente);
    }
}