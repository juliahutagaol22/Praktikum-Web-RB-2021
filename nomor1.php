<?php
function Jumlah($x,$y) {
    $total = $x + $y;
    echo "PENJUMLAHAN";
    echo "<br>";
    echo "Operator:+";
    echo "<br>";
    echo "Hasil:$total";
    
}

function Kurang($x,$y) {
    $total = $x - $y;
    echo "PENGURANGAN";
    echo "<br>";
    echo "Operator:-";
    echo "<br>";
    echo "Hasil:$total"; 
}

function Bagi($x,$y){
    $total = $x/$y;
    echo "PEMBAGIAN";
    echo "<br>";
    echo "Operator:/";
    echo "<br>";
    echo "Hasil:$total"; 
}

function Kali($x,$y){
    $total = $x*$y;
    echo "PERKALIAN";
    echo "<br>";
    echo "Operator:*";
    echo "<br>";
    echo "Hasil:$total";
}

function Modulus($x,$y){
    $total = $x%$y;
    echo "Modulus";
    echo "<br>";
    echo "Operator:%";
    echo "<br>";
    echo "Hasil:$total"; 
}
$a=10;
$b=5;
echo "Bilangan 1=$a";
echo "<br>";
echo "Bilangan 2=$b";
echo "<br><br>";
echo "Berikut merupakan hasil dari setiap operasi";
echo "<br><br>";
Jumlah($a,$b);
echo "<br><br>";
Kurang($a,$b);
echo "<br><br>";
Kali($a,$b);
echo "<br><br>";
Bagi($a,$b);
echo "<br><br>";
Modulus($a,$b);

?>