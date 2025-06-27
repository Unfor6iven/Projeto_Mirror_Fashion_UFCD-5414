    <?php

        $header_css = '<link rel="stylesheet" href="CSS/Produtos.css">';
		$header_title = 'Produto da Mirror Fashion';
        include 'header.php'; 

	?>

    <!-- Content -->
     <div class="produto-back">
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
             
             <div class="detalhes">
                <h3>Detalhes do Produto</h3>
                <p>
                    Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.
                </p>
                <table>
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>Detalhe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cardigã 7845</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td> Algodão e Poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Verde, Azul e Vermelho</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar à Mão</td>
                        </tr>
                    </tbody>
                </table>
             </div>
         </div>
     </div>
     
    <?php include 'footer.php'; ?>
