<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function homepage(){
        $this->load->view("homepage");
    }
    
    public function registration(){
        setcookie("user_name", "", time() - 0);
        setcookie("user_id","",time() - 0);
        $this->load->view("registration");
    }
    public function register_submit(){
        $this->load->model('user');
        $this->user->insert_into_db();
        $this->load->view("homepage");
    }
    
    public function login(){
        setcookie("user_name", "", time() - 0);
        setcookie("user_id","",time() - 0);
        $this->load->view("login");
    }
    public function login_submit(){
        $this->load->model('user');
        $this->user->check_into_db();
        $this->load->view("homepage");
    }

    public function status_submit(){
        $this->load->model('user');
        $this->user->insert_status();

        echo "Status Submitted Successfully";
    }
    
    public function dashboard(){
        $this->load->view("dashboard");
    }
    
    public function dashboard_submit(){
        $this->load->model('user');
        $this->user->update_info();
        $this->load->view("dashboard");
    }

    public function logout(){

        setcookie("user_name", "", time() - 0);
        setcookie("user_id","",time() - 0);
        $this->load->view("homepage");
        
    }

    
}
