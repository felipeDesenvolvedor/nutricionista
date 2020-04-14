<?php

use Nutricionista\Controller\ControllerPainel;

$rotas = [
    '/' => ControllerPainel::class,
    '/pacientes' => ControllerPainel::class
];

return $rotas;