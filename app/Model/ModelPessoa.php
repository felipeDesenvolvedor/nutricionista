<?php

namespace app\Model;

class ModelPessoa 
{
    private $nome;
    private $cpf;
    private $rg;
    private $dataNascimento;
    private $sexo;
    private $telefone1;
    private $telefone2;
    private $email;
    
    public function __construct(array $ModelPessoa) 
    {
        $this->nome           = $ModelPessoa['nome'];
        $this->cpf            = $ModelPessoa['cpf'];
        $this->rg             = $ModelPessoa['rg'];
        $this->dataNascimento = $ModelPessoa['dataNascimento'];
        $this->sexo           = $ModelPessoa['sexo'];
        $this->telefone1      = $ModelPessoa['telefone1'];
        $this->telefone2      = $ModelPessoa['telefone2'];
        $this->email          = $ModelPessoa['email'];
    }

    public function exibirNome():string
    {
        return $this->nome;
    }
    public function exibirCpf():string
    {
        return $this->cpf;
    }
    public function exibirRg():string
    {
        return $this->rg;
    }
    public function exibirDataNascimento():string
    {
        return $this->dataNascimento;
    }
    public function exibirSexo():string
    {
        return $this->sexo;
    }
    public function exibirResponsavel():string
    {
        return $this->responsavel;
    }
    public function exibirCpfResponsavel():string
    {
        return $this->cpfResponsavel;
    }  
}

?>