<?php
class Zoek extends CI_Controller {

	public function index(){
		if ( !empty($_GET['q'] )){

		$fulltext = $_GET['q'];
		$this->load->model('Search_model');
		$viewdata['events'] = $this->Search_model->get_activity($fulltext);

		}

		$viewdata['pagetitle']="test";
		$this->load->view("search/search.php", $viewdata);
	}
}

?>