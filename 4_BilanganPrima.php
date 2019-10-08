<?php
    echo "BERIKUT ADALAH BILANGAN PRIMA DARI 1 - 37";
    echo "<br>";

    for ($i=1; $i <= 37 ; $i++) { 
        $bil=0;
        for ($j=1; $j <= $i ; $j++) { 
            if($i%$j == 0){
                $bil++;
            }
        }
        if ($bil == 2){
            echo $i;
            echo "<br>";
        }
    }
?>