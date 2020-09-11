<?php

use Nutricionista\Controller\ControllerPainel;
use Nutricionista\Controller\ControllerPacienteNovoForm;
use Nutricionista\Controller\ControllerPaciente;

$rotas = [
    '/'                    => ControllerPaciente::class,
    '/pacientes'           => ControllerPaciente::class,
    '/pacientes/novo'      => ControllerPacienteNovoForm::class
];

return $rotas;