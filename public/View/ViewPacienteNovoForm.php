<form action="/pacientes/cadastrar" method="post"> 
    <div>
        <label for="id-nome">
        Nome: 
        <input type="text" name="nome" id="id-nome">
        </label>

        <label for="id-cpf">
        CPF: 
        <input type="text" name="cpf" id="id-cpf">
        </label>

        <label for="id-rg">
        RG: 
        <input type="text" name="rg" id="id-rg">
        </label>

        <label for="id-dataNascimento">
        Data de Nascimento: 
        <input type="text" name="dataNascimento" id="id-dataNascimento">
        </label>
    </div>

    <div>
        <label for="id-sexo">
        Sexo: 
        <input type="text" name="sexo" id="id-sexo">
        </label>
    
        <label for="id-responsavel">
        Responsavel: 
        <input type="text" name="responsavel" id="id-responsavel">
        </label>

        <label for="id-cpfResponsavel">
        CPF Responsavel: 
        <input type="text" name="cpfResponsavel" id="id-cpfResponsavel">
        </label>
    </div>

    <input type="submit" id="id-cadastrar">
</form>