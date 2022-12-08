<?php

/// ******* FOR ********
// buat bintang/kubus/wajik 
/*$cont = 4;
$cont1 = 4;
for ($cont=2; $cont<=6; $cont++) { 
	//echo "Hai loop" .$cont."<br>";
	//echo "test perulangan";
	echo "<br>"."0";
	for ($cont1; $cont1<=6; $cont1++) { 
		echo "*";
		for ($cont2	=0; $cont2<=3; $cont2++) {
			echo $cont1; 
			echo "/";
		}
	}
}
echo $cont; */

/// ***** WHILE ******
/*$b = 0;
$c = 10;
while ($b <= 13) {
	//echo 'nilai '.$b.'<br>';
	echo '('.$b.')'.'<br>';
	//$b = $b+3;
	//$c = $c -2;
	$b ++;
	while ($b == 5) {
		//echo $c;
		echo '*';
		$b ++;
	}
}*/

/// ***** DO WHILE ******
/*$x = 1;

do {
	if ($x<=3) {
		echo 'nilai B <br>';
	}elseif ($x>=3) {
		echo 'nilai A <br>';
		break;
	}
	$x++;
} while ($x <= 8);
*/

/// ***** FOREACH *****
$mhs = array("A"=>"1","B"=>"2","C"=>"3");
$Andi = array(
        "Nama" => "Andi",
        "JK" => "Laki-Laki",
        "usia" => "29");
foreach ($Andi as $key => $value) {
	echo "$key = $value<br>";
}

 ?>  