 <?php

 class Customers_model extends CI_Model{
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}

	function Custumer()
 	{
 		return $this->db->get('customers');
 	}

 	function edit($id_cus)
 	{
    	/*$id = $id_cus['id'];
		$this->db->select('*');
        $this->db->from('customers');
        $this->db->like('id', $id_cus['id']);
        

		$query =  $this->db->get()->result_array();
		return $query;
	*/

		$query = $this->db->get_where('customers',$id_cus['condition']);
		return $query->row_array();
 	}

 	function update($cus)
 	{
 		$update=array(
 		'id'=>$cus['id'],
		'company'=>$cus['company'],
		'last_name'=>$cus['last_name'],
		'first_name'=>$cus['first_name'],
		'email_address'=>$cus['email_address'],
		'job_title'=>$cus['job_title'],
		'business_phone'=>$cus['business_phone'],
		'home_phone'=>$cus['home_phone'],
		'mobile_phone'=>$cus['mobile_phone'],
		'fax_number'=>$cus['fax_number'],
		'address'=>$cus['address'],
		'state_province'=>$cus['state_province'],
		'zip_postal_code'=>$cus['zip_postal_code'],
		'country_region'=>$cus['country_region'],
		'web_page'=>$cus['web_page'],
		'notes'=>$cus['notes'],
		'attachments'=>$cus['attachments'],
 		);

 		$condition = array('id' => $cus['id']);
 		$query=$this->db->get_where('customers',$condition);
 		$result=$query->result_array();
 		print_r($update);

 		if(!empty($result))
 		{
 			$this->db->where($condition);
 			$this->db->update('customers',$update);
 		}
 	}
 }