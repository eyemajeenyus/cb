<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php

require_once('dbconnect.php');
$query = $connect->query("SELECT client_id, status_id, client, campaign, live, assets, banners, lookfeel, messaging, cta, video, timer, destination, objectives, segments FROM desktop WHERE client_id = '" . $_GET['id'] . "'");
$query->execute();
$result = $query->setFetchMode(PDO::FETCH_ASSOC); 

$bg = "img/back.png";
$to = 'keith@steelhouse.com';
$subject = 'SteelHouse Creative Brief';

// $path = substr(md5(uniqid(rand(preview.php?id\=' . $row['client_id'] . '), true)), 16, 16);

// echo "http://creativebrief.steelhouse.com/preview.php?id=' . $path . '";

if (isset($_POST['send'])) {
	$to = 'keith@steelhouse.com';
	$subject = 'SteelHouse Creative Brief';
	$message = "<html><head><title>Creative Brief eMail</title></head><body style='background-image:url(<?php echo $bg; ?>);'><p>";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Client: </b></div><div style="margin-left: 25px; color: #000;">' . $row['client'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Campaign: </b></div><div style="margin-left: 25px; color: #000;">' . $row['campaign'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Live Date: </b></div><div style="margin-left: 25px; color: #000;">' . $row['live'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Assets: </b></div><div style="margin-left: 25px; color: #000;">' . $row['assets'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Banners: </b></div><div style="margin-left: 25px; color: #000;">' . $row['banners'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Look & Feel: </b></div><div style="margin-left: 25px; color: #000;">' . $row['lookfeel'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Messaging: </b></div><div style="margin-left: 25px; color: #000;">' . $row['messaging'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>CTA: </b></div><div style="margin-left: 25px; color: #000;">' . $row['CTA'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Video: </b></div><div style="margin-left: 25px; color: #000;">' . $row['video'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Timer: </b></div><div style="margin-left: 25px; color: #000;">' . $row['timer'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Destination: </b></div><div style="margin-left: 25px; color: #000;">' . $row['destination'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Objectives: </b></div><div style="margin-left: 25px; color: #000;">' . $row['objectives'] . "</div><br/>\r\n\r\n";
	$message .= '<div style="font: bold 16px/18px Arial, Helvetica, sans-serif; color:#C00; text-transform: uppercase; margin-left: 20px;"><b>Segments: </b></div><div style="margin-left: 25px; color: #000;">' . $row['segments'];
	$message .= "</div></p></div></body></html>";
	$message .= "stuff";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
}
$success = mail($to,$subject,$message,$headers);
?>
<?php if (isset($success) && $success) { ?>
<div id="wrapper">
	<div id="data">
		<div class="miniPush"></div>
		<h1 class="heading">Word!</h1>
		<p>This brief is on its way!</p>
		<a href="status.php">View Brief Status</a>
	</div>
<?php } else { ?>
	<div id="data">
		<div class="miniPush"></div>
		<h1 class="heading">Oops!</h1>
		<p>Something went wrong mane.</p>
	</div>
</div>
<?php } ?>