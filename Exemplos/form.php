<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/bootstrap.css">

    <title>Document</title>

    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>
<body>

    <form action="res.php" method="get">

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Introduza o seu email">

        <label for="number">Número: </label>
        <input type="number" name="number" id="number" min="0" max="100" step="5">

        <label for="url">Link: </label>
        <input type="url" name="url" id="url" placeholder="https://exemplo.com">

        <label for="range">Range: </label>
        <input type="range" name="range" id="range" min="10" max="100" step="10">

        <!-- TYPES: date, month, week, time, datetime, datetime-local -->
        <label for="date">Data: </label>
        <input type="date" name="date" id="date">
        
        <label for="cor">Cor: </label>
        <input type="color" name="cor" id="cor">

        <label for="search">Pesquisa: </label>
        <input type="search" name="search" id="search">

        <label for="tel">Contacto: </label>
        <input type="tel" name="tel" id="tel" pattern="[0-9]{9}" inputmode="numeric" placeholder="123456789">

        <label for="cidades">Cidade: </label>
        <input type="text" list="cidadessug" name="cidades" id="cidades" autocomplete="on">
        <datalist id="cidadessug">
            <option value="Porto">
            <option value="Lisboa">
            <option value="Braga">
            <option value="Coimbra">
            <option value="Faro">
        </datalist>

        <input type="submit" value="Enviar">

        <span class="glyphicon glyphicon-list"></span>
    </form>
    
</body>
</html>