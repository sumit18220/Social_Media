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

        //$sql = $this->db->set($data)->get_compiled_insert('users');
        //echo $sql;
        $this->db->insert('users', $data);
        return $username;
        /* $r=$this->db->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
          return $r; */
          
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

    function check_into_db() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        /*$data = array(
            'Email' => $email,
            'Password' => $password
        );*/
        $query = $this->db->query("select * from users where email='$email' and password='$password'");

        //echo $query;

        foreach ($query->result_array() as $row){
            //return $row->Username;
            
            $data=array('name'=>$row['name'] ,
                        'id'=>$row['id']
                         ); 
                        // echo $row['Username'];
                         //echo $row['Id'];

            setcookie('user_id',$data['id']);
            setcookie('user_name',$data['name']);

            return $data;
        }


    }

}

