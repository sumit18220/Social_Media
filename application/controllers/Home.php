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
        setcookie("user_name", "", time() - 0);
        setcookie("user_id","",time() - 0);

        $this->load->view("login");
    }
    public function login_submit(){
        $this->load->model('user');
        $r=$this->user->check_into_db();

        //$data['name']=$r;

        //echo $r['Username'];

        $this->load->view("homepage");
        //echo $r;
    }

    public function status_submit(){

        $this->load->model('user');
        $this->user->insert_status();

        echo "Status Submitted Successfully";
    }
    
    public function dashboard(){
        $this->load->view("dashboard");
        
    }
    
    public function homepage(){

        $this->load->view("homepage");
    }

    public function logout(){

        setcookie("user_name", "", time() - 0);
        setcookie("user_id","",time() - 0);

        echo "Logout Successfully"."click here <a href='/Social_Media/index.php/home/login'>Login</a>";
    }

    
}

