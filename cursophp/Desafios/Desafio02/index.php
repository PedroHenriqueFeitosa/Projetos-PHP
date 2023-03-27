<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">;
</head>
<body>
    <header>
        <h1>Trabalhando com numeros aleatorios </h1>
</header>
<main>
        <?php 
        $min=0;
        $max=100;
        $num=mt_rand($min,$max);
        echo "<p>Gerando um numero aleatorio entre $min e $max... <br> O Valor Gerado foi <storng>$num</strong></p>"
        ?>
        <button onclick="javasrcipt:document.location.reload()"&x1F504;De Novo </button>
    </main>
</body>
</html>