<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Creative Brief Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/sortable.js"></script>
	<script src="js/clientList.js"></script>
	<style>
	  .ui-autocomplete {
	    max-height: 100px;
	    overflow-y: auto;
	    overflow-x: hidden;
	  }
	  * html .ui-autocomplete {
	    height: 100px;
	  }
	  </style>
</head>
	<body id="target">
		<a href="#" class="scrollup">^</a>
	    <img id="top_img" src="img/top.png" alt="" />
		<div class="miniPush"></div>
		<div id="wrapper">
			<a href="index.php" ><img id="sh_logo" src="img/sh_logo.png" alt="" /></a>
			<h1 class="searchheading">SEARCH FOR BRIEF</h1>
	    	<div id="search">
	    		<form action="search.php" method="post">
			        <input id="searchBox" type="text" name="searchBox" placeholder="ABERCROMBIE, SUMMER 2016, 10349, etc... " required autofocus />
			        <div class="miniPush2"></div>
			        <input id="searchButton" type="submit" name="searchButton" value="GO!" />
		    	</form>
	   		</div>
	   		 <div class="miniPush"></div>
	   		 <div class="miniPush"></div>
	   		<div id="add">
	   			<h1 id="add" class="searchheading"><a href="new.php">+ ADD NEW BRIEF +</a></h1>
	   		</div>
	   		<div class="miniPush"></div>
			<?php
				include 'dbconnect.php';

				echo "<div id='data' ><table id='data' class='sortable' style='color:#000;'><caption colspan='15' style='font-size: 32px;color:#999;margin: 0 0 30px 0;'>MOST RECENT ADDITIONS</caption>";
				echo "<tr style='color:#000;'><th>Advertiser ID</th><th>Advertiser</th><th>Campaign</th><th>Live Date</th><th>Status</th></tr>";

				class TableRows extends RecursiveIteratorIterator { 
				    function __construct($it) { 
				        parent::__construct($it, self::LEAVES_ONLY); 
				    }

				    function current() {
				    	$row = $this->getArrayCopy();
				        return "<td style='width:150px;height:55px;border:1px solid #000;color:#000;word-wrap:break-word;'>" . parent::current(). "<br/><br/><a style=\"text-decoration: none; color:#C00;\" href=\"edit.php?id=" . $row['advertiser_id'] . "\">Edit</a> OR <a style=\"text-decoration: none; color:#C00;\" href=\"preview.php?id=" . $row['advertiser_id'] . "\">Preview</a></td>";
				    }

				    function beginChildren() { 
				        echo "<tr>"; 
				    } 

				    function endChildren() { 
				        echo "</tr>" . "\n";
				    } 
				}
				$query = $connect->query('SELECT advertiser_id, advertiser, campaign, live, status_id FROM desktop GROUP BY last_updated DESC LIMIT 5');
				$query->execute();
				$result = $query->setFetchMode(PDO::FETCH_ASSOC);
				foreach(new TableRows(new RecursiveArrayIterator($query->fetchAll())) as $k=>$v) { 
				    echo $v;
				}
				echo "</div></table>";
				?>
			<div class="miniPush"></div>
			<div class="miniPush"></div>
				<div id="send">
					<form>
						<input id="approved" type="submit" name="approved" value="APPROVED" formaction="approved.php" />
						<input id="disapproved" type="submit" name="disapproved" value="NOT APPROVED" formaction="disapproved.php" />
						<input id="sending" type="submit" class="button" name="send" value="PENDING" formaction="pending.php" />
					</form>
				</div>
			</div>
			<div class="miniPush"></div>
		</div>
	</body>
</html>