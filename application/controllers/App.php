<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends Auth {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
     * 
	 */
    private $current_page;
    function __construct(){
        parent::__construct();    
    }
	public function index()
	{
		$this->load->model('product_model');
		$data['active'] = 'home';
		$data['title'] = "Home";
		
		$data['product_stats'] = $this->product_model->product_stats();
	
        $this->render('home/home',$data);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}