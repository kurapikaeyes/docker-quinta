<?php

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$errore = false;

if(strlen($password)<8){
    $errore = true;
    echo "Inserzione sbagliata!";
    echo "\nLa password deve contenere almeno 8 simboli";
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
        echo "Inserzione sbagliata!";
        echo "\nLa password deve contenere almeno una MAIUSCOLA";
        $errore = true;
    }
    else{
        echo "\nLa password deve contenere almeno una MAIUSCOLA";
    }
}
if(!$cifra_trovata){
    if(!$errore){
        echo "Inserzione sbagliata!";
        echo "\nLa password deve contenere almeno una cifra";
        $errore = true;
    }
    else{
        echo "\nLa password deve contenere almeno una cifra";
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
