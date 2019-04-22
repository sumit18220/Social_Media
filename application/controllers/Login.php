<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller{

		public function login_page(){
	        //setcookie("user_name", "", time() - 0);
	        //setcookie("user_id","",time() - 0);
        	$this->load->view("login_page");
    	}


    	public function login_submit(){
	        $this->load->model('user');
	        $arr=$this->user->check_into_db();

	        if($arr==NULL)
	        {
	            echo "Incorrect credentials";
	            echo "<a href='/social_media/index.php/login'>Login</a>";
	            return;
	        }

	        
	        setcookie('user_name',$arr['name'],time()+60*60*24*30, '/');
	        setcookie('user_id',$arr['id'],time()+60*60*24*30, '/');

	        //$statuses=$this->user->fetch_status();
	        $this->load->helper('url');
	        redirect('/homepage');
    	}
    

    	public function logout(){

	        setcookie("user_name", "", time() - 0, '/');
	        setcookie("user_id","",time() - 0, '/');
	        //$this->load->view("homepage");

	        $this->load->helper('url');
	        redirect('/homepage');
	        
    	}


	}
?>