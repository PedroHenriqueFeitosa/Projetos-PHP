<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio De PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual=date("Y");
    $nasc= $_GET['nasc'] ?? '2000';
    $ano=$_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que Ano Vocẽ Nasceu?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
        <label for="ano">Quer saber sua idade em que ano? (Atualmente Estamos Em <strong><?=$atual?></strong>)</label>
        <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
        <input type="submit" value="Qual será Minha Idade?">
        </form>
    </main>
    <section>
        <?php 
        $idade= $ano-$nasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem Nasceu em <?=$nasc?> vai ter <strong><?=$idade?> Anos </strong>Em <?=$ano?></p>
    </section>
</body>
</html>