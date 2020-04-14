<?php

namespace Nutricionista\Model;

class ModelPacienteCaracteristicasFisicas 
{
    private $peso;
    private $altura;
    private $gorduraCorporal;
    private $imc;

    public function __construct(float $peso, float $altura, float $gorduraCorporal, float $imc) 
    {
        $this->peso           = $peso;
        $this->altura         = $altura;
        $this->gorduraCorporal = $gorduraCorporal;
        $this->imc            = $imc;
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