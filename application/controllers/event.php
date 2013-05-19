<?php
class Event extends CI_Controller {

	public function index(){
		
			
		$id = $_GET['id'];


		$url = "http://build.uitdatabank.be/api/event/$id?key=AEBA59E1-F80E-4EE2-AE7E-CEDD6A589CA9&format=json";
		$event = json_decode(file_get_contents($url));
		$viewdata['pagetitle']="test";
		$viewdata['event']=$event;
		$this->load->view("search/event_detail.php", $viewdata);
	}
}

?>