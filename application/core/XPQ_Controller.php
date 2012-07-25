<?php 

class XPQ_Controller extends CI_Controller {
	var $data_master;

	public function __construct()
	{
		$this->data_master['content'] = '';
		$this->data_master['css'] = '';
		$this->data_master['container'] = true;
		parent::__construct();
	}
}