<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
	    public function dash_board(){
	    	$this->load->model('status');
	    	$arr_statuses = $this->status->fetch_status_dash();
	    	
	        $this->load->view("dash_board", array('statuses' => $arr_statuses));
	    }

    	public function dashboard_submit(){
	        $this->load->model('status');
	        $this->status->update_info();
	       // $this->load->view("dash_board");

	    	$this->load->helper('url');
       		 redirect('/dashboard');
    	}
	}
?>