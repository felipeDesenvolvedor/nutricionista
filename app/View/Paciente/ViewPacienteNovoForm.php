<form action=<?php echo "/pacientes/$this->action".$this->pacientes[0]['idPaciente']?> method="post" class="paciente-novo-form">
    <div>
        <label for="idNome">
            <span class="campo-obrigatorio">Nome:</span>
            <input type="text" name="nome" id="idNome" value="<?php echo $this->pacientes[0]['nome'];?>">
        </label>

        <label for="idCpf">
            <span> CPF:</span>
            <input type="text" name="cpf" id="idCpf" value="<?php echo $this->pacientes[0]['cpf'];?>">
        </label>

        <label for="idRG">
            <span>RG:</span>
            <input type="text" name="rg" id="idRG" value="<?php echo $this->pacientes[0]['rg'];?>">
        </label>
    </div>

    <div>
        <label for="idSexo">
            <span class="campo-obrigatorio">Sexo:</span>
            <input type="text" name="sexo" id="idSexo" value="<?php echo $this->pacientes[0]['sexo'];?>">
        </label>
    </div>

    <div>
        <label for="idDataNascimento">
            <span class="campo-obrigatorio">Data de Nascimento:</span>
            <input type="text" name="dataNascimento" id="idDataNascimento" value="<?php echo $this->pacientes[0]['dataNascimento'];?>">
        </label>

        <label for="idResponsavel">
            <span>Responsavel: </span>
            <input type="text" name="responsavel" id="idResponsavel" value="<?php echo $this->pacientes[0]['responsavel'];?>">
        </label>

        <label for="idCpfResponsavel">
            <span>CPF Responsavel:</span>
            <input type="text" name="cpfResponsavel" id="idCpfResponsavel" value="<?php echo $this->pacientes[0]['cpfResponsavel'];?>">
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
            <input type="text" name="telefone1" id="idTelefone1" value="<?php echo $this->pacientes[0]['telefone1'];?>">
        </label>

        <label for="idTelefone2">
            <span>Telefone 2</span>
            <input type="text" name="telefone2" id="idTelefone2" value="<?php echo $this->pacientes[0]['telefone2'];?>">
        </label>

        <label for="idEmail">
            <span>Email</span>
            <input type="text" name="email" id="idEmail" value="<?php echo $this->pacientes[0]['email'];?>">
        </label>
    </div>

    <div id="foto-paciente" class="foto-paciente">Foto do paciente</div>

    <input type="submit" id="id-salvar" value="Salvar" class="novo-paciente-salvar">
    <input type="submit" id="novo-paciente-salvar-atender" value="Salvar e Iniciar Atendimento" class="novo-paciente-salvar-atender">

    <?php
    if($this->action == 'editar') {
        echo '<a href="/pacientes/inativar/'.$this->pacientes[0]['idPaciente'].'"'.'class=""><input type="button" id="inativar-paciente" value="Inativar Paciente" class="inativar-paciente"></a>';
    }
    ?>
</form>