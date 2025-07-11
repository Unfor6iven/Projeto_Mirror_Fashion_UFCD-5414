    <?php

    require_once("connect.php");

    $dados = mysqli_query($con, "SELECT * FROM produtos WHERE id = $_GET[id]");
    $produto = mysqli_fetch_array($dados);

    $header_css = '<link rel="stylesheet" href="CSS/Produtos.min.css">';
    $header_title = 'Mirror Fashion - ' . $produto["nome"];
    
    include 'header.php';

    ?>

    <!-- Content -->
    <div class="produto-back">
        <div class="container">
            <div class="produto">
                <h2><?= $produto["nome"] ?></h2>
                <p>por apenas <?= $produto["preco"] ?></p>
                <form action="checkout.php" method="post">
                    <input type="hidden" name="id" value="<?= $produto["id"] ?>">

                    <fieldset class="cores">
                        <legend>Escolha a cor: </legend>

                        <input type="radio" name="cor" id="verde" value="verde" checked>
                        <label for="verde">
                            <img src="IMG/produtos/foto<?= $produto["id"] ?>-verde.png" alt="Verde">
                        </label>

                        <input type="radio" name="cor" id="azul" value="azul">
                        <label for="azul">
                            <img src="IMG/produtos/foto<?= $produto["id"] ?>-azul.png" alt="Azul">
                        </label>

                        <input type="radio" name="cor" id="rosa" value="rosa">
                        <label for="rosa">
                            <img src="IMG/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="Rosa">
                        </label>

                    </fieldset>
                    <fieldset class="tamanhos">
                        <legend>Escolha o tamanho: </legend>
                        <input type="range" name="tamanho" id="tamanho" min="36" max="46" value="42" step="2">

                        <output for="tamanho" name="valortamanho">42</output>

                        <label for="tamanho"></label>
                    </fieldset>

                    <input type="submit" value="Comprar" class="comprar">
                </form>
            </div>

            <div class="detalhes">
                <h3>Detalhes do Produto</h3>
                <p>
                    <?= $produto["descricao"] ?>
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

    <script src="JS/jquery.min.js"></script>
    <script src="JS/produto.min.js"></script>

    <?php include 'footer.php'; ?>