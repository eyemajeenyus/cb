<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php

try {
        $connect = new PDO('mysql:host=localhost;dbname=CreativeDB', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        die('nope!');
    } 

    // check for $row if exists, include variable for page inclusion, show page again - require, check for errors in form submission

$advertiser_id = $_POST['advertiser_id'];
$advertiser = $_POST['advertiser'];
$campaign = $_POST['campaign'];
$live = $_POST['live'];
$assets = $_POST['assets'];
$banners = $_POST['banners'];
$lookfeel = $_POST['lookfeel'];
$messaging = $_POST['messaging'];
$cta = $_POST['CTA'];
// $video = $_POST['video'];
// $timer = $_POST['timer'];
$destination = $_POST['destination'];
$objectives = $_POST['objectives'];
$segments = $_POST['segments'];

$query = "INSERT INTO desktop (advertiser_id, advertiser, campaign, live, assets, banners, lookfeel, messaging, cta, destination, objectives, segments)
			VALUES ('$advertiser_id', '$advertiser', '$campaign', '$live', '$assets', '$banners', '$lookfeel', '$messaging', '$cta', '$destination', '$objectives', '$segments')
            ON DUPLICATE KEY UPDATE advertiser = '$advertiser', campaign = '$campaign', live = '$live'";
$connect->exec($query);
$last_id = $connect->lastInsertId();

echo '<div id="wrapper"><a href="index.html" ><img id="top_img" src="img/top.png" alt="header image" /><img id="sh_logo" src="img/sh_logo.png" alt="logo" /></a>';

echo '<p>';
echo '<p id="yes">Shit was successfully added on ' . date("m.d.Y") . ' yo!</p><br/>';
echo '<a href="index.php">Search For Brief</a><br/>';
echo '<a href="new.php">Add another</a><br/>';
echo '<a href="status.php">View Brief Status</a>';
echo '</p>';

echo "<div id='data' ><table class='sortable' style='color:#000;text-align:center;margin:0 auto;padding:0;width:auto;'><caption colspan='15' style='font-size: 32px;color:#C00;margin: 0 0 30px 0;text-align:center;'>MOST RECENT BRIEF(S)</caption>";
echo "<tr width='auto' style='color:#000;text-align:center;'><th style='text-align:center;'>Advertiser ID</th><th>Advertiser</th><th>Campaign</th><th>Live Date</th><th>Status</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;height:60px;border:1px solid #000;color:#000;text-align:center;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}

$query = $connect->query('SELECT advertiser_id, advertiser, campaign, live, status_id FROM desktop GROUP BY live DESC, advertiser DESC');
$query->execute();
$result = $query->setFetchMode(PDO::FETCH_ASSOC); 
foreach(new TableRows(new RecursiveArrayIterator($query->fetchAll())) as $k=>$v) { 
    echo $v;
}
echo "</div></table>";
echo '<div class="miniPush"></div>';

$connect = null;

?>