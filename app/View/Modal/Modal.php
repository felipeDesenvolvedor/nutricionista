<?php
namespace app\View;

class Modal {
    public $boxClass = [];
    public $titulo = [];
    public $tipoConteudo = [];
    public $botao = [];

    public function __construct($boxClass, $titulo, $tipoConteudo, $botao) {
        $this->boxClass     = $boxClass;
        $this->titulo       = $titulo;
        $this->tipoConteudo = $tipoConteudo;
        $this->botao        = $botao;

        $this->Modal();
    }

    public function Modal()
    {
        switch($this->tipoConteudo['tipo']) {
            case 'formulario':
                $this->tipoConteudo = $this->tipoConteudo['conteudo'];    
                $this->Formulario();
                break;
            case 'tabela':
                echo $this->tipoConteudo['tipo'];
                break;    
        } 
    }

    public function Formulario() {
        echo '<div class="modal aberto">';
            echo '<div class="conteudo">';
                
                echo '<h2 class="modal-titulo">'.$this->titulo["titulo"].'<span class="fechar">x</span>'.'</h1>';
                
                echo '<form>';
                foreach($this->tipoConteudo as $conteudo => $campo):
                    echo '<fieldset>';
                        echo "<label>".$campo['label']."</label>";
                        echo "<input type=".$campo['campo']."/>";
                    echo '</fieldset>';    
                endforeach;
                    echo "<input type='button' value={$this->botao['botao']} >";
                echo '</form>';
            echo '</div>';
        echo '</div>';
    }
}