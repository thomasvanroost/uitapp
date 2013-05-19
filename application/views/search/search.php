<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php $pagetitle ?></title>
	<link rel="stylesheet" href="assets/css/gumby.css" />
</head>
<body>
<div class="row">
<div class="ten columns"
	<form action="zoek" method="get">
	<div class="append field">
	 	 			<form action="zoek" method="get">
					<input name="q"class="xwide text input" type="text" placeholder="Activiteit, plaats, dag,..." />
					<div class="medium info btn"><a href="zoek">Zoek</a></div>
					</div>
	</form>
	
	<?php
	if (isset($events)){
	foreach($events as $e){
		echo "<li><a href='event?id=" . $e->cdbid . "'>" . $e->title ."</a> </li>";
	}
	}
	?>
	
	</div>
	</div>
</body>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>