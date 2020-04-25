<?php

use Nutricionista\Controller\ControllerPainel;
use Nutricionista\Controller\ControllerPacienteNovoForm;
use Nutricionista\Controller\ControllerPaciente;
use Nutricionista\Controller\ControllerPacienteCadastrar;

$rotas = [
    '/'                    => ControllerPaciente::class,
    '/pacientes'           => ControllerPaciente::class,
    '/pacientes/novo'      => ControllerPacienteNovoForm::class,
    '/pacientes/cadastrar' => ControllerPacienteCadastrar::class
];

return $rotas;