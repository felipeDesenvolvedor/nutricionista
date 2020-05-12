<?php

namespace app;

class ModelPaciente
{
    private $pessoa;
    private $pacienteCaracteristicasFisicas;
    private $endereco;

    public function __construct(ModelPessoa $pessoa, ModelPacienteCaracteristicasFisicas $pacienteCaracteristicasFisicas , ModelEndereco $endereco) 
    {
        $this->pessoa = $pessoa;
        $this->pacienteCaracteristicasFisicas = $pacienteCaracteristicasFisicas;
        $this->endereco = $endereco;
    }
    
    public function recuperaPessoa():array 
    {
        return $this->pessoa;
    }
}

 // $pacientes = [
    //     'paciente1' => [
    //         'nome'            => 'Paulo',
    //         'peso'            => '100',
    //         'altura'          => '2.00',
    //         'gorduraCorporal' => '2.00',
    //         'imc'             => ''
    //     ],
    //     'paciente2' => [
    //         'nome'            => 'João',
    //         'peso'            => '80',
    //         'altura'          => '1.72',
    //         'gorduraCorporal' => '40',
    //         'imc'             => ''
    //     ],
    //     'paciente3' => [
    //         'nome'            => 'Erica',
    //         'peso'            => '54',
    //         'altura'          => '1.64',
    //         'gorduraCorporal' => '14',
    //         'imc'             => ''
    //     ],
    //     'paciente4' => [
    //         'nome'            => 'Douglas',
    //         'peso'            => '85',
    //         'altura'          => '1.73',
    //         'gorduraCorporal' => '24',
    //         'imc'             => ''
    //     ],
    //     'paciente5' => [
    //         'nome'            => 'Tatiana',
    //         'peso'            => '46',
    //         'altura'          => '1.55',
    //         'gorduraCorporal' => '19',
    //         'imc'             => ''
    //     ]
    // ];

