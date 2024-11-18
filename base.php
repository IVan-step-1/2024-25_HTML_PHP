
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
    
    <br>
    <br>

    <a href="appunti_di_base.html"> Per capire di piu' clicca qui</a>

    <br>
    <br>

        <!-- il link per tornare indietro--!>
        <a href="registerPage.html"> Torna indietro </a> 
    <br>
    <br>

        <!-- il link per tornare alla home page--!>
        <a href="index.html"> Torna alla home page </a>


</body>
</html>