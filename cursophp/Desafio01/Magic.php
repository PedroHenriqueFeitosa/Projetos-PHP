<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor E Sucessor</title>
</head>
<body>
    <header>
        <h1>
            Resultado Final
            </h1>
            </header> 
            <main>
            <?php 
            $um_numero=$_GET["Numero"];
            $antecessor=$um_numero-1;
            $sucessor=$um_numero+1;
            echo "o valor do Antecessor:". $antecessor ."<br>/>n";
            echo "o valor do Sucessor:".$sucessor . "<br>/n";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar Para A Página Anterior</a></p>
        </main>
</body>
</html>