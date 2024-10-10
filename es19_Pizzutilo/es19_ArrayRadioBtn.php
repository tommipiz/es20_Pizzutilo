<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Radio Button</title>
</head>
<body>
    <?php
        $domanda = "Qual è il pianeta più vicino al sole?";
        $risposte = ['Venere','Terra', 'Marte', 'Mercurio', 'Giove'];

        echo "<p><bb>$domanda</bb></p>";

        echo "<form>";
            foreach($risposte as $risposta) {
                echo "<input type='radio' name='risposta'> $risposta<br>";
            }

        echo "</form>";

    ?>
    
</body>
</html>