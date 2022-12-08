<?php 
///Arithmetic operators
$x = 8;
$y = 5;
$a = "dua";
$b = "tiga";
$aray1 = array(1,2,3,4);
$aray2 = array("hewan" => "anjing", "tumbuh" => "kelapa");
$aray3 = array(89,45,31);
$aray4 = array("warna" => "merah", "bentuk" => "kotak");
$mahasiswa = array("Dimas", "Teknik Informatika ", "Laki-laki",23);
$mahasiswa2 = array("Dimas", "Teknik Informatika ", "Laki-laki",23);

$t = $x/$y;
$x+=$y;
$y+=$x;
//echo $t;
//echo $x;
//echo $y;


///Assignment operators
///Comparison operators
//var_dump($x <=> $y);


///Increment/Decrement operators
//echo $x++;
echo $x;


///Logical operators
///String operators
echo $a.=$b;


///Array operators
echo "tesss <br>";
var_dump($aray3);
echo "<br>";
$arrplus = $aray1+$aray3;
var_dump($arrplus);
echo "<br>";
print_r($aray2+$aray4);


///Conditional assignment operators


 ?>