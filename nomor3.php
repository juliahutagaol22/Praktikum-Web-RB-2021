<?php
function bil_prima(){
  for($i=1;$i<=50;$i++){ 
        $a = 0;
        for($j=1;$j<=$i;$j++){ 
            if($i % $j == 0){ 
                $a++;
            }
        }
        if($a == 2){ 
         echo "$i <br>";
        }
    }
}
echo "Berikut bilangan prima no 1-50 <br><br>";
bil_prima();
?>