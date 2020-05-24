<?php
namespace app;

use src\classes\ClassRoutes;

class Dispatch extends ClassRoutes{    
    private $metodo;
    private $parametro = [];
    private $objeto;
    
    # metodo construtor
    public function __construct() {
        self::addController();
    }

    public function setMetodo(string $metodo){
        $this->metodo = $metodo;
    }

    protected function getMetodo():string {
        return $this->metodo;
    }

    protected function setParametro(array $parametro) {
        $this->parametro = $parametro;
    }

    public function getParametro():array {
        return $this->parametro;
    }

    protected function setObjeto(object $objeto) {
        $this->objeto = $objeto;
    }

    public function getObjeto():object {
        return $this->objeto;
    }

    #metodo de adição de controlle
    private function addController() {
        $rotaController = $this->getRota();
        $nameSpace = "app\\Controller\\{$rotaController}";
        

        if(!isset($this->parseUrl()[1])) {
            $this->setObjeto(new $nameSpace(false));
            return;
        }

        $this->setObjeto(new $nameSpace(true));
        self::addMetodo();
    }

    #metodo de adição de metodo de controlle
    private function addMetodo() {
        if(method_exists($this->objeto, $this->parseUrl()[1])) {
            $this->setMetodo("{$this->parseUrl()[1]}");
            self::addParametro();
            call_user_func_array([$this->objeto, $this->getMetodo()],$this->getParametro());
        }
    }
    #metodo de adição de parametro de controlle
    private function addParametro() {
        if(isset($this->parseUrl()[2])) {

            $this->setParametro(["parametro"=>$this->parseUrl()[2]]);
        }
    }
}