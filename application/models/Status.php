<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Status extends CI_Model{

		public function __construct() {
	        parent:: __construct();
	        $this->load->database();
    	}

    	function insert_status(){
	        $status=$_POST['status'];
	        $time=date("Y-m-d h:i:sa");//mdate('%Y-%m-%d %H:%i:%s', now());
	        $id=$_COOKIE['user_id'];

	        $data=array(
	            'user_id' => $id,
	            'date'=> $time,
	            'status'=> $status
	        );

	        $this->db->insert('statuses',$data);
    	}

    	function update_info(){

	        $college = $_POST['college_name'];
	        $mobile_no = $_POST['phone_number'];
	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $password = $_POST['password'];
	        $id = $_COOKIE['user_id'];


	        if( $mobile_no != NULL && $college != NULL){
	        	$query=$this->db->query("UPDATE users SET name = '$name', email = '$email', password = '$password', phone_number = '$mobile_no', college= '$college' WHERE Id = $id;");
	        }
	        else if ( $mobile_no == NULL) {
	        	$query=$this->db->query("UPDATE users SET name = '$name', email = '$email', password = '$password', college= '$college' WHERE Id = $id;");
	        }
	        else if ( $college == NULL) {
	        	$query=$this->db->query("UPDATE users SET name = '$name', email = '$email', password = '$password', phone_number = '$mobile_no' WHERE Id = $id;");
	        }
	        else{
	        	$query=$this->db->query("UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE Id = $id;");
	        }
	    }

    	function fetch_status(){

	        $query=$this->db->query("SELECT statuses.status, statuses.date, users.name FROM statuses INNER JOIN users ON statuses.user_id = users.id order by statuses.id desc");

	        $row= $query->result_array();
	        

	        return $row;
	    }

	    function fetch_status_dash(){
	    	$id = $_COOKIE['user_id'];

	    	$query = $this->db->query("SELECT statuses.status, statuses.date FROM statuses INNER JOIN users ON statuses.user_id = users.id WHERE users.id = '$id' order by statuses.id desc");

	    	$statuses = $query->result_array();
	    	return $statuses;	 
	    }


	}
?>