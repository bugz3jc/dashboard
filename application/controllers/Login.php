<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ( $this->session->userdata('logged_in'))
        { 
            redirect(base_url());
        }
    }

    public function index(){
        
        $data["title"] = "Login";
        $this->load->view('layout/login', $data);
    }

    function login_validation(){
        if($this->input->post('username') == null){
            redirect(base_url() . 'login/');
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');   
        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('user_model');
            $result = $this->user_model->login($username,$password);
            if($result === true){
                $this->session->set_userdata('logged_in', true);
                $userdata = $this->user_model->getUser($username);
                $this->session->set_userdata('user',$userdata);
                redirect(base_url());
            }else{
                $this->session->set_flashdata('error',$result['error']);
                redirect(base_url() . 'login/');
            }
        }else{
            redirect(base_url());
        }

    }

    private function bouncer(){
        if($this->session->userdata('id') != ''){
            redirect(base_url());
        }else{
            redirect(base_url() . 'login/');
        }
    }

}