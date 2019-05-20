<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    function insert_into_db() {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($name == NULL || $email == NULL || $password == NULL){
            //echo "Incorrect Credential";
            return NULL;
        }

        $data = array(
            'name' => $name,
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
            $data=array(
                'name' => $row['name'],
                'id'=>$row['id']
            );
            # code...
        }

        return $data;
    }
    
    function check_into_db() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email==NULL || $password==NULL){
            return NULL;
        }

        $query = $this->db->query("select * from users where email='$email' and password='$password'");

        if($query->result_array()==NULL) {
            return NULL;
        }
        else
        {
            foreach ($query->result_array() as $row){
                $data = array(
                    'name'=>$row['name'] ,
                    'id'=>$row['id']
                ); 
            }
            return $data;
        }
        //setcookie('user_id',$data['id']);
        //setcookie('user_name',$data['name']);
    }

    
    function fetch_status(){

        $query=$this->db->query("SELECT * FROM statuses ORDER BY id DESC");

        $row= $query->result_array();
        

        return $row;
    }

    function fetch_user_info(){
        $id = $_COOKIE['user_id'];

        $query = $this->db->query("SELECT * FROM users where id = $id");

        

        return $query->result_array();
    }
}

