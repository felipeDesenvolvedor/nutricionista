<?php
namespace app\View\Modal;

class Modal {
    public $boxClass = [];
    public $titulo = [];
    public $tipoConteudo = [];
    public $botao = [];
    public $objeto;
    public $action;
    public $pacientes;
    public $pacienteid;

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
            case 'htmlCompleto':
                $this->htmlCompleto($this->tipoConteudo['conteudo']);
                break;
        }
    }

    public function Formulario() {
        echo '<div class="modal aberto">';
            echo '<div class="conteudo">';

                echo '<h2 class="modal-titulo">'.$this->titulo["titulo"].'<span class="modal-fechar">x</span>'.'</h1>';

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
            echo "<div id='mensagem-erro'></div>";
        echo '</div>';
    }

    public function htmlCompleto($html) {
      $this->objeto     = $this->tipoConteudo['objeto'];
      $this->action     = $this->objeto->action;
      $this->pacientes  = $this->objeto->pacientes;
      $this->pacienteid = $this->objeto->pacienteid;

      echo '<div class="modal aberto">';
        echo '<div class="conteudo">';
        require_once($_SERVER['DOCUMENT_ROOT'].'/app/View/Abas/EstruturaDeAba.php');
          echo '<h2 class="modal-titulo">'.$this->titulo["titulo"].'<span class="modal-fechar">x</span>'.'</h1>';
          require_once($html);
        echo '</div>';
        echo "<div id='mensagem-erro'></div>";
      echo '</div>';
    }
}
