<?php 

try {


	$db=new PDO("mysql:localhost=;dbname=basvuru;charset=utf8",'root','12345678');
	
} 

catch (PDOException $e) 
{
	echo $e->getMessage();	
}


?>