<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="js/sortable.js"></script>
<img id="top_img" src="img/top.png" alt="" />
    <div class="miniPush"></div>
        <div id="wrapper">
            <a href="index.php" ><img id="sh_logo" src="img/sh_logo.png" alt="" /></a>
<?php
include 'dbconnect.php';

echo "<div id='data' ><table class='sortable' style='color:#000;text-align:center;margin:0 auto;padding:0;width:auto;'><caption colspan='15' style='font-size: 32px;color:#999;margin: 0 0 30px 0;text-align:center;'>MOST RECENT</caption>";
echo "<tr width='auto' style='color:#000;text-align:center;'><th style='text-align:center;'>Advertiser ID</th><th>Advertiser</th><th>Campaign</th><th>Live Date</th><th>Status</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        $row = $this->getArrayCopy();
        return "<td style='width:150px;height:auto;border:1px solid #000;color:#000;word-wrap:break-word;'>" . parent::current(). "<br/><br/><a style=\"text-decoration: none; color:#C00;\" href=\"edit.php?id=" . $row['advertiser_id'] . "\">Edit</a> OR <a style=\"text-decoration: none; color:#C00;\" href=\"preview.php?id=" . $row['advertiser_id'] . "\">Preview</a></td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}
$query = $connect->query('SELECT advertiser_id, advertiser, campaign, live, status_id FROM desktop LIMIT 5');
$query->execute();
$result = $query->setFetchMode(PDO::FETCH_ASSOC); 
foreach(new TableRows(new RecursiveArrayIterator($query->fetchAll())) as $k=>$v) { 
    echo $v;
}
echo "</div></table>";
echo '<div class="miniPush"></div>';
echo '<a class="hover" href="index.php">Search For Brief</a><br/>';
echo '<a class="hover" href="new.php">+ Add Another +</a><br/>';
echo '<div class="miniPush"></div>';
?>


</div>