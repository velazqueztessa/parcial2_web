<?php
        echo "Mi primer programa en PHP";
       echo "<h1>Nombre: Velazquez Rodriguez Tessa Airam 5AVP</h1>";

        echo "<br >";

        echo "<h1 style='color:lightblue;'>Lista de numeros</h1>";
 
        for($i = 0; $i<10; $i++){
          echo $i+1 . "<br>";
       }

       for ($i=0; $i < 10; $i++) { 
       	if ($i % 2 == 0){
       		echo "<div style='border: 1px solid black; padding: 30px; width: 30px; display: inline-flex; background: green;'>";

       	} else {

       		echo "<div style='border: 1px solid black; padding: 30px; width: 30px; display: inline-flex; background: blue;'>";
       }
    
    echo $i+1;
    echo "</div>";
    
    }

    

?>