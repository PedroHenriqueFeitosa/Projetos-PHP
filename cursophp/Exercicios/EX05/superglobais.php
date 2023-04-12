<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais No PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <pre>
<?php
setcookie("dia-da-semana","Segunda",time()+3000);

session_start();
$_SESSION["Segunda"]="Esse E O Dia";

echo "<h1>SuperGlobal GET</h1>";
var_dump($_GET);

echo "<h1>SuperGlobal Post</h1>";
var_dump($_POST);

echo "<h1>Superglobal Request</h1>";
var_dump($_REQUEST);

echo "<h1>SuperGlobal Cookie</h1>";
var_dump($_COOKIE);

echo "<h1>SuperGlobal Session</h1>";
var_dump($_SESSION);

echo "<h1>Superglobal ENV</h1>";
var_dump($_ENV);
//foreach (getenv()as $c=>$v){
//echo "<br> $c -> $v";

echo "<h1>SuperGlobal</h1>";
var_dump($_SERVER);

echo "<h1>SuperGlobal</h1>";
var_dump($GLOBALS);
?>
    </pre>
    </main>
</body>
</html>