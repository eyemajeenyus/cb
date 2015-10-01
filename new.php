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
	    /* prevent horizontal scrollbar */
	    overflow-x: hidden;
	  }
	  /* IE 6 doesn't support max-height
	   * we use height instead, but this forces the menu to always be this tall
	   */
	  * html .ui-autocomplete {
	    height: 100px;
	  }
	  </style>
	<title>SteelHouse Creative Brief</title>
</head>
<body id="target">
	<a href="#" class="scrollup">^</a>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('input[type!="checkbox"][type="text"][type!="textarea"], select, textarea').val('');
		         blur();
		         $('input:checkbox').removeAttr('checked');
		});
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
		<form name="brief" id="form" method="post">
		<div id="overview">
			<h1 class="heading">OVERVIEW</h1>
			<div class="container">
				<div class="titles">
					<h3 class="title">ADVERTISER ID</h3>
				</div>
				<div class="textbox">
					<input name="advertiser_id" id="advertiser_id" type="text" placeholder="ex. 0000" required />
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">ADVERTISER</h3>
				</div>
				<div class="textbox">
					<input name="advertiser" id="advertiser" type="text" placeholder="ex. Fashion House" required autofocus/>
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">CAMPAIGN TITLE</h3>
				</div>
				<div class="textbox">
					<input name="campaign" id="campaign" type="text" placeholder="ex. Cart Abandonment Campaign, Member RT Campaign, Men’s Fashion RT, etc." required />
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">ESTIMATED LIVE DATE</h3>
				</div>
				<div class="textbox">
					<div id="date">
						<input name="live" type="text" id="datepicker" placeholder="xx/xx/xxxx" required />
							<script>
								$( "#datepicker" ).datepicker();
							</script>
					</div>
				</div>
			</div>
		</div>
		<div class="miniPush"></div>
		<hr>
		<div id="contained">
		<div id="creative-specs">
			<h1 class="heading">CREATIVE SPECS</h1>
			<div id="specshide">
				<div class="container">
					<div class="titles">
						<h3 class="title">ASSETS</h3>
					</div>
					<div class="textbox">
						<input id="assets" name="assets" type="text" class="creative-specs" placeholder="ex. Logo, brand guidelines, fonts, working files, video, past creative files, etc."/>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">TOTAL BANNERS</h3>
					</div>
					<div class="textbox">
						<div id="banner">
							<input id="banners" name="banners" type="text" maxlength="3" class="creative-specs" placeholder="3"/>
						</div>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="containerLarge">
					<div class="titles">
						<h3 class="title">LOOK & FEEL</h3>
					</div>
					<div class="textbox">
						<textarea id="lookfeel" name="lookfeel" class="message" placeholder="ex. 'Use website for look & feel', 'Refer to attached banners for look & feel', 'Use style guide for look & feel', etc."></textarea>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="containerLarge">
					<div class="titles">
						<h3 class="title">MESSAGING</h3>
					</div>
					<div class="textbox">
						<div class="large">
							<textarea id="messaging" name="messaging" class="message" placeholder="ex. Specific promotion verbiage, coupon codes, exact copy for banner, etc."></textarea>
						</div>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">CALL TO ACTION</h3>
					</div>
					<div class="textbox">
						<input id="CTA" type="text" name="CTA" class="creative-specs" placeholder="ex. 'Shop Now', 'Go to Cart!', etc."/>
					</div>
				</div>
			</div>
			<div id="fbxhide">
				<div class="container">
					<div class="titles">
						<h3 class="title">HEADLINE</h3>
					</div>
					<div class="textbox">
						<input id="headline" type="text" placeholder="25 Characters Or Fewer"/>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">COPY</h3>
					</div>
					<div class="textbox">
						<input id="texts" type="text" placeholder="90 Characters Or Fewer"/>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="titles">
					<input id="imageProvided" type="checkbox" name="imageProvided"/>
					<label for="imageProvided">IMAGE PROVIDED?</label>
				</div>
			</div>
		</div>
		<div class="miniPush"></div>
		<div id="featurehide">
		<hr>
		<div id="features">
				<h1 class="heading">FEATURES</h1>
				<input id="carousel" type="checkbox" value=""/><label>CAROUSEL</label>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">(CHECK ALL THAT APPLY)</h3>
					</div>
					<div class="textbox">
						<div id="checkboxes">
							<div class="box">
								<input id="sku" type="checkbox" name="sku"/>
								<label for="sku">SKU</label>
							</div>
							<div class="box">
								<input id="count" type="checkbox" name="count"/>
								<label for="count">INVENTORY COUNT</label>
							</div>
							<div class="box">
								<input id="price" type="checkbox" name="price"/>
								<label for="price">PRICE</label>
							</div>
							<div class="box">
								<input id="p_name" type="checkbox" name="product"/>
								<label for="p_name">PRODUCT NAME</label>
							</div>
						</div>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">VIDEO LOCATION</h3>
					</div>
					<div class="textbox">
						<input id="video" name="video" type="text" value="" placeholder="youtube.com/..."/>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<input id="timer" name="timer" type="checkbox" value=""/><label>COUNTDOWN TIMER</label>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">DESTINATION URL</h3>
					</div>
					<div class="textbox">
						<input id="destination" name="destination" type="text" placeholder="ex. http://fashionshouseclient.com"/>
					</div>
				</div>
			</div>
		</div>
		<div id="mobilehide">
			<hr>
				<h1 class="heading">FEATURES</h1>
				<div class="container">
					<div class="titles">
						<input id="productImages" type="checkbox" name="productImages"/><label>PRODUCT IMAGES?</label>
					</div>
				</div>
			</div>
		<div class="miniPush"></div>
		<div id="ohidden">
		<hr>
		<div id="objectives">
			<h1 class="heading">CAMPAIGN OBJECTIVES</h1>
			<div class="large">
				<textarea id="objective" name="objectives" class="message" placeholder="ex. 'To promote men’s clearance sale, to drive conversions by showing most popular products on the site', etc."></textarea>
			</div>
		<div class="miniPush"></div>
		</div>
		<hr>
		<div id="segments">
			<h1 class="heading">SEGMENTS</h1>
			<div class="large">
				<textarea id="segment" name="segments" class="message" placeholder="ex. Men’s Apparel Shoppers, All Users with Two Plus Page Views, etc."></textarea>
			</div>
		</div>
		<div class="miniPush"></div>
		</div>
		<div id="send">
			<input id="add" type="submit" class="button" name="submit" value="ADD BRIEF" formaction="add.php" />
			<input id="sending" type="submit" class="button" name="send" value="SEND TO ADVERTISER PREVIEW" formaction="send.php" />
		</div>
		<div class="miniPush"></div>
	</div>
	</form>
	</div>
	<script>
		$(document).ready(function(){
			$("#DesktopShow").click(function(){
		    	$("#mobilehide,#fbxhide").hide('fast');
		        $("#featurehide,#ohidden,#specshide").show('fast');
		    });
		    $("#MobileShow").click(function(){
		        $("#ohidden,#mobilehide,#specshide").show('fast');
		        $("#featurehide,#hidden,#fbxhide").hide('fast');
		    });
		    $("#FBXShow").click(function(){
		        $("#featurehide,#ohidden,#mobilehide,#specshide").hide('fast');
		        $("#fbxhide").show('fast');
		    });
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        }
		    });
		    $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 600);
		        return false;
		    });
		});
	</script>
</body>
</html>