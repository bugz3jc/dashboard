<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    protected $pages;
function __construct()
{

    parent::__construct();
    if ( !$this->session->userdata('logged_in'))
    { 
        redirect(base_url() . 'login/');
    }else{
        
        
         
    }

}

protected function render($content,$data=null){
        $data['user'] = $this->session->userdata('user');
        $data['yield'] = $this->load->view($content,$data,true);
        $this->load->view('layout/layout',$data);
        return null;
        
    }
}