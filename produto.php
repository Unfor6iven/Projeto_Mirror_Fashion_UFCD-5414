    <?php

        $header_css = '<link rel="stylesheet" href="CSS/Produtos.css">';
		$header_title = 'Produto da Mirror Fashion';
        include 'header.php'; 

	?>

    <!-- Content -->
     <div class="container">
         <div class="produto">
            <h2>Fuzzy Cardigan</h2>
            <p>por apenas R$ 129,00</p>
            <form action="">
                <fieldset class="cores">
                    <legend>Escolha a cor: </legend>
                    <input type="radio" name="cor" id="verde" value="verde" checked>
                    <label for="verde">
                        <img src="IMG/produtos/foto2-verde.png" alt="Verde">
                    </label>
                    <input type="radio" name="cor" id="azul" value="azul">
                    <label for="azul">
                        <img src="IMG/produtos/foto2-azul.png" alt="Azul">
                    </label>
                    <input type="radio" name="cor" id="vermelho" value="vermelho">
                    <label for="vermelho">
                        <img src="IMG/produtos/foto2-rosa.png" alt="Vermelho">
                    </label>
                </fieldset>
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho: </legend>
                    <input type="range" name="tamanho" id="tamanho" min="36" max="46" value="42" step="2">
                    <label for="tamanho"></label>
                </fieldset>
                <input type="submit" value="Comprar" class="comprar">
            </form>
         </div>
     </div>
     
    <?php include 'footer.php'; ?>
