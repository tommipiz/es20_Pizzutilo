<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array menu a tendina</title>
</head>
<body>

    <select name='$filmPref'>

    <?php

        $film = ["La vita è bella", "Titanic","Deadpull","Babylon","Oppenheimer"];
        $filmPref = "Film preferito";

        for($i=0;$i<$cont($film); $i++) {
            $indice = $i++;
            echo "option value='f" . $indice . "'>$film[$i]</option>";
        }
        

    ?>
    </select>
    
</body>
</html>