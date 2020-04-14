<?php 
	// require_once($path.'\Controller\ControllerTablePacientes.php'); 
	require_once($path.'\autoload.php');
?>


<?php
	function tablePacientes() 
	{
		echo '
		<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Peso(kg)</th>
				<th>Altura(m)</th>
				<th>Gordura Corporal(%)</th>
				<th>IMC</th>
			</tr>
		</thead>
		';
		echo '<tbody id="tabela-pacientes">';
		
		listarPacientes();
			
		echo '</tbody>';
	echo '</table>';
	}
?>

