<?php 
	require_once($GLOBALS['caminhoDosArquivos']['autoload']);

	 require_once($GLOBALS['caminhoDosArquivos']['ViewTablePacientes']);
	 require_once($GLOBALS['caminhoDosArquivos']['ViewStylesTable']);
	 require_once($GLOBALS['caminhoDosArquivos']['ViewScriptsTable']);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Aparecida Nutrição</title>

		<?php stylesTable(); ?>
		<link rel="stylesheet" type="text/css" href="css/index.css">

	</head>
	<body>
		<header>
			<div class="container">
				<h2 class="titulo">Aparecida Nutrição</h2>
			</div>
		</header>
		<main>
			<section class="container container-pacientes">
				<h2>Meus pacientes</h2>
				<label>Buscar: </label><input type="text" id="busca-paciente"/>
				
				<?php tablePacientes(); ?>

			</section>
		</main>
		<section class="container">
			<h2 id="titulo-form">Adicionar novo paciente</h2>
			<div class="erro-container">
				<ul>
				  <li class="erro"></li>
				</ul>
			</div>
		    <form id="form-adiciona">
		        <div class="">
		            <label for="nome">Nome:</label>
		            <input id="nome" name="nome" type="text" placeholder="digite o nome do seu paciente" class="campo">
		        </div>
		        <div class="grupo">
		            <label for="peso">Peso:</label>
		            <input id="peso" name="peso" type="text" placeholder="digite o peso do seu paciente" class="campo campo-medio">
		        </div>
		        <div class="grupo">
		            <label for="altura">Altura:</label>
		            <input id="altura" name="altura" type="text" placeholder="digite a altura do seu paciente" class="campo campo-medio">
		        </div>
		        <div class="grupo">
		            <label for="gordura">% de Gordura:</label>
		            <input id="gordura" type="text" placeholder="digite a porcentagem de gordura do seu paciente" class="campo campo-medio">
		        </div>

		        <button id="adicionar-paciente" class="botao bto-principal">Adicionar</button>
		    </form>
		</section>
		<?php scriptsTable(); ?>
	</body>
</html>
<!-- Setup basico de trafego -->
<!-- Setup basico de traqueamento -->
<!-- Setup basico de rastreamento -->

<!-- 
	google analitics
	pixel do facebook
	google ads

	conhecimento em trafego
	markting
	social media
	branding
-->