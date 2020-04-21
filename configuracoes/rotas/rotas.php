<?php

use Nutricionista\Controller\ControllerPainel;
use Nutricionista\Controller\ControllerPaciente;

$rotas = [
    '/' => ControllerPainel::class,
    '/pacientes' => ControllerPainel::class,
    '/pacientes/novo' => ControllerPaciente::class,
    '/pacientes/cadastrar' => ControllerPaciente::class
];

return $rotas;