<?php

use src\classes\Form;

$action     = $this->action;
$pacienteid = $this->pacienteid;
$paciente   = $this->pacientes[0];
?>

<form name="paciente" class="paciente-novo-form" method="post">
    <div>
        <label for="idNome">
            <span class="campo-obrigatorio">Nome:</span>
            <input type="text" name="nome" id="idNome" value="<?php echo $paciente['nome'];?>">
        </label>

        <label for="idCpf">
            <span> CPF:</span>
            <input type="text" name="cpf" id="idCpf" value="<?php echo $paciente['cpf'];?>">
        </label>

        <label for="idRG">
            <span>RG:</span>
            <input type="text" name="rg" id="idRG" value="<?php echo $paciente['rg'];?>">
        </label>
    </div>

    <div>
        <label for="idSexo">
            <span class="campo-obrigatorio">Sexo:</span>
            <input type="text" name="sexo" id="idSexo" value="<?php echo $paciente['sexo'];?>">
        </label>
    </div>

    <div>
        <label for="idDataNascimento">
            <span class="campo-obrigatorio">Data de Nascimento:</span>
            <input type="text" name="dataNascimento" id="idDataNascimento" value="<?php echo $paciente['dataNascimento'];?>">
        </label>

        <label for="idResponsavel">
            <span>Responsavel: </span>
            <input type="text" name="responsavel" id="idResponsavel" value="<?php echo $paciente['responsavel'];?>">
        </label>

        <label for="idCpfResponsavel">
            <span>CPF Responsavel:</span>
            <input type="text" name="cpfResponsavel" id="idCpfResponsavel" value="<?php echo $paciente['cpfResponsavel'];?>">
        </label>
    </div>

    <div>
        <label for="idCEP">
            <span>CEP</span>
            <input type="text" name="CEP" id="idCEP">
        </label>

        <label for="idEndereco">
            <span>Endereco</span>
            <input type="text" name="endereco" id="idEndereco">
        </label>

        <label for="idNumeroEndereco">
            <span>Numero</span>
            <input type="text" name="numeroEndereco" id="idNumeroEndereco">
        </label>

    </div>

    <div>
        <label for="idMunicipio">
            <span>Municipio</span>
            <input type="text" name="municipio" id="idMunicipio">
        </label>

        <label for="idBairro">
            <span>Bairro</span>
            <input type="text" name="bairro" id="idBairro">
        </label>

        <label for="idComplemento">
            <span>Complemento</span>
            <input type="text" name="complemento" id="idComplemento">
        </label>
    </div>

    <div>
        <label for="idTelefone1">
            <span>Telefone 1</span>
            <input type="text" name="telefone1" id="idTelefone1" value="<?php echo $paciente['telefone1'];?>">
        </label>

        <label for="idTelefone2">
            <span>Telefone 2</span>
            <input type="text" name="telefone2" id="idTelefone2" value="<?php echo $paciente['telefone2'];?>">
        </label>

        <label for="idEmail">
            <span>Email</span>
            <input type="text" name="email" id="idEmail" value="<?php echo $paciente['email'];?>">
        </label>

        <input type="file" name="file" class='abas-item abas-item-foto-paciente'/>
    </div>

    <div>
      <input type="submit" id="id-salvar" value="Salvar" class="novo-paciente-salvar">
      <input type="submit" id="novo-paciente-salvar-atender" value="Salvar e Iniciar Atendimento" class="novo-paciente-salvar-atender">

      <?php
      if($this->action == 'editar') {
         $btnTexto = "";

         if($paciente['status'] == '1') {
           $btnTexto = "Inativar Paciente";
         }else{
           $btnTexto = "Ativar Paciente";
         }

          echo "<a href=/pacientes/inativar/{$paciente['idPaciente']} class='teste'><input type='button' id='inativar-paciente' value='{$btnTexto}' class='inativar-paciente'></a>";
      }
      ?>
    </div>
</form>
