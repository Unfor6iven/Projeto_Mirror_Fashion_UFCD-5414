<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">


    <title>Checkout Mirror Fashion</title>

    <style>
        .form-control:invalid {
            border: 2px solid #c00;
        }
    </style>
</head>

<body>

    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>
                Obrigado por comprar na Mirror Fashion!
                Preencha os seus dados para efetivar a compra
            </p>
        </div> <!-- fim .container -->
    </div> <!-- fim .jumbotron -->

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="container">Sua compra: </h2>
            </div> <!-- fim .panel-heading -->

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
            </div> <!-- fim .panel-body -->
        </div> <!-- fim .panel -->

        <form action="#">
            <fieldset>
                <legend>Dados Pessoais</legend>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" autofocus required>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nif">NIF</label>
                    <div class="input-group">
                        <span class="input-group-addon">#</span>
                        <input type="text" class="form-control" name="nif" id="nif" placeholder="000 000 000" pattern="[0-9]{9}" required>
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="spam" checked value="sim">
                        Quero receber spam da Mirror Fashion
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Cartão de Crédito</legend>

                <div class="form-group">
                    <label for="cardnum">Número do Cartão</label>
                    <input type="text" class="form-control" name="cardnum" id="cardnum" placeholder="0000 0000 0000 0000" pattern="[0-9]{12}">
                </div>

                <div class="form-group">
                    <label for="cardcvv">CVV</label>
                    <input type="text" class="form-control" name="cardcvv" id="cardcvv" placeholder="CVV" pattern="[0-9]{3}">
                </div>

                <div class="form-group">
                    <label for="cardbanner">Bandeira</label>
                    <select name="cardbanner" id="cardbanner">
                        <option value="master">MasterCard</option>
                        <option value="visa">Visa</option>
                        <option value="amex">American Express</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="cardval">Validade</label>
                    <input type="month" class="form-control" name="cardval" id="cardval">
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary btn-lg pull-right">
                <i class="glyphicon glyphicon-thumbs-up"></i>
                Confirmar Pedido
            </button>
        </form>
    </div>

    <script>
        document.querySelector('input[type=email]').oninvalid = function() {
            // remover mensagens de erro antigas
            this.setCustomValidity("");

            // reexecutar validação
            if(!this.validity.valid) {
                //se inválido, coloca mensagem de erro
                this.setCustomValidity("Email Inválido!");
            }
        }
    </script>
</body>

</html>