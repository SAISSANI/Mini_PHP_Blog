<?php

$host="db";
$user="root";
$pass="password";
$db="php_docker";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	echo("Connected");
}

?>