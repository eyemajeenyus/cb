<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="js/sortable.js"></script>
<img id="top_img" src="img/top.png" alt="" />
    <div class="miniPush"></div>
        <div id="wrapper">
            <a href="index.php" ><img id="sh_logo" src="img/sh_logo.png" alt="" /></a>
<?php

try {
    $connect = new PDO('mysql:host=localhost;dbname=CreativeDB', 'root', 'root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
    die('nope!');
} 

$qry = $_POST['searchBox'];

if($qry == '') {
        echo "<p>There must be something you're looking for?</p><br/><br/>";
    } else {
        $search = 'SELECT advertiser_id, advertiser, campaign, live, status_id FROM desktop WHERE advertiser_id LIKE :search OR advertiser LIKE :search OR campaign LIKE :search OR status_id LIKE :search LIMIT 20';
        $stmt = $connect->prepare($search);
        $qry = '%' . $qry . '%';
        $stmt->bindParam(':search', $qry);
        $stmt->execute();

        if($stmt->rowCount() > 0) { 
            echo "<div id='data' ><table class='sortable' style='color:#000;text-align:center;margin:0 auto;padding:0;width:auto;'><caption colspan='15' style='font-size: 32px;color:#999;margin: 0 0 30px 0;text-align:center;'>MOST RECENT</caption>";
            echo "<tr width='auto' style='color:#000;text-align:center;'><th style='text-align:center;'>Advertiser ID</th><th>Advertiser</th><th>Campaign</th><th>Live Date</th><th>Status</th></tr>";

            class TableRows extends RecursiveIteratorIterator { 
                function __construct($it) { 
                    parent::__construct($it, self::LEAVES_ONLY); 
                }

                function current() {
                    $row = $this->getArrayCopy();
                    return "<td style='width:150px;height:60px;border:1px solid #000;color:#000;text-align:center;'>" . parent::current(). "<br/><br/><a style=\"text-decoration: none; color:#C00;\" href=\"edit.php?id=" . $row['advertiser_id'] . "\">Edit</a> OR <a style=\"text-decoration: none; color:#C00;\" href=\"preview.php?id=" . $row['advertiser_id'] . "\">Preview</a></td>";
                }

                function beginChildren() { 
                    echo "<tr>"; 
                } 

                function endChildren() { 
                    echo "</tr>" . "\n";
                } 
            }
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll(PDO::FETCH_ASSOC))) as $k=>$v) { 
                echo $v;
            }
            echo "</div></table>";
            echo '<div class="miniPush"></div>';
            echo '<p ><a class="hover" href="index.php" >Not finding what you\'re looking for?</a></p>';
            echo '<a class="hover" href="new.php">+ Add Another +</a><br/>';
            echo '<a class="hover" href="status.php">View Brief Status</a></p>';
        } else {
            echo '<div class="miniPush"></div>';
            echo '<div style="text-align:center;font-size:40px;">There is nothing here for you. <a class="hover" href="index.php">Try again.</a></div>';
            echo '<div class="miniPush"></div>';
        }
    }
?>
</div>