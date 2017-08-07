<?php

$con=mysql_connect("localhost","115743","Akash14204") or die("connection failed");

if(!$con){

die("could not connect")

}

mysql_select_db("1175743",$con);
$result=mysql_query("SELECT * FROM olbe");

while($row=mysql_fetch_assoc($result)){

$output[]=$row;
}


print(json_encode($output));
mysql_close($con);


?>