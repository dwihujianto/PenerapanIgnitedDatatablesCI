<?php defined('BASEPATH') OR exit('Forbbiden');

class Anggota extends CI_Model
{
	protected $table = 'anggota';

	public function all()
	{
		$this->datatables
				->select('nama,kota,tgl_lahir,id')
				->add_column('action','<a href="admin-info/ubah/$1">Ubah</a> | <a href="admin-info/$1/hapus">Hapus</a>','id')
				->from($this->table);

		return $this->datatables->generate();		
	}


}