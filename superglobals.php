<?php 
////*****Globals*****
$x = 10;
$y = 15;
function addition(){
	$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z;



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