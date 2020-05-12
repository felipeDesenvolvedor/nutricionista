<?php 
namespace src\classes;

use src\traits\TraitUrlParser;


class ClassRoutes {
    use TraitUrlParser;

    private $rota;
    # metodo de retorno da rota
    
    public function getRota() {
        $url = $this->parseUrl();
        $i = $url[0];

        $this->rota = [
            ""                     => "ControllerPaciente",
            "pacientes"            => "ControllerPaciente",
            "pacientes/novo"       => "ControllerPaciente",
            "pacientes/cadastrar"  => ""
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
