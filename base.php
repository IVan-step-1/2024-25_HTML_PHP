
<html>
<body>

<?php

// Dichiarazione dei variabili

	$fname=$_POST["fname"];        
	$lname=$_POST["lname"];
	
    //Verifica se esistono i dati nei variabili

    if (!($fname=="")){
        if (!($lname=="")){
            
            echo '<p>Welcome:</p>'.
            $fname . " " . $lname;     //scrivi il nome e il cognome dell'utente

        }else{
            echo " manca il cognome ";
        }
    }elseif(!($lname=="")){
        echo " manca il nome ";
    }else{ 
        echo " mancano entrambi i dati ";
    }

	?>

        <!-- il link per tornare indietro--!>
        <a href="RegisterPage.html"> Torna indietro </a> <br>
        
        <!-- il link per tornare alla home page--!>
        <a href="Index.html"> Torna alla home page </a>


</body>
</html>