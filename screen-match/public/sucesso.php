<?php
$conteudoDoArquivo = file_get_contents('filme.json');
$filme = json_decode($conteudoDoArquivo, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Filme cadastrado com sucesso!</h1>
    <p><strong>Nome:</strong> <?php echo $filme['nome']; ?></p>
    <p><strong>Ano:</strong> <?php echo $filme['ano']; ?></p>
    <p><strong>Nota:</strong> <?php echo $filme['nota']; ?></p>
    <p><strong>Gênero:</strong> <?php echo $filme['genero']; ?></p>
</body>
</html>