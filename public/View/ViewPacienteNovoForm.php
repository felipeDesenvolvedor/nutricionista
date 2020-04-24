<form action="/pacientes/cadastrar" method="post" class="paciente-novo-form"> 
    <div>
        <label for="idNome">
            <span>Nome:</span> 
            <input type="text" name="nome" id="idNome">
        </label>

        <label for="idCpf">
            <span>CPF:</span>
            <input type="text" name="cpf" id="idCpf">
        </label>

        <label for="idRG">
            <span>RG:</span>            
            <input type="text" name="rg" id="idRG">
        </label>
    </div>    
    
    <div>
        <label for="idSexo">
            <span>Sexo:</span> 
            <input type="text" name="sexo" id="idSexo">
        </label>
    </div>

    <div>
        <label for="idDataNascimento">
            <span>Data de Nascimento:</span>
            <input type="text" name="dataNascimento" id="idDataNascimento">
        </label>

        <label for="idResponsavel">
            <span>Responsavel: </span>
            <input type="text" name="responsavel" id="idResponsavel">
        </label>

        <label for="idCpfResponsavel">
            <span>CPF Responsavel:</span> 
            <input type="text" name="cpfResponsavel" id="idCpfResponsavel">
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
            <input type="text" name="telefone1" id="idTelefone1">
        </label>
        
        <label for="idTelefone2">
            <span>Telefone 2</span> 
            <input type="text" name="telefone2" id="idTelefone2">
        </label>
        
        <label for="idEmail">
            <span>Email</span> 
            <input type="text" name="email" id="idEmail">
        </label>
    </div>

    <div id="foto-paciente" class="foto-paciente">Foto do paciente</div>

    <input type="submit" id="id-salvar" value="Salvar" class="novo-paciente-salvar">
    <input type="submit" id="novo-paciente-salvar-atender" value="Salvar e Iniciar Atendimento" class="novo-paciente-salvar-atender">
</form>