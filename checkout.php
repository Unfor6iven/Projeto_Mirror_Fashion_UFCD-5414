<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">


    <title>Checkout Mirror Fashion</title>
</head>

<body>

    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>
                Obrigado por comprar na Mirror Fashion!
                Preencha os seus dados para efetivar a compra
            </p>
        </div>  <!-- fim .container -->
    </div>  <!-- fim .jumbotron -->

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="container">Sua compra: </h2>
            </div>  <!-- fim .panel-heading -->

            <img src="IMG/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" alt="Foto1" class="img-thumbnail img-responsive">
            <div class="panel-body">
                <dl>
                    <dt>Produto: </dt>
                    <dd><?= $_POST['nome'] ?></dd>
                    <dt>Cor: </dt>
                    <dd><?= $_POST['cor'] ?></dd>
                    <dt>Tamanho: </dt>
                    <dd><?= $_POST['tamanho'] ?></dd>
                    <dt>Preço: </dt>
                    <dd><?= $_POST['preco'] ?></dd>
                </dl>
            </div>  <!-- fim .panel-body -->
        </div>  <!-- fim .panel -->
    </div>

</body>

</html>