<?php

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$errore = false;

if(strlen($password)<8){
    $errore = true;
    echo "<p>Inserzione sbagliata!</p>";
    echo "<p>La password deve contenere almeno 8 simboli</p>";
}

$maiuscola_trovata = false;
$cifra_trovata = false;
for($i = 0; $i<strlen($password); $i++){
    if(is_numeric($password[$i])){
        $cifra_trovata = true;
    }
    if($password[$i] >= 'A' && $password[$i] <= 'Z'){
        $maiuscola_trovata = true;
    }
}

if(!$maiuscola_trovata){
    if(!$errore){
        echo "<p>Inserzione sbagliata!</p>";
        echo "<p>La password deve contenere almeno una MAIUSCOLA</p>";
        $errore = true;
    }
    else{
        echo "<p>La password deve contenere almeno una MAIUSCOLA</p>";
    }
}
if(!$cifra_trovata){
    if(!$errore){
        echo "<p>Inserzione sbagliata!</p>";
        echo "<p>La password deve contenere almeno una cifra</p>";
        $errore = true;
    }
    else{
        echo "<p>La password deve contenere almeno una cifra</p>";
    }
}



?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Controllo</title>
</head>
<body>

</body>
</html>
