<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    function insert_into_db() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = array(
            'name' => $username,
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('users', $data);
        $query = $this->db->query("select * from users where email='$email' and password='$password'"); 
        //setcookie('user_id','$query');
        //setcookie('user_name',$username);
            /*$sql = $this->db->set($data)->get_compiled_insert('users');
            echo $sql;
            $r=$this->db->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
            return $r; */
            foreach ($query->result_array()as $row) {
                $data=array('name' => $row['name'],
                            'id'=>$row['id']
                 );
                # code...
            }
            return $data;
    }
    
    function check_into_db() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email==NULL || $password==NULL)
            return 0;

        $query = $this->db->query("select * from users where email='$email' and password='$password'");

        if($query->result_array()==NULL)
            return 0;
        else
        {
            foreach ($query->result_array() as $row){
            $data=array('name'=>$row['name'] ,
                        'id'=>$row['id']
                       ); 
            }
            return $data;
        }
        //setcookie('user_id',$data['id']);
        //setcookie('user_name',$data['name']);
    }

    function insert_status(){
        $status=$_POST['status'];
        $time=0;//mdate('%Y-%m-%d %H:%i:%s', now());
        $id=$_COOKIE['user_id'];

        $data=array(
            'user_id' => $id,
            'date'=>$time,
            'status'=>$status
        );

        $this->db->insert('statuses',$data);
    }


    
    function update_info(){
        $college = $_POST['college'];
        $mobile_no = $_POST['mobile_no'];
        $id = $_COOKIE['user_id'];
        $query=$this->db->query("UPDATE users SET Phone_Number = '$mobile_no', College= '$college' WHERE Id = $id;");
    }
    function fetch_status(){

        $query=$this->db->query("SELECT * FROM statuses ORDER BY id DESC");

        $row= $query->result_array();
        

        return $row;
    }
}

