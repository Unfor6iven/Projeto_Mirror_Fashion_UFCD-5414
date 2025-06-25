    <?php
		$header_title = 'Mirror Fashion';
		include 'header.php'; 
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

		<img src="IMG/destaque-home.png" alt="Imagem de Destaques">

	</section>
	<!-- Fim do Container de Destaques -->

	<section id="destaques" class="container">
		<!-- Paineís com Destaques -->
		<div class="container paineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>

					<li>
						<!-- Primeiro Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura1.png" alt="Produto#1">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Segundo Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura2.png" alt="Produto#2">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Terceiro Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura3.png" alt="Produto#3">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Quarto Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura4.png" alt="Produto#4">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Quinto Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura5.png" alt="Produto#5">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Sexto Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura6.png" alt="Produto#6">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

				</ol>
			</section>

			
			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				<ol>

					<li>
						<!-- Primeiro Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura7.png" alt="Produto#7">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Segundo Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura8.png" alt="Produto#8">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Terceiro Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura9.png" alt="Produto#9">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Quarto Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura10.png" alt="Produto#10">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Quinto Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura11.png" alt="Produto#11">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li>
						<!-- Sexto Produto -->
						<a href="produto.php">
							<figure>
								<img src="IMG/produtos/miniatura12.png" alt="Produto#12">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

				</ol>
			</section>

		</div>

	</section>
	<!-- Fim do Container de Novidades/Mais Vendidos -->

<?php include 'footer.php'; ?>
