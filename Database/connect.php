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
}

$lastid = $conn->insert_id;
echo $lastid;
////Insert Data
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Alex', 'kol', 'Alkol@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
////Delete
$sql = "DELETE FROM MyGuests WHERE firstname='John'";

////Select Data
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
*/
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

if ($conn->query($sql) === TRUE) {
  echo "Delete successfully";
} else {
  echo "Delete Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






?>