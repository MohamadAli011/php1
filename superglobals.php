
<!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 		Name: <input type="text" name="fname">
 		<input type="submit"> 
 	</form>
 </body>
 </html>

<?php 
////*****Globals*****
$x = 10;
$y = 15;
function addition(){
	$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}
addition();
//echo $z;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_REQUEST['fname'];
	if (empty($name)) {
		echo "name empty";
	}else {
		echo $name;
	}
}


/*echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
*/
 ?>