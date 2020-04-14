<?php

namespace Nutricionista\Model;

class ModelPessoa 
{
    private $nome;
    private $cpf;
    private $rg;
    private $dataNascimento;
    private $sexo;
    private $responsavel;
    private $cpfResponsavel;
    
    public function __construct(string $nome, string $cpf, string $rg, string $dataNascimento, string $sexo, string $responsavel, string $cpfResponsavel) 
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->dataNascimento = $dataNascimento;
        $this->sexo = $sexo;
        $this->responsavel = $responsavel;
        $this->cpfResponsavel = $cpfResponsavel;
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