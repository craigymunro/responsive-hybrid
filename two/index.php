<html>
<head>
	<link rel="stylesheet/less" type="text/css" href="base.less" />
	<script>less = { env: "development" }</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>

	<?
	require_once("../DeviceDetector.php");
	$detector = new DeviceDetector();
	$device = $detector->detect();
	
	$words = [
		"mobile" => "beautiful",
		"tablet" => "wonderful",
		"desktop" => "fantastic",
	];
	?>

	<h1>
		2. This is a <?=$device?> website
	</h1>
	
	<p>(I only show the secondary content if you are looking at this page on a tablet or desktop.)</p>

	<div class="headlines">	
		<ul>
			<? for($i = 1; $i <= 10; $i++) { ?>
				<li>
					<h2 class="title">Headline #<?=$i?></h2>
					<p class="subtitle">This is the strapline for headline number <?=$i?>.</p>
				</li>
			<? } ?>
		</ul>
	</div>
	
	<? if($device != "mobile") { ?>	
		<div class="sidebar">
			<ul>
				<? for($i = 1; $i <= 10; $i++) { ?>
					<li>
						<h3 class="title">Secondary item #<?=$i?></h3>
					</li>
				<? } ?>			
			</ul>
		</div>
	<? } ?>

</body>
</html>