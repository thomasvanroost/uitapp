<?php

//TODO: define key

class Search_model extends CI_Model {



    function __construct()
    {
        parent::__construct();
    }
    
    // met deze functie kan je zoeken om alle woorden.
    // DOTO twee losse woorden combineren.
    
    function get_activity($fulltext)
    {	
    	$fulltext = str_replace(' ', '%', $fulltext); // spaces vervangen door "%"
	 	$url = "http://build.uitdatabank.be/api/events/search?key=AEBA59E1-F80E-4EE2-AE7E-CEDD6A589CA9&q=$fulltext&format=json";
	 	echo $url;
	 	$events = json_decode(file_get_contents($url));
	 	
	    return $events;
    }
    
    
    // op basis van locatie en type activiteit activiteiten teruggeven. Vandaag!!!!
    // TODO headings aan de hand van locatie en datetype.
    
    function get_headings($location){
	    $url = "http://build.uitdatabank.be/api/events/report?key=AEBA59E1-F80E-4EE2-AE7E-CEDD6A589CA9&city=$location&format=json&datetype=today";
	    $report_result = json_decode(file_get_contents($url));
	    $available_headings = array('name'=>array(), 'id'=>array() );
	    // uitfilderen van de headings die ik wil laten zien. En in een array stoppen. Zowel naam als id wordt opgeslagen.
	    foreach ($report_result->report->headings->item as $h){
	    	array_push($available_headings['name'], $h->name);
	    	array_push($available_headings['id'], $h->id); 
	    }
	   	    return $available_headings;	
    }
    
    function get_activities_by($location, $heading) 
    // aan de hand van een locatie parameter en een aantal types activiteiten resultaat teruggeven.
    {
		$url = "http://build.uitdatabank.be/api/events/search?key=AEBA59E1-F80E-4EE2-AE7E-CEDD6A589CA9&heading=$heading&city=$location&format=json&hasimage=true";
		
		$search_result = json_decode(file_get_contents($url));
		
		$events = $search_result;	
		return $events;
		    
    }
       
}

?>