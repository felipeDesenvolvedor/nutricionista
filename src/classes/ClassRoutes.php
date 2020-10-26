<?php
namespace src\classes;

use src\traits\TraitUrlParser;


class ClassRoutes {
    use TraitUrlParser;

    public $rota;
    # metodo de retorno da rota

    public function __construct()
    {

    }

    public function getRota() {
        $url = $this->parseUrl();
        $i = $url[0];

        $this->rota = [
            ""                    => "ControllerPaciente",
            "pacientes"           => "ControllerPaciente",
            "pacientes/buscar"    => "ControllerPaciente",
            "pacientes/novo"      => "ControllerPaciente",
            "pacientes/cadastrar" => "ControllerPaciente",
            "pacientes/editar/"   => "ControllerPaciente",
            "pacientes/inativar"  => "ControllerPaciente"
        ];

        if(array_key_exists($i, $this->rota)) {
            if(file_exists(DIRREQUISICAO."app/Controller/{$this->rota[$i]}.php")) {

                return $this->rota[$i];
            }else {
                return "ControllerHome";
            }
        }else{
            return "Controller404";
        }
    }
}
