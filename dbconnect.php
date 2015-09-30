<?php

try {
	$connect = new PDO('mysql:host=localhost;dbname=CreativeDB', 'root', 'root');
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
	die('nope!');
} 
// echo "yup.";
?>