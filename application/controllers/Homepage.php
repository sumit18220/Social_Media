<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Homepage extends CI_Controller{

		public function home_page(){
	        $this->load->model('status');
	        $arr=$this->status->fetch_status();
	                
	        //print_r($arr);
	        $this->load->view("home_page",array('statuses' => $arr ));
    	}

    	public function status_submit(){
	        $this->load->model('status');
	        $this->status->insert_status();

	        echo "Status Submitted Successfully";
	        echo '<a href="/homepage">Home</a>';
    	}

	}
?>