<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/bootstrap-flatly.min.css">


    <title>Checkout Mirror Fashion</title>

    <style>
        body {
            padding-top: 70px;
        }

        .form-control:invalid {
            border: 2px solid #c00;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .navbar .glyphicon {
            color: yellow;
        }

        .navbar-brand {
            padding: 10px 15px;
        }

        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top mb-0">

        <div class="container-fluid">

            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">
                    <img src="IMG/logo-rodape.png" alt="Logo">
                </a>
                <!-- data-target (precisa de indicação especifica do target, se é class . ou se é id # ou etc) -->
                <!-- data-toggle (faz menção da função a chamar com JS) -->
                <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                    <span class="glyphicon glyphicon-align-justify"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="sobre.php"><span class="glyphicon glyphicon-home"></span>&nbsp; Sobre</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp; Ajuda</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Perguntas Frequentes</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp; Contactos</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

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

        <div class="row">

            <div class="col-lg-3 col-sm-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="container">Sua compra: </h2>
                    </div> <!-- fim .panel-heading -->

                    <div class="panel-body">

                        <img src="IMG/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" alt="Foto" class="img-thumbnail img-responsive hidden-xs">

                        <dl>
                            <dt>Produto: </dt>
                            <dd><?= $_POST['nome'] ?></dd>
                            <dt>Cor: </dt>
                            <dd><?= $_POST['cor'] ?></dd>
                            <dt>Tamanho: </dt>
                            <dd><?= $_POST['tamanho'] ?></dd>
                            <dt>Preço: </dt>
                            <dd id="preco"><?= $_POST['preco'] ?></dd>
                        </dl>
                        
                        <!-- Quantidade e Total -->

                        <div class="form-group">
                            <label for="qt">Quantidade: </label>
                            <input type="number" name="qt" id="qt" class="form-control" min="1" max="99" value="1">
                        </div>

                        <div class="form-group">
                            <label for="qt">Total: </label>
                            <output for="qt valor" id="total" class="form-control">
                                <?= $_POST['preco'] ?>
                            </output>
                        </div>
                        
                        <!-- fim Quantidade e Total -->
                        
                    </div> <!-- fim .panel-body -->
                </div> <!-- fim .panel -->
            </div>

            <div class="col-sm-8 col-lg-9">
                <form action="#">

                    <div class="row">

                        <fieldset class="col-md-6">
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
                                    <input type="text" class="form-control" data-mask="999 999 999" name="nif" id="nif" placeholder="000 000 000" required>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="spam" checked value="sim">
                                    Quero receber spam da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de Crédito</legend>

                            <div class="form-group">
                                <label for="cardbanner">Tipo</label>
                                <select name="cardbanner" id="cardbanner">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">Visa</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cardnum">Número do Cartão</label>
                                <input type="text" class="form-control" data-mask="9999 9999 9999 9999" name="cardnum" id="cardnum" placeholder="0000 0000 0000 0000">
                            </div>

                            <div class="form-group">
                                <label for="cardcvv">CVV</label>
                                <input type="text" class="form-control" data-mask="999" name="cardcvv" id="cardcvv" placeholder="CVV">
                            </div>

                            <div class="form-group">
                                <label for="cardval">Validade</label>
                                <input type="month" class="form-control" name="cardval" id="cardval">
                            </div>
                        </fieldset>

                    </div>
                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <i class="glyphicon glyphicon-thumbs-up"></i>
                        Confirmar Pedido
                    </button>
                </form>
            </div>

        </div> <!-- fim da .row -->

    </div> <!-- fim do .container -->

    <script>
        document.querySelector('input[type=email]').oninvalid = function() {
            // remover mensagens de erro antigas
            this.setCustomValidity("");

            // reexecutar validação
            if (!this.validity.valid) {
                //se inválido, coloca mensagem de erro
                this.setCustomValidity("Email Inválido!");
            }
        }
    </script>

    <script src="JS/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/inputmask-plugin.min.js"></script>
    
    <script src="JS/checkout.min.js"></script>

</body>

</html>