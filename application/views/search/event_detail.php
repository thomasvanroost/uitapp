
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1> <?php echo $event->event->eventdetails->eventdetail->title ?> </h1>
	<p>  <?php echo $event->event->eventdetails->eventdetail->shortdescription ?> </p>
	
	<?php 

	$images = $event->event->eventdetails->eventdetail->media->file;
	
	foreach ($images as $i){
		if ($i->mediatype == "photo"){
			echo  "<img src='" . $i->hlink ."' />";
		}
	}
	
	?>
</body>
</html>