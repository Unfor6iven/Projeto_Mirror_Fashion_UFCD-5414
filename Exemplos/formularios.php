<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="resultado.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">

        <br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass">

        <br>
        <label for="contrato">Aceito os termos do contrato.</label>
        <input type="checkbox" name="contrato" id="contrato">

        <br>
        <p>
            <input type="radio" name="idade" id="idade5" value="5">
            <label for="idade5">Menos de 5 anos</label>
        </p>
        <p>
            <input type="radio" name="idade" id="idade10" value="10">
            <label for="idade10">Menos de 10 anos</label>
        </p>
        <p>
            <input type="radio" name="idade" id="idade15" value="15">
            <label for="idade15">Menos de 15 anos</label>
        </p>
        <p>
            <input type="radio" name="idade" id="idade20" value="20">
            <label for="idade20">Menos de 20 anos</label>
        </p>

        <!-- não esquecer de incluir o enctype no <form> -->
        <label for="anexo">Anexo: </label>
        <input type="file" name="anexo" id="anexo">

        <br>
        <label for="texto">Escreva um texto: </label>
        <textarea name="texto" id="texto" rows="4" cols="32"></textarea>

        <br>
        <label for="cidades">Escolha a sua cidade: </label>
        <select name="cidades" id="cidades">
            <!-- <option value="0">-- Escolha a sua Cidade --</option> -->
            <optgroup label="Norte">
                <option value="prt">Porto</option>
                <option value="braga">Braga</option>
            </optgroup>
            <optgroup label="Centro">
                <option value="cbr">Coimbra</option>
            <option value="leiria">Leiria</option>
            </optgroup>
            <optgroup label="Sul">
            <option value="lx">Lisboa</option>
                <option value="faro">Faro</option>
            </optgroup>
        </select>



        <br>
        <input type="hidden" name="codigo" value="abc123">

        <br>
        <input type="button" name="mostra_dialogo" value="Click Aqui!">

        <br>
        <input type="image" name="botao" src="img/facebook.png" alt="Botao" width="32" height="32">

        <br>
        <input type="submit" value="Enviar">

        <br>
        <input type="reset" value="Limpar" name="reset">

    </form>
</body>

</html>