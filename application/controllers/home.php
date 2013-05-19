<?php
class Home extends CI_Controller {

	public function index(){
		$viewdata=0;
		$this->load->view("home.php", $viewdata);
	}
}

?>