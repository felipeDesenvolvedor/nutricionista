<?php
    require_once $path.'\autoload.php';

    use Nutricionista\Model\ModelPessoa;
    use Nutricionista\Model\ModelPacienteCaracteristicasFisicas;
    use Nutricionista\Model\ModelEndereco;
    use Nutricionista\Model\ModelPaciente;

    $ModelPessoa                         = new ModelPessoa('Felipe', '461.208.488-86', '50.210.675-X', '21/05/1996', 'masculino','Walter', '654.254.844-36');
    $ModelPacienteCaracteristicasFisicas = new ModelPacienteCaracteristicasFisicas(10.1, 10.1, 10.1, 10.1);
    $endereco                            = new ModelEndereco('08490009', 'Rua barão de gouvinhas', '4', 'São Paulo', 'Prestes maia', 'casa 2');
    $pacientes                           = new ModelPaciente($ModelPessoa, $ModelPacienteCaracteristicasFisicas, $endereco);

    echo '<pre>';
        var_dump($pacientes);
    echo '</pre>';
?>