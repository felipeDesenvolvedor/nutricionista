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
    private $metodo;

    public function __construct(string $cep, string $endereco, string $numero, string $municipio, string $bairro, string $complemento) 
    {
        $this->cep         = $cep;
        $this->endereco    = $endereco;
        $this->numero      = $numero;
        $this->municipio   = $municipio;
        $this->bairro      = $bairro;
        $this->complemento = $complemento;
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

    public function __get(string $metodo) 
    {
        $this->metodo = 'recupeca'.ucfirs($metodo);
        
        $this->metodo();
    }
}