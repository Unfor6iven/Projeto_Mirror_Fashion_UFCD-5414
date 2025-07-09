<!DOCTYPE html>
<html lang="pt-pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="CSS/Styles.min.css">

	<?php print @$header_css; ?>

	<title><?php print $header_title; ?></title>

</head>

<body>
	
	<header class="container">
		<!-- Conteúdo do Cabeçalho -->
		<h1><a href="index.php"><img src="IMG/logo.png" alt="Mirror Fashion"></a></h1>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>

		<!-- nav.menu-opcoes>ul>li*5>a -->
		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="https://en.wikipedia.org/wiki/Self-help" target="_blank">Ajuda</a></li>
			</ul>
		</nav>
	</header>