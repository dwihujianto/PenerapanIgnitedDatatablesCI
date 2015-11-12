<?php defined('BASEPATH') OR exit('Forbbiden');

class Api extends CI_Controller
{
	public function get()
	{
		$this->load->model('anggota');

		echo $this->anggota->all();
	}
}