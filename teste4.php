// Contador
<?php
    echo "<br><br>";
    for($i=0; $i<10; $i++){
        if($i>2){
            if($i==5){
                echo "Bloco do 5<br>";
                continue;
            }
            if($i<6){
                echo "Bloco do 2-5<br>";
            }
        }
        echo "$i<br>";
    }
?>