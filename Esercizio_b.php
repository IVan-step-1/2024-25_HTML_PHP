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

    } elseif ($ora >= 12 && $ora < 20) {

        $saluto = "Buonasera";

    } else {
        
        $saluto = "Buonanotte";
    }

    // Scrivere allo schermo il saluto e il nome
    echo "<p>$saluto $nome, benvenuta nella mia prima pagina PHP!</p>";
    ?>

</body>

</html>