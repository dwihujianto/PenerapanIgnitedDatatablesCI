<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datacontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('show-data');
	}
}
