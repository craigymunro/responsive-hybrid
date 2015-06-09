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
	?>

	<h1>
		1. This is a <?=$device?> website
	</h1>
	
	<p>(Cool demo, bro.)</p>

</body>
</html>