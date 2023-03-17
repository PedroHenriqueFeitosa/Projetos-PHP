<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <h1>
        Exemplo de PHP
    </h1>
    <h2>
    <?php



    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje e dia" . date("d/M/Y");
    echo "e a hora é " . date("G:i:s");
    echo "O dia da Semana e ". date("D");
    
   ?>
    </h2>
</body>
</html>