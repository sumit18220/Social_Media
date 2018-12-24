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
            'Username' => $username,
            'Email' => $email,
            'Password' => $password
        );

        /*$sql = $this->db->set($data)->get_compiled_insert('users');
        echo $sql;
        $r=$this->db->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
        return $r; */
        $this->db->insert('users', $data);
        return $username;
    }

    function check_into_db() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $this->db->query("select Username from users where Email='$email' and Password='$password'");

        foreach ($query->result() as $row){
            echo $row->Username;
        }
    }

}

