<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest1";

$cdbsql = "CREATE DATABASE dbtest1";

$ctbsql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$inssql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

//koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: <br>". $conn->connect_error);
}
echo "Connected Sucses <br>";

/*create DB
if ($conn->query($cdbsql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error create DB: " . $conn->error;
}
*/

/*create tabel
if ($conn->query($ctbsql) === TRUE) {
  echo "Table MyGuests created successfully <br>";
} else {
  echo "Error creating table: <br>" . $conn->error;
}
*/
/*
if ($conn->query($inssql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $inssql . "<br>" . $conn->error;
}*/

$lastid = $conn->insert_id;
echo $lastid;


$conn->close();






?>