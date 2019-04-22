<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    
    public function registration_page(){
        $this->load->view("registration_page");
    }
    
    public function register_submit(){
        $this->load->model('user');
        $arr=$this->user->insert_into_db();

        if($arr == NULL){
            $this->load->helper('url');
            redirect('registration');
            //echo "Incorrect credential";
            return;

        }

        setcookie('user_name',$arr['name'], time()+60*60*24*30, '/');
        setcookie('user_id',$arr['id'], time()+60*60*24*30, '/');

        $this->load->helper('url');
        redirect('/homepage');
        //$this->load->view("homepage");
        //redirect('/social_media/index.php/home/homepage');
    }
    

    //all testing funtion here:-
    public function test(){
        $this->load->view("register");
    }
    public function test2(){
        $this->load->view("registerboot");
    }
    public function test3(){
        $this->load->view("registrationpage");
    }
    public function test4(){
        $this->load->view("login2");
    }

    public function test5(){
        $this->load->view("homepage2");
    }

    public function test6(){
        $this->load->view("dashboard2");
    }
}
