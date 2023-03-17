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
    <main>
        <h1>
            Resultado Final
            </h1>

            <?php 
            $Num=$_REQUEST["Num"] ?? 0;
            $a=$Num-1;
            $s=$Num+1;
            echo "O Numero Escolhido foi $Num";
            echo "O valor do Antecessor $a";
            echo "O valor do Sucessor $s";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar Para A Página Anterior</a></p>
        </main>
</body>
</html>