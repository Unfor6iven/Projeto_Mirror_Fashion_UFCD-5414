    <?php
	$header_title = 'Mirror Fashion';

	include 'header.php';

	require_once("connect.php");

	?>

    <section id="main" class="container destaques">
    	<!-- Conteúdo principal -->

    	<!-- Painel de Busca -->
    	<section class="busca">
    		<h2>Busca</h2>
    		<form action="">
    			<input type="search" name="busca">
    			<input type="image" src="IMG/busca.png">
    		</form>
    	</section>
    	<!-- Fim .busca -->

    	<!-- Painel de Menu de Departamentos -->
    	<section class="menu-departamentos">
    		<h2>Departamentos</h2>
    		<nav>
    			<ul>
    				<li><a href="#">Blusas e Camisas</a>
    					<ul>
    						<li><a href="#">Manga Curta</a></li>
    						<li><a href="#">Manga Comprida</a></li>
    						<li><a href="#">Camisa Social</a></li>
    						<li><a href="#">Camisa Casual</a></li>
    					</ul>
    				</li>
    				<li><a href="#">Calças</a></li>
    				<li><a href="#">Saias</a></li>
    				<li><a href="#">Vestidos</a></li>
    				<li><a href="#">Sapatos</a></li>
    				<li><a href="#">Bolsas e Carteiras</a></li>
    				<li><a href="#">Acessórios</a></li>
    			</ul>
    		</nav>
    	</section>
    	<!-- Fim .menu-departamentos -->

    	<div class="index-banner">
    		<img src="IMG/destaque-home.jpg" alt="Promo: Big City Night">
    		<button id="play-pause">&#9208;</button>
    	</div>

    </section>
    <!-- Fim do Container de Destaques -->

    <section id="destaques" class="container">
    	<!-- Paineís com Destaques -->
    	<div class="container paineis">
    		<section class="painel novidades">
    			<h2>Novidades</h2>
    			<ol>
					<?php

					$dados = mysqli_query($con, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");

					while ($produto = mysqli_fetch_array($dados)) {
						
					?>

						<li>
							<a href="produto.php?id=<?= $produto["id"] ?>">
								<figure>
									<img src="IMG/produtos/miniatura<?= $produto["id"] ?>.png" alt="<?= $produto["nome"] ?>">
									<figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
								</figure>
							</a>
						</li>

					<?php } ?>


    			</ol>
				<button type="button">Mostrar Mais</button>
    		</section>


    		<section class="painel mais-vendidos">
    			<h2>Mais Vendidos</h2>
    			<ol>
					<?php
					
					$dados = mysqli_query($con, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");

					while ($produto = mysqli_fetch_array($dados)) {
					
					?>

						<li>
							<a href="produto.php?id=<?= $produto["id"] ?>">
								<figure>
									<img src="IMG/produtos/miniatura<?= $produto["id"] ?>.png" alt="<?= $produto["nome"] ?>">
									<figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
								</figure>
							</a>
						</li>

					<?php } ?>

    			</ol>
				<button type="button">Mostrar Mais</button>
    		</section>

    	</div>

    </section>
    <!-- Fim do Container de Novidades/Mais Vendidos -->


	<script src="JS/jquery.min.js"></script>
    <script src="JS/index.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/4.3.0/less.min.js"></script>

    <?php include 'footer.php'; ?>