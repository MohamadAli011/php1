<?php 
//$n =5;
echo "<h2>Tipe Data<h2>";
//echo 'nilai'.$n;
//echo "<h5>This ", "string ", "was ", "made ", "with multiple parameters.<h5>";


/// Tipe data String //
$kata = 'kuda ';
$kalimat1 = 'hari senin bulan januari';
$kalimat2 = 'hari kamis ygl 03';
$kalimat3 = 'hari minggu @!!!';
/*echo $kata.$kalimat1 ;
var_dump($kata);
//echo 'tes';
//menghitung banyaknya karakter
//echo strlen("hai dun");
//menghitung banyaknya kata
echo str_word_count("tes satu dua");
echo strpos("dua tiga makan malam", "ma");
echo str_replace("world", "tes", "Hello world!");


/// Tipe data Integer
$angka1 = 10;
$angka2 = -8710;
$angka4 = -5;
$angka5 = 232420884534564678154515012129;
$angkaHit = $angka1 + $angka4;
/*echo $angkaHit;
echo $angka5; */
//var_dump($angka5);


/// Tipe data float
$float1 = 2.5;
$float2 = 0.0001;
//var_dump($float2);
//echo $float2;


/// Tipe data Boolean
$bt = true;
$bf = false;
/*echo "Tipe data boolean <br>";
echo "bolean true = $bt";
echo "bolean false = $bf";
var_dump($bf);*/


/// Tipe data Array
$aray1 = array(1,2,3,4);
//var_dump($aray1);
$aray2 = ["anjing", "kucing", "kerbau","ikan"];
//var_dump($aray2);
$cari1 = $aray2[2];
//echo "cari data ke 3: ".$cari1;
//echo "<br>Ubah data ke 3 ";
$aray2[2] = "sapi";
$cari1 = $aray2[2];
//echo "<br>cari data ke 3:".$cari1;
//echo "<br>tambah data aray";
$aray2[] = "kuda";
//echo "<br>Cetak aray ke 5 :".$aray2[4];
//array 2 dimensi
$mahasiswa = array(
                  array("Dimas", "Teknik Informatika ", "Laki-laki",23),
                  array("Fitri", "Sistem Informasi ", "Perempuan", 22),
                  array("Juan", "Manajemen Informatika ", "Laki-laki",24),
                  array("Wulan", "Teknik Komputer ", "Perempuan", 20),
                  array("Marcel", "Teknik Informatika ", "Laki-laki", 24)
	          );
$i = 1;

//echo "<br>Mahasiswa ".$mahasiswa[$i][$i];
for ($i=0; $i < 4; $i++) { 
    //echo "<br>".$mahasiswa[$i][$si];
}
//array sebagai MAP
$Andi = array(
        "Nama" => "Andi",
        "JK" => "Laki-Laki",
        "usia" => "29");
//echo $Andi["Nama"];
$Andi2 = array(
        "Nama" => "Andikkk",
        "JK" => "Laki-Laki",
        "usia" => "29",
        "Anak" =>[
            "1" => "laki-laki",
            "2" => "Perempuan"]);
//echo "<br>Nama Pasien ".$Andi2["Nama"];
//echo "<br>Anak 1 ".$Andi2["Anak"]["1"];


/// Tipe data Object
class Car{
    public $color;
    public $model;
    public $tahun;
    public function masukkan($model, $color, $tahun){
        $this->color=$color;
        $this->model=$model;
        $this->tahun=$tahun;
    }
    public function message(){
        return "My car is a ". $this->model." and color ".$this->color;
    }
        public function message2(){
        return "Tahun ". $this->tahun;
    }
}
$myCar = new Car();
$myCar->masukkan("SUV", "red", 1995);
//echo $myCar->message();
//echo $myCar->message2();


/// Tipe data NUll Value
/// Tipe data variable
$name = "eto";
$$name = "keren";
/*var_dump($$name);
echo "\$name = $name";
echo "\n";
echo "\$eto = $eto";*/
?>