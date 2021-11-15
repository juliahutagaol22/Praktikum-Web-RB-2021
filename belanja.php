<?php

include "index.php";

class buah
{
    var $totMangga, $totJambu, $totSalak;
   
    public function __construct($mangga,$jambu,$salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function TotalMangga(){
        $this->totMangga = $this->mangga * 15000;
        echo "Harga Mangga Seluruhnya: Rp ".$this->totMangga;
    }

    public function TotalJambu(){
        $this->totJambu = $this->jambu * 13000;
        echo "<br>Harga Mangga Seluruhnya: Rp ".$this->totJambu;
    }

    public function TotalSalak(){
        $this->totSalak = $this->salak * 10000;
        echo "<br>Harga Mangga Seluruhnya: Rp ".$this->totSalak;
    }

    public function total(){
        $total = $this->totMangga + $this->totJambu + $this->totSalak;
        echo "<br><br>Total belanja Seluruhnya: Rp ". $total;
        echo "<br>Terimakasih.";
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->TotalMangga();
$transaksi->TotalJambu();
$transaksi->TotalSalak();
$transaksi->total();
?>