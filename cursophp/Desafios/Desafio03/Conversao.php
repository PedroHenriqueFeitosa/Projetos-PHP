<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 003</title>
</head>
<body>
    <main>
<?php 
$cotaçao=5.27;
$real=$_REQUEST["din"]?? 0;
$dolar=$real/$cotaçao;
$padrão=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"Seus".numfmt_format_currency($padrão,$real,"BRL")."Equivalem a ".numfmt_format_currency($padrão,$dolar,"USD");
?>
<button onclick="javasrcipt:history.go(-1)">Voltar</button>
    </main>
</body>
</html>