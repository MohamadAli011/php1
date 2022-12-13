<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="cookies&session.php">
		<label> Nama Depan :
			<input type="text" name="NamaDe">
		</label>
		<br/>
		<label> Nama Belakang :
			<input type="text" name="NamaBe">
		</label>
		<br/>
		<input type="submit" name="Tekan Ini !">
	</form>
	<table border=5 width=50% align="center">
            <tr>
                <td bgcolor=grey colspan="2" align="center">BIODATA</td>
            </tr><tr>
                <td colspan="2" align="center"><img src="foto.jpg" width=30%></td>
            </tr><tr>
                <td bgcolor=#D3D3D3>Nama</td>
                <td bgcolor=#D3D3D3><?= $_POST['NamaDe']?></td>
            </tr><tr>
                <td>Test</td>
                <td bgcolor=#D3D3D3><?= $_POST['NamaBe']?></td>            
            </tr>
</body>
</html>

<?php 

 ?>