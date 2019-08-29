<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
public function __construct(){
         parent::__construct();

         $this->load->helper(array('form','url'));
         $this->load->library(array('session', 'form_validation', 'email'));
         $this->load->helper('cookie');
         $this->load->model('filter_model');   

 }

	public function index()
	{

		    $this->load->view("templates/header");
            $this->load->view("view_index.php");
            $this->load->view("templates/footer");
	 
	 if ($this->input->post('ship_city') || $this->input->post('ship_name') || $this->input->post('Fship_date')) {
	       $data = array(
            	'ship_city' => $this->input->post('ship_city'),
            	'ship_name' => $this->input->post('ship_name'),
                'Fship_date' => $this->input->post('Fship_date').' 00:00:00',
                'Tship_date' => $this->input->post('Tship_date').' 00:00:00',
            );
	       $this->load->helper('file');
		}
		else
		{
			$data ='';
		}
		print_r($data);
		if($data !=''){ 
	       //print_r($data);
			if($data['ship_city']!='')
			{
				$slug  = $this->input->post('ship_city');

				$cityname['sve']= $this->filter_model->get_filter_city($slug);
			}
			ELSE if($data['ship_name']!='')
			{
				$slug  = $this->input->post('ship_name');

				$cityname['sve']= $this->filter_model->get_filter_ship($slug);
			}
			ELSE if($data['Fship_date']!='')
			{
				if($data['Tship_date']='')
				{
					$data['Tship_date']=$data['Fship_date'];
				}
				$slug 	= $data['Fship_date'];
				$date 	= $data['Tship_date'];
				$cityname['sve']= $this->filter_model->get_filter_date($slug, $date);
			}

				print_r($cityname);
		};
  

  }
     public function Z2()
    {
    	$this->load->view("templates/header");
    	$this->load->model('customers_model');
    	$result= $this->customers_model->Custumer();
    	$data= array('customerslist' =>$result);
     	$this->load->view("view_Z2.php", $data);
    }
     public function Z3()
    {
    	$this->load->view("zadatak3.html");
    }

    function view($x='')
    {
    	$data['condition']=array('id'=>$x);
    	$this->load->model('customers_model');
    	$result=$this->customers_model->edit($data);
    	$data= array('index'=>$result);
    	$this->load->view('customer_edit',$data);
    }

	function update()
	{
		$id = NULL;
		$company=NULL;
		$Last_Name=NULL;
		$First_Name=NULL;
		$Email=NULL;
		$Job_title=NULL;
		$Business_phone=NULL;
		$Home_phone=NULL;
		$Mobile_phone=NULL;
		$Fax_number=NULL;
		$Address=NULL;
		$State_province=NULL;
		$Zip_postal_code=NULL;
		$Country_region=NULL;
		$Web_page=NULL;
		$Notes=NULL;

		extract($_POST);

		$cus['id']=$this->input->post('id');
		$cus['company']=$this->input->post('company');
		$cus['last_name']=$this->input->post('last_name');
		$cus['first_name']=$this->input->post('first_name');
		$cus['email_address']=$this->input->post('email_address');
		$cus['job_title']=$this->input->post('job_title');
		$cus['business_phone']=$this->input->post('business_phone');
		$cus['home_phone']=$this->input->post('home_phone');
		$cus['mobile_phone']=$this->input->post('mobile_phone');
		$cus['fax_number']=$this->input->post('fax_number');
		$cus['address']=$this->input->post('address');
		$cus['state_province']=$this->input->post('state_province');
		$cus['zip_postal_code']=$this->input->post('zip_postal_code');
		$cus['country_region']=$this->input->post('country_region');
		$cus['web_page']=$this->input->post('web_page');
		$cus['notes']=$this->input->post('notes');
		$cus['attachments']=NULL;
		//print_r($cus);
    	$this->load->model('customers_model');
    	$result=$this->customers_model->update($cus);
    	$data= array('index'=>$result);
     	//$this->load->view('customer_edit',$data);
		
		$this->load->model('customers_model');
    	$result= $this->customers_model->Custumer();
    	$data= array('customerslist' =>$result);
     	$this->load->view("view_Z2.php", $data);
	}
}

	

