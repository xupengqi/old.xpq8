<?php 

class Home extends XPQ_Controller {

	public function index($page = 'home')
	{
		$data_page['title'] = ucfirst($page);
		$this->data_master['content'] = $this->load->view('home', $data_page, true);

		$this->load->view('templates/master', $this->data_master);
	}
}