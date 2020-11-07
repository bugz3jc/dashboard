<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Auth {
    
    function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }
    function index(){
        $data['title'] = 'Products';
        $data['active'] = 'products';
        $data['modal'] = $this->load->view('products/add_modal',array(),true);
        $data['page_actions'] = array(
            
            array( 
                'link' => '#',
                'label' => 'Create Product',
                'class' => 'btn btn-primary',
                'attr' => 'data-toggle="modal" data-target="#create-product-modal"'
            ),
        );
        $data['product_list'] =  $this->product_model->product_list();
        $this->render('products/home', $data);
    }

    function view($id=null){
        if(empty($id)){
            redirect(base_url() . 'products');

        }
        $data = $this->product_model->get_product($id);
        if(empty($data)){
            redirect(base_url() . 'products');
        }
        $data['product_details'] = $data;
        $data['title'] = $data['name'] . ' - View';
        $data['active'] = 'products';
        $data['page_buttons'] = array(
            '<a role="button" class="btn btn-outline-secondary" href="' . base_url() . 'products">Back</a>',
            '<a href="' . base_url() . 'products/edit/' . $data['product_id'] . '" role="button" type="button" class="btn btn-primary" id="save-product">Edit</a>'
            
        );
        $this->render('products/view', $data);
    }

    function edit($id=null){
        if(empty($id)){
            redirect(base_url() . 'products');

        }
        $details = $this->product_model->get_product($id);
        if(empty($details)){
            redirect(base_url() . 'products');
        }
        $data['product_details'] = $details;
        $data['title'] = $details['name'] . ' - Edit';
        $data['active'] = 'products';
        $data['page_buttons'] = array(
            '<a role="button" class="btn btn-outline-secondary" href="'. base_url() .'products">Cancel</a>',
            '<button type="button" class="btn btn-primary" id="save-product">Save</button>'
            
        );
        $this->render('products/edit', $data);
    }

    function update(){
        $form = $this->input->post();
        
        if(empty($form)){
            redirect(base_url() . 'products');
        }

        $update = $this->product_model->update($form);
        if($update == false){
            $this->session->set_flashdata('danger', "An error occured, please try again later");
        }else{
            $this->session->set_flashdata('success',"<strong>" . $form['name'] . " </strong> has been successfully updated.");
        }

        redirect(base_url() . 'products/view/' . $form['product_id']);
    }

    function create(){
        $form = $this->input->post();
        if(empty($form)){
            redirect(base_url() . 'products');
        }

        $create = $this->product_model->create($form);

        if(empty($create)){
            $this->session->set_flashdata('danger', "An error occured, please try again later");
            
            redirect(base_url() . 'products/');
        }else{
            redirect(base_url() . 'products/edit/' . $create);
        }
    }

    

    
}