<!DOCTYPE html>
<html>

<body>

    <?php
    // Variabile che contiene il nome
    $nome = "Paolo";

    //Creazione della variabile ora
    $ora = date("H");

    // Determinare il saluto in base all'ora
    if ($ora >= 8 && $ora < 12) {

        $saluto = "Buongiorno";

    } elseif ($ora >= 12 && $ora < 16) {

        $saluto = "Buon pomeriggio";
    }
        elseif ($ora >= 16 && $ora <= 21) {

            $saluto = "Buonasera";
    
    } else {
        
        $saluto = "Buonanotte";
    }

    // Scrivere allo schermo il saluto e il nome
    echo "<p>$saluto $nome, benvenuta nella mia prima pagina PHP!</p>";
    ?>

    <br>
    <br>

    <a href="appunti_di_esercizio_b.html"> Per capire di piu' clicca qui</a>

    <br>
    <br>

    <!-- il link per tornare alla home page --!>
    <a href="index.html"> Torna indietro </a>

</body>

</html>