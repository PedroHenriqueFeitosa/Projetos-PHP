<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 004</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
<?php 
$inicio=date("m-d-Y",strtotime("-7 days"));
$fim=date("m-d-Y");
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
$real=$_REQUEST["din"]?? 0;
$dados=json_decode(file_get_contents($url),true);
$cotação=$dados["value"][0]["cotacaoCompra"];
$dolar=$real/$cotação;

$padrão=numfmt_create("pt_BR",NumberFormatter::CURRENCY);

echo"Seus".numfmt_format_currency($padrão,$real,"BRL")."Equivalem a ".numfmt_format_currency($padrão,$dolar,"USD");
?>
<button onclick="javasrcipt:history.go(-1)">Voltar</button>
    </main>
</body>
</html>