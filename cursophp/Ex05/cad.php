<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado Do Processamento</h1>
    </header>
    <main>
        <?php 
        $nome=$_GET["nome"] ?? "Nulo";
        $sobrenome=$_GET["sobrenome"] ?? "desconhecido";
        echo "<p> É um prazer te conhecer,<strong>$nome $sobrenome</strong>! Esse e Meu Site";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar Para A Página Anterior</a></p>
    </main>
</body>
</html>