		<?php
			include 'head.php';
			include 'dbconnect.php';
			// $advertiser_id = $_POST['advertiser_id'];
			$stmt = $connect->query("SELECT advertiser_id, status_id, advertiser, campaign, live, assets, banners, lookfeel, messaging, cta, video, timer, destination, objectives, segments FROM desktop WHERE advertiser_id = '" . $_GET['id'] . "'");
			// $stmt = $connect->query("SELECT headline, copy FROM fbx");
			// $stmt = $connect->prepare("UPDATE desktop SET advertiser_id = '$advertiser_id', status_id = '$status_id', advertiser = '$advertiser', campaign = '$campaign', live = '$live'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$row = $stmt->fetch();
				echo '
		<form name="brief" id="form" method="post">
		<div id="overview">
			<h1 class="heading">OVERVIEW</h1>
			<div class="container">
				<div class="titles">
					<h3 class="title">Advertiser ID</h3>
				</div>
				<div class="textbox">
					<input name="advertiser_id" id="advertiser_id" type="text" value="' . $row['advertiser_id'] . '" required />
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">BRIEF STATUS</h3>
				</div>
				<div class="textbox">
						<select id="status" name="status_id" form_id="brief">
							<option style="text-align:center;margin:0 auto;" value="approved" ' . ($row['status_id'] == 'approved' ? 'selected="selected"' : '') . '>APPROVED</option>
							<option style="text-align:center;margin:0 auto;" value="disapproved" ' . ($row['status_id'] == 'disapproved' ? 'selected="selected"' : '') . '>NOT APPROVED</option>
							<option style="text-align:center;margin:0 auto;" value="pending" ' . ($row['status_id'] == 'pending' ? 'selected="selected"' : '') . '>PENDING</option>
						</select>
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">ADVERTISER</h3>
				</div>
				<div class="textbox">
					<input name="advertiser" id="advertiser" type="text" value="' . $row['advertiser'] . '" required autofocus/>
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">CAMPAIGN TITLE</h3>
				</div>
				<div class="textbox">
					<input name="campaign" id="campaign" type="text" value="' . $row['campaign'] . '" required />
				</div>
			</div>
			<div class="miniPush"></div>
			<div class="container">
				<div class="titles">
					<h3 class="title">ESTIMATED LIVE DATE</h3>
				</div>
				<div class="textbox">
					<div id="date">
						<input name="live" type="text" id="datepicker" value="' . $row['live'] . '" required />
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
						<input id="assets" name="assets" type="text" class="creative-specs" value="' . $row['assets'] . '"/>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">TOTAL BANNERS</h3>
					</div>
					<div class="textbox">
						<div id="banner">
							<input id="banners" name="banners" type="text" maxlength="3" class="creative-specs" value="' . $row['banners'] . '"/>
						</div>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="containerLarge">
					<div class="titles">
						<h3 class="title">LOOK & FEEL</h3>
					</div>
					<div class="textbox">
						<textarea id="lookfeel" name="lookfeel" class="message" >' . $row['lookfeel'] . '</textarea>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="containerLarge">
					<div class="titles">
						<h3 class="title">MESSAGING</h3>
					</div>
					<div class="textbox">
						<div class="large">
							<textarea id="messaging" name="messaging" class="message" >' . $row['messaging'] . '</textarea>
						</div>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">CALL TO ACTION</h3>
					</div>
					<div class="textbox">
						<input id="CTA" type="text" name="CTA" class="creative-specs" value="' . $row['cta'] . '"/>
					</div>
				</div>
			</div>
			<div id="fbxhide">
				<div class="container">
					<div class="titles">
						<h3 class="title">HEADLINE</h3>
					</div>
					<div class="textbox">
						<input id="headline" type="text" value="' . $row['headline'] . '"/>
					</div>
				</div>
				<div class="miniPush"></div>
				<div class="container">
					<div class="titles">
						<h3 class="title">COPY</h3>
					</div>
					<div class="textbox">
						<input id="texts" type="text" value="' . $row['copy'] . '"/>
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
				<div class="container">
					<div class="titles">
						<h3 class="title">VIDEO LOCATION</h3>
					</div>
					<div class="textbox">
						<input id="video" name="video" type="text" value="' . $row['video'] . '" placeholder="youtube.com/..."/>
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
						<input id="destination" name="destination" type="text" value="' . $row['destination'] . '"/>
					</div>
				</div>
			</div>
		</div>
		<div id="mobilehide">
			<hr>
				<h1 class="heading">FEATURES</h1>
				<div class="container">
					<div class="titles">
						<input id="productImages" type="checkbox" value=""/><label>PRODUCT IMAGES?</label>
					</div>
				</div>
			</div>
		<div class="miniPush"></div>
		<div id="ohidden">
		<hr>
		<div id="objectives">
			<h1 class="heading">CAMPAIGN OBJECTIVES</h1>
			<div class="large">
				<textarea id="objective" name="objectives" class="message" >' . $row['objectives'] . '</textarea>
			</div>
		<div class="miniPush"></div>
		</div>
		<hr>
		<div id="segments">
			<h1 class="heading">SEGMENTS</h1>
			<div class="large">
				<textarea id="segment" name="segments" class="message" >' . $row['segments'] . '</textarea>
			</div>
		</div>
		</div>
		<div id="send">
			<input id="update" type="submit" class="button" name="submit" value="UPDATE BRIEF" formaction="update.php" />
			<input id="send" type="submit" class="button" name="submit" value="PREVIEW SEND BRIEF" formaction="preview.php?id=' . $row['advertiser_id'] . '" />
		</div>
		<div class="miniPush"></div>
	</div>
	</form>';
$connect = null;

include 'foot.php';

?>