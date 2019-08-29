<?php

class zadatak extends CI_Controller {
	public function view($zadatak = 'z1')
	{
		if(!file_exists(APPPATH.'views/zadatak/'.$zadatak.'.php'))
		{
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('zadatak/'.$page);
		$this->load->view('templates/footer')
	}
}
