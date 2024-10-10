<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo tabella casa</title>
</head>
<body>
    <?php
        $casa = [
            "indirizzo" => 'Via Roma 123',
            "metri quadri" => 120.5,
            "prezzo al metro quadro" => 2000.75,
            "prezzo totale" => 120.5 * 2000.75
        ];

        echo "<table border='1'>
                <tr>
                    <th>Indirizzo</th>
                    <th>Metri quadri</th>
                    <th>Prezzo al metro quadro</th>
                    <th>prezzo totale</th>  
                </tr>
                <tr>";

                foreach($casa as $valore) {
                    echo "<td>$valore</td>";
                }

                echo "</table";
    ?>
    
</body>
</html>