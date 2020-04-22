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
    
    public function __construct(array $ModelPessoa) 
    {
        $this->nome           = $ModelPessoa['nome'];
        $this->cpf            = $ModelPessoa['cpf'];
        $this->rg             = $ModelPessoa['rg'];
        $this->dataNascimento = $ModelPessoa['dataNascimento'];
        $this->sexo           = $ModelPessoa['sexo'];
        $this->responsavel    = $ModelPessoa['responsavel'];
        $this->cpfResponsavel = $ModelPessoa['cpfResponsavel'];
        
        echo '<pre>';
        var_dump($ModelPessoa);
        echo '</pre>';
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