<?php
namespace app\Model;

use app\Model\Crud;

class ModelPaciente extends Crud
{
    private $pessoa;
    private $pacienteCaracteristicasFisicas;
    private $endereco;

    // public function __construct(ModelPessoa $pessoa, ModelPacienteCaracteristicasFisicas $pacienteCaracteristicasFisicas , ModelEndereco $endereco) 
    // {
    //     $this->pessoa = $pessoa;
    //     $this->pacienteCaracteristicasFisicas = $pacienteCaracteristicasFisicas;
    //     $this->endereco = $endereco;
    // }

    public function __construct() 
    {
    }
    
    public function buscarPaciente():array
    {
        return $this->buscar('paciente');
    }
}