<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stampa tabella</title>
</head>
<body>
    <?php
        function stampaTabella($r,$c) {
            $r = rand(1,15);
            $c = rand(1,15);

            echo "<h3>RIGHE: $r  |  COLONNE: $c</h3>";

            echo "<table style='border:1px solid black;border-collapse: collapse;'>";

    
            for($i = 0; $i < $r ; $i++) {
                echo "<tr>";

                for($j = 0; $j < $c ; $j++) {
                    echo "<td style='border:1px solid black; padding: 10px; '>($i,$j)</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        stampaTabella(2,3);


    ?>
    
</body>
</html>