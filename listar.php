<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Lista Completa</title>
</head>

<body>

    <h1>Lista Completa dos Produtos do Cardápio</h1>
    
    <?php

    include("conexao.php");

    $dados = mysqli_query($conexao, "SELECT * FROM cardapio"); while ($tabela = mysqli_fetch_array($dados)) { 
        echo $tabela['nome'] . '<br/>';
    }

    $conexao->close();
    ?>

</body>

</html>