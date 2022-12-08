<?php 

$nilai = 89;
$absen = 30;
$grade ;

if ($nilai>50 && $absen >20) {
	echo "Grade $nilai Pass <br>";
} else {
	echo "Not Pass";
}

if ($nilai>90 && $absen>20) {
	echo "A";
	$grade = "A";
}elseif($nilai>80 && $absen>20){
	echo "B";
	$grade = 'B';
}elseif($nilai>70 && $absen>20){
	echo "C";
	$grade = "C";
}

switch ($grade) {
	case 'A':
		echo " nilai A";
		break;
	case 'B':
		echo " nilai B";
		break;
	default:
		echo " nilai C";
		break;
}

 ?>