<?php
class Home extends CI_Controller {

	public function index(){
		$viewdata['pagetitle'] = "Uit | Home";
		$this->load->model("Search_model");
		
		$viewdata['headings'] =	$this->Search_model->get_headings("Mechelen"); //mechelen hardcoded. Moet variable worden location based..
		$viewdata['events'] =	$this->Search_model->get_activities_by("Mechelen", "Film" );
		//var_dump($viewdata);
		$this->load->view("home.php", $viewdata);
		
	}
}

?>