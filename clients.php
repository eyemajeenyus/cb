<?php

try {
	$connect = new PDO('pgsql:host=50.97.171.187;port=6432;dbname=steelhouse', 'shaccess', 'letmein');
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $connect->query("SELECT advertiser_id, company_name FROM advertisers");
	var_dump($stmt->fetchAll());
}
catch(PDOException $e) {
	echo $e->getMessage();
	die('nope!');
} 
// echo "yup.";
?>