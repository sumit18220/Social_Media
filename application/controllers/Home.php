<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function homepage(){
        $this->load->model('user');
        $arr=$this->user->fetch_status();
                
        //print_r($arr);
        $this->load->view("homepage",array('statuses' => $arr ));
    }

    public function status_submit(){
        $this->load->model('user');
        $this->user->insert_status();

        echo "Status Submitted Successfully";
        echo '<a href="/social_media/index.php/home/homepage">Home</a>';
    }
    
    public function registration(){
        setcookie("user_name", "", time() - 0);
        setcookie("user_id","",time() - 0);
        $this->load->view("registration");
    }
    public function register_submit(){
        $this->load->model('user');
        $arr=$this->user->insert_into_db();

        setcookie('user_name',$arr['name']);
        setcookie('user_id',$arr['id']);

        $this->load->helper('url');
        redirect('/home/hompage');
        //$this->load->view("homepage");
        //redirect('/social_media/index.php/home/homepage');
    }
    
    public function login(){
        //setcookie("user_name", "", time() - 0);
        //setcookie("user_id","",time() - 0);
        $this->load->view("login");
    }
    public function login_submit(){
        $this->load->model('user');
        $arr=$this->user->check_into_db();

        if($arr==NULL)
        {
            echo "Incorrect credentials";
            echo "<a href='/social_media/index.php/home/login'>Login</a>";
            return;
        }

        setcookie('user_name',$arr['name']);
        setcookie('user_id',$arr['id']);

        //$statuses=$this->user->fetch_status();

        
        $this->load->helper('url');
        redirect('/home/homepage');
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
        //$this->load->view("homepage");

        $this->load->helper('url');
        redirect('/home/homepage');
        
    }

    public function test(){
        $this->load->view("register");
    }
    public function test2(){
        $this->load->view("registerboot");
    }
    public function test3(){
        $this->load->view("registrationpage");
    }
}
