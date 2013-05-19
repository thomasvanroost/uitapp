<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pagetitle; ?> </title>
	<link rel="stylesheet" type="text/css" href="assets/css/gumby.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
	<nav class="navbar" id="#nav1">
	
		<!--
		dit toon het menu wanneer je op kleinere schermgrootste kijkt.
		<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu" ></i></a> -->
		
		<div class="row">
		<div>
			<h1 class="four columns logo"> 
			<a  href="home"><img src="assets/images/uitLogo80x48.png" alt="UitApp"> </a>
			</h1>
			
		<ul class="">		
			<li><a href="home">Home</a></li>
			<li><a href="zoek">Zoeken</a> </li>
			<!-- <li><a href="#">Ontdekken</a></li> -->
			<li> 
			
			</li> 
		</ul>
		
		</div>
		</div>
	</nav>

	 <div class="row">
	
	 	<div class="ten columns">
	 	
	 	 <div class="append field">
	 	 			<form action="zoek" method="get">
					<input name="q"class="xwide text input" type="text" placeholder="Activiteit, plaats, dag,..." />
					<div class="medium info btn"><a href="zoek">Zoek</a></div>
					</div>
	 	
	 	<h1>Vandaag in Mechelen </h1>
	 	</div>
	 	
	 	<div class="ten columns">
	 	<p>Wat wil je doen? </p>
	 	</div>
	 	
	 
	 	
	 	<div class="seven columns">
	 	<?php 
	 	
	 	foreach ($headings['name'] as $h){
	 	echo "<div class='small default btn'><a href='#'> " . $h . " </a> </div> ";
	 	}
	 	
	 	?>
	 	
	 	
	 	</div>
	 	
	 	
    <div class="row">
	    
	    <section class="ten columns">
		   	
			   <?php
				   if (isset($events)){
					   foreach($events as $e){
		
						   echo "<article>
						   <img src='" . $e->thumbnail . "'>
						    <a href='event?id=" . $e->cdbid . "'>" . $e->title ."</a> <p> waar? </p> </artical>";
						   }
						 }
	?>
	     
	      
	  </section>
	    
    </div>
	 </div>
	
	
	
	
	
	
	
	<p id="demo"></p>
	
	
	
	<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.innerHTML="Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude; 
  }
</script>
	
	
	
	
	<!-- AUTO reload script livereload -->
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	
</body>
</html>