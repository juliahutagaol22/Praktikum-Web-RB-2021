<?php
function array_data(){
    echo "Mengurutkan data dari 10 buah data yang acak<br><br>";

    $my_array = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "sani", "rasya", "budi");
    sort($my_array);
    
    foreach ($my_array as $list){
        echo "$list<br><br>";
    }

}
//Memanggil function
array_data();
?>