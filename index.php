<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<h1>Aula 001 de PHP</h1>
    <hr>
    <?php
    echo "<h2>Varíavel</h2>";
    echo $nome = "Nome: " . "Murilo" . "<br>";
    echo $idade = "Idade: " . 21 . "<br>";
    echo $fumante = "Fumante: " . false;

    if($fumante==true){
        echo "sim";
    }
    else{
        echo "não";
    }
    ?>
</body>
</html>