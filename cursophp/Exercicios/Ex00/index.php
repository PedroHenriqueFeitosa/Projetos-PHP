<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>
        <?php 

$numero = 10;

for ($i = 0; $i <= $numero; $i++) {
  $resultado = $i*30;
  echo $tabuadaDeNove = "30 X $i = $resultado";
  echo PHP_EOL;
}
?>