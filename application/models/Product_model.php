<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    function product_list(){
        $this->db->reset_query();

        $this->db->select('product_id,image, name, available_quantity, price, status');
        $query = $this->db->get('product');

        return $query->result_array();

    }

    function product_stats(){
        $stats = array();
        $this->db->reset_query();
        $all = $this->db->get('product');
        $stats['all'] = $all->num_rows();

        $this->db->reset_query();
        $this->db->where('status', 1);
        $active = $this->db->get('product');
        $stats['active'] = $active->num_rows();

        $this->db->reset_query();
        $this->db->where('status !=', 1);
        $inactive = $this->db->get('product');
        $stats['inactive'] = $inactive->num_rows();

        return $stats;
    }

    function get_product($product_id){
        $this->db->reset_query();

        $this->db->where('product_id',$product_id);
        $result = $this->db->get('product');

        return $result->row_array();
    }

    function update($data){
        $this->db->reset_query();
        $id = $data['product_id'];
        unset($data['product_id']);
        if(empty($data['status'])){
            $data['status'] = 0;
        }
        $this->db->where('product_id', $id);
        return $this->db->update('product',$data);
        

    }

    function create($form){
        $this->db->reset_query();
        $form['image'] = image_path() . 'default.png';
        $this->db->insert('product', $form);
        $inserted_id = $this->db->insert_id();

        return $inserted_id; 
    }

}
