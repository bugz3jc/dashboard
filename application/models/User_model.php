<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{


    function login($username,$password){
        $this->db->reset_query();

        $this->db->select('password');
        $this->db->where('username',$username);
        $this->db->where('is_active', 1);
        $query = $this->db->get('user');

        if($query->num_rows() > 0){
            $pwhash = $query->row_array();
            $validate = password_verify($password,$pwhash['password']);
            if($validate){
                return true;
            }else{
                return array('error' => "The password you've entered is incorrect.");
            }
        }else{
            return array('error' => "Username does not exist.");
        }
    }

    function getUser($username){
        $this->db->reset_query();

        $this->db->select('user_id,username,firstname,lastname,email,type');
        $this->db->where('username',$username);
        $query = $this->db->get('user');

        return $query->row_array(); 
    }
}