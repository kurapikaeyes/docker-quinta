<?php
$tipo = $_GET["tipo"];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>spedizione</title>
</head>
<body>
    <h1>Richiesta di spedizione</h1>
    <?php echo "<p>Tipologia selezionata: $tipo</p>"?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        Nome:
        <input type="text" id="nome" name="nome">
        <br>
        Peso del pacco:
        <select id="peso" name="peso">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br>
        Invio aereo:
        <input type="checkbox" id="aereo" name="aereo">
        <label for="aereo">Sì (costo aggiuntivo)</label>
        <br>
        <button type="submit">Calcola prezzo</button>
    </form>
    <br>
    <p><a href="home.php">Torna home</a></p>
</body>
</html>

<?php
$errore = false;

if(empty($_POST["nome"]) || !isset($_POST["peso"])){
    $errore = true;
}
else{
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
}
if($errore) echo "<p>Il modulo deve essere compilato completamente!</p>";

$aereo = $_POST["aereo"];
$ppp = 0;
$totale = 0;

if(isset($aereo))
    $totale +=10;

if(!$errore){
    echo "<h1>Riepilogo della richiesta di spedizione</h1>";
    echo "<br>";
    echo "<table border='1'>";

    echo "<tr>
            <td>Nome del cliente</td>
            <td>$nome</td>
        </tr>";
    echo "<tr>
            <td>Tipologia</td>
            <td>$tipo</td>
        </tr>";
    echo "<tr>
            <td>Peso del pacco</td>
            <td>$peso kg</td>
        </tr>";
    if($tipo=="standart"){
        echo "<tr>
            <td>Costo per cilogrammo</td>
            <td>3 euro</td>
        </tr>";
        $ppp = 3;
    }
    else{
        echo "<tr>
            <td>Costo per cilogrammo</td>
            <td>5 euro</td>
        </tr>";
        $ppp = 5;
    }
    echo "<tr>
            <td>Supplemento aereo</td>
            <td>10 euro</td>
        </tr>";
    $totale = $peso * $ppp;
    echo "<tr>
            <td>Costo totale</td>
            <td>$totale euro</td>
        </tr>";

    echo "</table>";
    echo "<br>";
    echo "<p>Tutto effettuato correttamente!</p>";
}
?>