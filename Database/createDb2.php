<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest2";

$cdbsql = "CREATE DATABASE dbtest2";

$ctbsql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	die("Connection failed: ".$conn->Connect);
} else {
	echo "Koneksi berhasil";
}

$conn->query($sql) === TRUE
if (mysqli_query($conn, $ctbsql)) {
	echo "Database created succsess";
} else{
	echo "Create database error" . mysqli_error($conn);
}

?>
