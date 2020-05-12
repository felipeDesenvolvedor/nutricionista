<?php

namespace app;

class ModelPacienteCaracteristicasFisicas 
{
    private $peso;
    private $altura;
    private $gorduraCorporal;
    private $imc;

    public function __construct(array $PacienteCaracteristicasFisicas) 
    {
        $this->peso            = $PacienteCaracteristicasFisicas['peso'];
        $this->altura          = $PacienteCaracteristicasFisicas['altura'];
        $this->gorduraCorporal = $PacienteCaracteristicasFisicas['gorduraCorporal'];
        $this->imc             = $PacienteCaracteristicasFisicas['imc'];
    }

    // public function exibirPeso():float 
    // {
    //     return $this->peso;
    // }
    // public function exibirAltura():float 
    // {
    //     return $this->altura;
    // }
    // public function exibirGorduraCorporal():float 
    // {
    //     return $this->gorduraCorporal;
    // }

    // public function exibirImc():float 
    // {

    // }
}

?>