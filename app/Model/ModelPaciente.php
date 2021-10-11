<?php
namespace app\Model;

use app\Model\Crud;
use app\Model\ModelPessoa;

class ModelPaciente extends ModelPessoa {
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

    public function salvarPaciente(array $pessoa, $responsavel = "", $cpfResponsavel = "")
    {
        $status = "1";

        $this->responsavel    = $responsavel;
        $this->cpfResponsavel = $cpfResponsavel;

        $query = $this->mysql->prepare('insert into paciente(status, nome, cpf, rg, dataNascimento, sexo, responsavel, cpfResponsavel, telefone1, telefone2, email) values(?,?,?,?,?,?,?,?,?,?,?)');
        $query->bind_param('sssssssssss', $status, $pessoa['nome'], $pessoa['cpf'], $pessoa['rg'], $pessoa['dataNascimento'], $pessoa['sexo'], $this->responsavel, $this->cpfResponsavel, $pessoa['telefone1'], $pessoa['telefone2'], $pessoa['email']);
        $query->execute();
    }

    public function buscarPaciente(string $valorParametro):array
    {
        $crud = new Crud($this->mysql);
        return $crud->buscarRegistro('paciente', 'id', $valorParametro);
    }

    public function buscarPacientes(array $paciente):array
    {
        if(count($paciente)) {

            $queryString = 'select * from paciente where';

            foreach ($paciente as $propriedade => $valor) {

                if($valor == 'todos') {
                    $valor = '';
                }

                if($propriedade === 'cpfResponsavel') {

                    $valor = ucwords($valor);

                    $queryString .= " $propriedade like '%$valor%'";
                break;
                }else {

                    $valor = ucwords($valor);

                    $queryString .= " $propriedade like '%$valor%' and";
                }
            }
            $buscarPacientes = $this->mysql->query($queryString);
            $paciente = $buscarPacientes->fetch_all(MYSQLI_ASSOC);

            return $paciente;
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

    public function editarPaciente(array $valores, string $id)
    {
        $query = $this->mysql->query("UPDATE paciente SET nome = '$valores[nome]', cpf = '$valores[cpf]', rg = '$valores[rg]', sexo = '$valores[sexo]', dataNascimento = '$valores[dataNascimento]', responsavel = '$valores[responsavel]', cpfResponsavel = '$valores[cpfResponsavel]', telefone1 = '$valores[telefone1]', telefone2 = '$valores[telefone2]', email = '$valores[email]' where id = '$id'");
    }

    public function inativarPaciente(string $id, string $status)
    {
        $query = $this->mysql->query('UPDATE paciente SET status = '.$status.' where id = '.$id);
    }
}
