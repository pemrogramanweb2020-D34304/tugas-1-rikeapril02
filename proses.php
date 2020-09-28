<?php
$bilangan1 = $_GET['bilangan1'];
$bilangan2 = $_GET['bilangan2'];
$operator = $_GET['operator'];
echo "Bilangan 1 yang dikirimkan adalah $bilangan1 <br>";
echo "Bilangan 2 yang dikirimkan adalah $bilangan2 <br>";

$bil1 = $_GET['bilangan1']; $bilangan2 = $_GET['bilangan2'];
$operator  = $_GET['operator']; 
echo '<output>'; if ($operator == "tambah") 
$hasil = $bilangan1 + $bilangan2; else if ($operator == "kurang") 
$hasil = $bilangan1 - $bilangan2; else if ($operator == "kali") 
$hasil = $bilangan1 * $bilangan2; else if ($operator == "bagi")   
$hasil = $bilangan1 / $bilangan2;      
 echo "Hasil perhitungannya adalah : ". $hasil; echo '</output>';

?>
