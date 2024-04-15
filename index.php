<?php
// Definindo as variáveis em PHP
$nome = "Maria";
$idade = 25;
$peso = 60.2;
$altura = 1.68;
$escolaridade = "Ensino Superior";

// Início do código HTML
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Pessoais</title>
</head>
<body>
    <h1>Informações Pessoais</h1>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Idade:</strong> <?php echo $idade; ?></p>
    <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
    <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
    <p><strong>Grau de Escolaridade:</strong> <?php echo $escolaridade; ?></p>
</body>
</html>
