<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="js/sortable.js"></script>
<img id="top_img" src="img/top.png" alt="" />
    <div class="miniPush"></div>
        <div id="wrapper">
            <a href="index.php" ><img id="sh_logo" src="img/sh_logo.png" alt="" /></a>
                <div id="data" >
    <?php

    try {
        $connect = new PDO('mysql:host=localhost;dbname=CreativeDB', 'root', 'root');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        die('nope!');
    } 

    $advertiser_id = $_POST['advertiser_id'];
    $status_id = $_POST['status_id'];
    $advertiser = $_POST['advertiser'];
    $campaign = $_POST['campaign'];
    $live = $_POST['live'];
    $assets = $_POST['assets'];
    $banners = $_POST['banners'];
    $lookfeel = $_POST['lookfeel'];
    $messaging = $_POST['messaging'];
    $cta = $_POST['CTA'];
    $video = $_POST['video'];
    // $timer = $_POST['timer'];
    $destination = $_POST['destination'];
    $objectives = $_POST['objectives'];
    $segments = $_POST['segments'];

    $stmt = $connect->prepare("INSERT INTO desktop (advertiser_id, status_id, advertiser, campaign, live, assets, banners, lookfeel, messaging, cta, video, destination, objectives, segments)
                VALUES ('$advertiser_id', '$status_id', '$advertiser', '$campaign', '$live', '$assets', '$banners', '$lookfeel', '$messaging', '$cta', '$video', '$destination', '$objectives', '$segments')
                ON DUPLICATE KEY UPDATE status_id = '$status_id', advertiser = '$advertiser', campaign = '$campaign', live = '$live', assets = '$assets', banners = '$banners', lookfeel = '$lookfeel', messaging = '$messaging', cta = '$cta', video = '$video', destination = '$destination', objectives = '$objectives', segments = '$segments'");
    $stmt->execute();
    include 'view.php';
    echo '<div class="miniPush"></div>';
    echo $stmt->rowCount() . " fields on brief have been updated";
    echo '<div class="miniPush"></div>';
    echo '<a class="hover" href="index.php">Search For Brief</a><br/>';
    echo '<a class="hover" href="new.php">+ Add Another +</a><br/>';
    echo '<a class="hover" href="status.php">View Brief Status</a>';
    $connect = null;
    ?>
    </div>
</div>