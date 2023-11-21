<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="cadastro.php" method="POST">
        <input type="hidden" name="acao" value="pedido">

        <div class="mb-3">
            <label for="produto">Produto</label>
            <input name="produto" id="produto" type="text">
        </div>

        <div class="mb-3">
            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo">
                <option value="sanduiche">Sanduíche</option>
                <option value="suco">Suco</option>
                <option value="sobremesa">Sobremesa</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = $_POST["produto"];
        $tipo = $_POST["tipo"];

        include("script.php");

        if (mysqli_query($conexao, "INSERT INTO cardapio (produto, tipo) VALUES('$produto', '$tipo')")) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro no cadastramento do produto.";
        }
    }
    ?>

    <button><a href="listar.php">Lista dos Produtos Cadastrados</a></button>
</body>
</html>
