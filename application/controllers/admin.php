<?php 

class Admin extends CI_Controller {

	public function index()
	{
		$data_master['content'] = $this->load->view('admin', '', true);

		$this->load->view('templates/master', $data_master);
	}
}