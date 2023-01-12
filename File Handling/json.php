<?php 
//encode json
$age = array("Peter"=>45, "John"=>39);


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';


$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];  

echo json_encode($age);

//

//echo json_decode($age);
//var_dump(json_decode($jsonobj));

 ?>