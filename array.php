<?php 
$aray1 = array(1,2,3,4);

$mahasiswa = array(
                  array("Dimas", "Teknik Informatika ", "Laki-laki",23),
                  array("Fitri", "Sistem Informasi ", "Perempuan", 22),
                  array("Juan", "Manajemen Informatika ", "Laki-laki",24),
                  array("Wulan", "Teknik Komputer ", "Perempuan", 20),
                  array("Marcel", "Teknik Informatika ", "Laki-laki", 24)
	          );

for ($row = 0; $row < 7; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 4; $col++) {
        echo "<li>".$mahasiswa[$row][$col]."</li>";
        //echo $mahasiswa[$row][$col];
  }
  echo "</ul>";
}

$Andi = array(
        "Nama" => "Andi",
        "JK" => "Laki-Laki",
        "usia" => "29");
$pan = count($aray1);
echo $pan;

for ($i=0; $i < $pan; $i++) { 
	echo $aray1[$i];
	echo "<br>";
}
echo "///////";
foreach ($Andi as $key => $value) {
	echo 'Key '.$key.' velue '.$value.'<br>';
}

 ?>