<?php
namespace src\classes;
// formulario atributos
//  Method, Action, Class, name

// Campos
// Label: Texto da label, class Label, for label
// input: type, name, class, id, value
// button: name, class, id

class Form {
  protected $method;
  protected $action;
  protected $class;
  protected $name;
  protected $label;
  protected $input;
  protected $button;


  protected function method():string {
    return "method={$this->method}";
  }

  protected function action():string {
    return "action={$this->action}";
  }

  protected function class():string {
    return "class={$this->class}";
  }

  protected function name():string {
    return "name={$this->name}";
  }

  protected function creatLabel(string $class, string $for):string {
    $this->label = "class={$class} for={$for}";
    return $this->label;
  }

  // type, name, class, id
  protected function creatInput(string $type, string $name, string $class, string $id, string $texto, string $placeholder):string {
    $this->input = "<input type={$type} name={$name} class={$class} id={$id} placeholder={$placeholder} value={$texto}/>";

    return $this->input;
  }

  protected function creatButton(string $name, string $class, string $id):string {
    $this->button = "<button name={$name} class={$class} id={$id}> </button>";

    return $this->button;
  }
}
