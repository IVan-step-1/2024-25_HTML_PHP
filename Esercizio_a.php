<!DOCTYPE html>
<html>

<head>
    <title>Tabella Pitagorica</title>
</head>

<body>

    <h1>Tabella Pitagorica</h1>

    <?php
    
    //impostare il bordo della tabella
    echo '<table border="1">';

    //Creazione della tabella pitgorica
    for ($i = 1; $i <= 10; $i++) {

        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>"; 

        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <!-- il link per tornare alla home page --!>
    <a href="Index.html"> Torna indietro </a>

</body>

</html>