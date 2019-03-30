<?php

class Login_model extends CI_Model
{

	public function getNoMeja()
	{
		return $this->db->get_where('meja',['status_meja' => 'kosong'])->result_array();
	}
	
	public function login($where)
	{
		return $this->db->get_where('user',$where);
	}

	public function tambahOrder($data)
	{
		$this->db->insert('order_masakan',$data);
	}

	public function updateMeja($data,$where)
	{
		$this->db->where($where);
		$this->db->update('meja',$data);
	}

}