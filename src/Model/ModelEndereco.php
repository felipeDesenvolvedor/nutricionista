<?php

namespace Nutricionista\Model;

class ModelEndereco 
{
    private $cep;
    private $endereco;
    private $numero;
    private $municipio;
    private $bairro;
    private $complemento;

    public function __construct(array $ModelEndereco) 
    {
        $this->cep         = $ModelEndereco['cep'];
        $this->endereco    = $ModelEndereco['endereco'];
        $this->numero      = $ModelEndereco['numero'];
        $this->municipio   = $ModelEndereco['municipio'];
        $this->bairro      = $ModelEndereco['bairro'];
        $this->complemento = $ModelEndereco['complemento'];
    }

    public function recuperaCep():string 
    {
        return $this->cep;
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