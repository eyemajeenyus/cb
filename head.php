<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
	<title>SteelHouse Creative Brief</title>
</head>
<body id="target">
	<a href="#" class="scrollup">^</a>
	<script type="text/javascript">
		$(window).keydown(function(event){
			    if(event.keyCode == 13) {
			      event.preventDefault();
			      return false;
			    }
			  });
	</script>
	<img id="top_img" src="img/top.png" alt="" />
	<div class="miniPush"></div>
	<div id="wrapper">
		<a href="index.php" ><img id="sh_logo" src="img/sh_logo.png" alt="" /></a>
		<div class="miniPush"></div>
		<div id="choose">
			<h1 class="title" >CHOOSE YOUR CHANNEL</h1>
			<div id="buttons">
				<input id="DesktopShow" type="button" class="button" value="Desktop" />
				<input id="MobileShow" type="button" class="button" value="Mobile" />
				<input id="FBXShow" type="button" class="button" value="FBX" />
			</div>
		</div>
		<hr>