<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Time Display</title>
	<link rel="stylesheet" type="text/css" href="assets/css/time_display_style.css">
</head>
<body>
	<h3>The current time and date</h3>
	<div class="time_container">
		<p><?= $datetime['date'];?></p>
		<p><?= $datetime['time'];?></p>
	</div>
</body>
</html>