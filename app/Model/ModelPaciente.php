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
        $retorno = "";

        $this->responsavel    = $responsavel;
        $this->cpfResponsavel = $cpfResponsavel;

        $query = $this->mysql->prepare('insert into paciente(nome, cpf, rg, responsavel, cpfResponsavel, sexo, status, dataNascimento, email, telefone1, telefone2) values(?,?,?,?,?,?,?,?,?,?,?)');
        $query->bind_param('sssssssssss', $pessoa['nome'], $pessoa['cpf'], $pessoa['rg'], $this->responsavel, $this->cpfResponsavel, $pessoa['sexo'], $status, $pessoa['dataNascimento'], $pessoa['email'], $pessoa['telefone1'], $pessoa['telefone2']);

        $retorno = $query->execute();
        $query->close();
        return $retorno;
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
        try {
            $query = $this->mysql->query("UPDATE paciente SET nome = '$valores[nome]', cpf = '$valores[cpf]', rg = '$valores[rg]', sexo = '$valores[sexo]', dataNascimento = '$valores[dataNascimento]', responsavel = '$valores[responsavel]', cpfResponsavel = '$valores[cpfResponsavel]', telefone1 = '$valores[telefone1]', telefone2 = '$valores[telefone2]', email = '$valores[email]' where id = '$id'");
        } catch(Exception $erro) {
            throw  $erro;
        }
    }

    public function inativarPaciente(string $id, string $status)
    {
        $query = $this->mysql->query('UPDATE paciente SET status = '.$status.' where id = '.$id);
    }
}
