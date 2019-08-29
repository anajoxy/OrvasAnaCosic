<?php
class filter_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_filter_city($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('northwind');
			return $query->result_array();
		}
		//$query = $this->db->get_where('orders', array('ship_city' => $slug ));
		$this->db->select('*');
        $this->db->from('orders');
        $this->db->like('ship_city',  $slug);


		$query =  $this->db->get()->result_array();
		//return($query->result_array());
		return $query;
	}

	public function get_filter_ship($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('northwind');
			return $query->result_array();
		}
		//$query = $this->db->get_where('orders', array('ship_name' => $slug ));
		$this->db->select('*');
        $this->db->from('orders');
        $this->db->like('ship_name',  $slug);
        

		$query =  $this->db->get()->result_array();
		//return($query->result_array());
		return $query;
	}

	public function get_filter_date($slug, $date){
		if($slug === FALSE){
			$query = $this->db->get('northwind');
			return $query->result_array();
		}
		//$query = $this->db->get_where('orders', array('ship_city' => $slug ));
		$this->db->select('*');
        $this->db->from('orders');
        $this->db->where('order_date <=',$slug);
		$this->db->where('order_date >=',$date);
        

		$query =  $this->db->get()->result_array();
		//return($query->result_array());
		return $query;
	}
}