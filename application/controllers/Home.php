<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function registration(){
        
        $this->load->view("registration");
    }
    
    public function register_submit(){
        $this->load->model('user');
        $r=$this->user->insert_into_db();
        //$data['x'] = $r;
        //$this->load->view("logout",$data);
        echo $r;
    }
    
    public function login(){
        $this->load->view("login");
    }
    public function login_submit(){
        $this->load->model('user');
        $r=$this->user->check_into_db();

        $data['name']=$r;

        $this->load->view("homepage",$data);
        //echo $r;
    }

    public function status_submit(){

        $this->load->model('user');
        $this->user->insert_status_into_db();

        echo "Status Submitted Successfully";
    }
    
    public function homepage(){

        $this->load->view("homepage");
    }
    
}

