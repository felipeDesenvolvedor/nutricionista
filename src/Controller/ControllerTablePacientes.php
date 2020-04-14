<?php require_once($path.'\Model\ModelPaciente.php'); ?>

<?php
    function listarPacientes() {
        foreach($GLOBALS["pacientes"] as $pacienteLinha => $paciente) {
            echo '<tr class="paciente" id="primeiro-paciente">';
                echo '<td class="info-nome">'.$paciente['nome'].'</td>';
                echo '<td class="info-peso">'.$paciente['peso'].'</td>';
                echo '<td class="info-altura">'.$paciente['altura'].'</td>';
                echo '<td class="info-gordura">'.$paciente['gorduraCorporal'].'</td>';
                echo '<td class="info-imc">'.$paciente['imc'].'</td>';
                echo '
                <td class="info-actions">
                    <i class="fa fa-pencil-square-o"></i>
                        
                    <div class="actions">
                        <table>
                            <tr class="info-actions"><td><i class="fa fa-trash"></i></td></tr>
                            <tr class="info-actions"><td><i class="fa fa-edit"></i></td></tr>
                            <tr class="info-actions"><td><i class="fa fa-floppy-o" aria-hidden="true"></i></td></tr>
                        </table>
                    </div>
                </td>            
                ';
            echo '</tr>';
        }
    }
?>