<?php

class Administrator_model extends CI_Model{

	// ============ FUCTION USER ==============>
    
	public function getUserbyLevel($level)
	{
		$this->db->select('user.id_user, user.usernam, user.password, user.nama_user');
		$this->db->from('user');
		$this->db->join('level','level.id_level = user.id_level');
		$this->db->where('level.nama_level',$level);

		return $this->db->get()->result_array();
	}

	public function TambahUser()
	{
		$data = [
			"nama_user" => $this->input->post('nama_user', TRUE),
			"usernam" => $this->input->post('usernam', TRUE),
			"password" => $this->input->post('password', TRUE),
			"id_level" => $this->input->post('id_level', TRUE),
		];

		$this->db->insert('user', $data);
	}

	public function HapusUser($id_user)
	{
		$this->db->delete('user', ['id_user' => $id_user]);
	}

	public function GetId($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
	}
	
	public function ubahUser($data,$id)
	{
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);

		return $this->db->affected_rows();
	}


	// =========== FUNCTION MEJA ==================>

	//Get
	public function GetAllMeja()
	{
		return $this->db->get('meja')->result_array();
	}

	//GetId
	public function GetIdMeja($no_meja)
    {
        return $this->db->get_where('meja', ['no_meja' => $no_meja])->row_array();
	}

	//Tambah
	public function TambahMeja()
	{
		$data = [
			"no_meja" => $this->input->post('no_meja', TRUE),
			"jumlah_orang" => $this->input->post('jumlah_orang', TRUE),
			"status_meja" => $this->input->post('status_meja', TRUE)
		];
		$this->db->insert('meja', $data);
	}
	//Hapus
	public function HapusMeja($no_meja)
	{
		$this->db->delete('meja', ['no_meja' => $no_meja]);
	}
	// Ubah
	public function UbahDataMeja()
    {
        $data = [
            "no_meja" => $this->input->post('no_meja', true),
            "jumlah_orang" => $this->input->post('jumlah_orang', true),
            "status_meja" => $this->input->post('status_meja', true),
        ];

        $this->db->where('no_meja', $this->input->post('no_meja'));
        $this->db->update('meja', $data);
    }


	// =========== FUCTION MENU ================>

	//Get
	public function GetMenu()
	{
		return $this->db->get('masakan')->result_array();
	} 
	//Tambah
	public function TambahMenu()
	{
		$data = [
			"nama_masakan" => $this->input->post('nama_masakan', TRUE),
			"harga" => $this->input->post('harga', TRUE),
			"status_masakan" => $this->input->post('status_masakan', TRUE),
			"jenis_masakan" => $this->input->post('jenis_masakan', TRUE),
			"foto_masakan" => $this->input->post('foto_masakan', TRUE)
		];
		$this->db->insert('masakan', $data);
	}
	//Hapus
	public function HapusMenu($id_masakan)
	{
		$this->db->delete('masakan', ['id_masakan' => $id_masakan]);
	}
	//GetId
	public function GetIdMenu($id_masakan)
    {
        return $this->db->get_where('masakan', ['id_masakan' => $id_masakan])->row_array();
	}
	// Ubah
	public function UbahDataMenu()
    {
        $data = [
            "id_masakan" => $this->input->post('id_masakan', true),
            "nama_masakan" => $this->input->post('nama_masakan', true),
            "harga" => $this->input->post('harga', true),
            "status_masakan" => $this->input->post('status_masakan', true),
            "jenis_masakan" => $this->input->post('jenis_masakan', true),
            "foto_masakan" => $this->input->post('foto_masakan', true)
        ];

        $this->db->where('id_masakan', $this->input->post('id_masakan'));
        $this->db->update('masakan', $data);
    }


	//========= FUNCTION ORDER ====================>

	//Get
	public function getAllOrder()
	{
		$this->db->order_by('tanggal','DESC');
		return $this->db->get('order_masakan')->result_array();
	}

	public function HapusOrder($id_order)
	{
		$this->db->delete('order_masakan', ['id_order' => $id_order]);
	}

	public function GetById($id_order)
	{
		return $this->db->get_where('order_masakan', ['id_order' => $id_order])->row_array();	
	}

	public function getDetailOrder($id_order)
	{
		$this->db->select('detail_order.id_masakan, detail_order.keterangan, detail_order.status_detail_order, detail_order.jumlah, detail_order.harga_jumlah, masakan.nama_masakan, masakan.harga');
		$this->db->from('detail_order');
		$this->db->join('order_masakan','order_masakan.id_order = detail_order.id_order');
		$this->db->join('masakan','masakan.id_masakan = detail_order.id_masakan');
		$this->db->where('detail_order.id_order',$id_order);

		return $this->db->get()->result_array();
	}

	public function updateStatus()
	{
		$data = [
			'status_detail_order' => 'disajikan'
        ];

        $this->db->where('id_detail_order', $this->input->post('id_detail_order'));
        $this->db->update('detail_order', $data);
	}

	// ============== TRANSAKSI ====================>

	public function getTransaksi()
	{
		$this->db->select('transaksi.id_order, transaksi.tanggal, transaksi.bayar, transaksi.kembalian, transaksi.status_transaksi, order_masakan.total_harga');
		$this->db->from('transaksi');
		$this->db->join('order_masakan','order_masakan.id_order = transaksi.id_order');
		return $this->db->get()->result_array();
	}

	public function transaksi()
	{
		$data = [
			'id_transaksi' => '',
			'id_order' => $this->input->post('id_order'),
			'id_user' => $this->input->post('id_user'),
			'tanggal' => $this->input->post('tanggal'),
			'status_transaksi' => 'belum bayar'
		];
		$this->db->insert('transaksi', $data);
	}

	public function updateOrder()
	{
		$data = [
			'status_order' => 'selesai'
        ];
        $this->db->update('order_masakan', $data);
	}

	public function bayar()
	{
		$data = [
			'bayar' => $this->input->post('bayar'),
			'status_transaksi' => 'sudah bayar',
			'kembalian' => $this->input->post('bayar') - $this->input->post('total_harga')
		];
		$where = [ 'id_order' => $this->input->post('id_order') ];
		$this->db->where($where);
		$this->db->update('transaksi', $data);
	}

}