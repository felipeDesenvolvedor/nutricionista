<?php

use Nutricionista\Controller\ControllerPainel;
use Nutricionista\Controller\ControllerPacienteNovoForm;
use Nutricionista\Controller\ControllerPaciente;

$rotas = [
    '/' => ControllerPainel::class,
    '/pacientes' => ControllerPainel::class,
    '/pacientes/novo' => ControllerPacienteNovoForm::class,
    '/pacientes/cadastrar' => ControllerPaciente::class
];

return $rotas;