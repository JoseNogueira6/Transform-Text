<?php
session_start();

if (isset($_SESSION['mensagem_transformada'])) {
    $mensagem_transformada = $_SESSION['mensagem_transformada'];
    unset($_SESSION['mensagem_transformada']); // Limpa a sessão
}

ini_set('display_errors', 1); // Exibe erros
ini_set('display_startup_errors', 1); // Exibe erros que ocorrem durante a inicialização do script
error_reporting(E_ALL); // Reporta todos os tipos de erros

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transform Text</title>
	<style>
		body {
			background-color: #545454;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh; 
			padding-top: 60px;
		}

		.quadrado-centro{
			background-color: #ccc;
			width: 700px;
			height: 300px;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
			display: center;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 60px;	
		}
		/* Quadrado Bracnco */
		.quadrado-cima {
			background-color: white;
			width: 100%;
			height: 50px;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 1000;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
		}
		.title {
			position: fixed;
			top: 10px;
			left: 10px;
			color: black;
			font-size: 24px;
			z-index: 1001;
			font-weight: bold;
		}

		textarea {
			width: 100%;
			max-width: 680px;
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid #ccc;
			resize: none;
		}

		input[type="submit"] {
			margin-top: 20px;
			padding: 10px 20px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
			background-color: white;
			color: black;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #0056b3;
		}
	</style>
</head>
<body>
	<div class = "title">Transform Text</div>
	<div class = "quadrado-cima"></div>
	<div class="quadrado-centro">
    <form action="transformador.php" method="post">
        <textarea id="mensagem" name="mensagem" rows="10" placeholder="Digite seu texto"><?= isset($mensagem_transformada) ? $mensagem_transformada : '' ?></textarea>
        <br>
        <input type="submit" name="acao" value="MAIÚSCULO">
        <input type="submit" name="acao" value="minúsuculo">
    </form>
</div>
</body>
</html>