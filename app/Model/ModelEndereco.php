<?php

namespace Nutricionista\Model;

class ModelEndereco 
{
    private $CEP;
    private $endereco;
    private $numeroEndereco;
    private $municipio;
    private $bairro;
    private $complemento;

    public function __construct(array $ModelEndereco) 
    {
        $this->CEP            = $ModelEndereco['CEP'];
        $this->endereco       = $ModelEndereco['endereco'];
        $this->numeroEndereco = $ModelEndereco['numeroEndereco'];
        $this->municipio      = $ModelEndereco['municipio'];
        $this->bairro         = $ModelEndereco['bairro'];
        $this->complemento    = $ModelEndereco['complemento'];
    }

    public function recuperaCep():string 
    {
        return $this->CEP;
    }
    public function recuperaEndereco():string 
    {
        return $this->endereco;
    }
    public function recuperaNumero():string 
    {
        return $this->numero;
    }
    public function recuperaMunicipio():string 
    {
        return $this->municipio;
    }
    public function recuperaBairro():string 
    {
        return $this->bairro;
    }
    public function recuperaComplemento():string 
    {
        return $this->complemento;
    }
}