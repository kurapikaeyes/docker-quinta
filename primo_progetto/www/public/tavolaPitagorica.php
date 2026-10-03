<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Tavola Pitagorica</title>

    <style>
        table {
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid;
            height: 30px;
            width: 30px;
            text-align: center;
        }
        th {
            background-color: #60a0b0;
        }
    </style>
</head>
<body>
<h1>Tavola Pitagorica</h1>
<table>
    <?php
    echo "<tr>";
    echo "<th>x</th>";
    for ($col = 0; $col <= 10; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    for ($riga = 0; $riga <= 10; $riga++) {
        echo "<tr>";
        echo "<th>$riga</th>";
        for ($col = 0; $col <= 10; $col++) {
            $val_cella = $col * $riga;
            echo "<td>$val_cella</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<br>
<a href="tabellinadel.php">Tabello con valore inserito</a>
</body>
</html>