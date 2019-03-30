<?php

class Administrator extends CI_Controller{
    public function __CONSTRUCT()
	{
		parent:: __CONSTRUCT();
		if(!$this->session->userdata('administrator')){
			$this->session->set_flashdata('error','Akses Ditolak');
			redirect(base_url());
			exit();
		}
        $this->load->model('Administrator_model', 'admin');
        $this->load->model('Administrator_model');
        $this->load->library('form_validation');
    }

    // ======== DASHBOARD ========>
    
    public function index()
    {
        $data['judul'] = 'Rizky Cafe || Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    // ===== AKHIR DASHBOARD =====>

    // ========= FUNCTION =========>

    public function _uploadGambar()
	{
		$config = [
					'upload_path' => './gambar/menu/',
					'allowed_types' => 'png|jpg|jpeg'
				  ];

		$this->load->library('upload',$config);

		if($this->upload->do_upload('foto_aja')){
			return $this->upload->data('file_name');
		}else{
			return 'default.jpg';
		}
    }
    
    // ======= AKHIR FUNCTION =======>


    // ------------------------ //
    // <----- FUNGSI MEJA ----->//
    // ------------------------ // 

    // INDEX
    public function meja()
    {
        $data['judul'] = 'Rizky Cafe || Meja';
        $data['meja'] = $this->Administrator_model->GetAllMeja();
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/meja/index', $data);
        $this->load->view('admin/footer');
    }

    // TAMBAH
    public function tambahMeja()
    {
        $this->form_validation->set_rules('no_meja', 'NO MEJA', 'required');
        $this->form_validation->set_rules('jumlah_orang', 'JUMLAH ORANG', 'required');
        $this->form_validation->set_rules('status_meja', 'STATUS MEJA', 'required');

        if($this->form_validation->run() == FALSE){
            $data['judul'] = 'Form Tambah Meja';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/meja/tambah', $data);
            $this->load->view('admin/footer');
        }else{
            $this->Administrator_model->TambahMeja();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('administrator/meja');
        }
    }

    // HAPUS
    public function hapusMeja($no_meja)
    {
        $this->Administrator_model->HapusMeja($no_meja);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('administrator/meja');
    }

    // UBAH
    public function ubahMeja($no_meja)
    {
        $this->form_validation->set_rules( 'no_meja', 'NO MEJA', 'required' );
        $this->form_validation->set_rules( 'jumlah_orang', 'JUMLAH ORANG', 'required' );
        $this->form_validation->set_rules( 'status_meja', 'STATUS MEJA', 'required' );

        if( $this->form_validation->run() == FALSE ){
            $data['meja'] = $this->Administrator_model->GetIdMeja($no_meja);
            $data['judul'] = 'Form Ubah';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/meja/ubah', $data);
            $this->load->view('admin/footer');
        }else {
            $this->Administrator_model->UbahDataMeja();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('administrator/meja');
        }       
    }

    // ------------------------ //
    // <-- AKHIR FUNGSI MEJA -->//
    // ------------------------ //


    // ------------------------ //
    // <----- FUNGSI USER ----->//
    // ------------------------ // 

    //INDEX
    public  function user()
    {
        $data['judul'] = 'Rizky Cafe || User';
        $data['administrator'] = $this->admin->getUserbyLevel('administrator');
		$data['waiter'] = $this->admin->getUserbyLevel('waiter');
		$data['kasir'] = $this->admin->getUserbyLevel('kasir');
		$data['owner'] = $this->admin->getUserbyLevel('owner');
        $data['pelanggan'] = $this->admin->getUserbyLevel('pelanggan');
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user/user', $data);
        $this->load->view('admin/footer');
    }

    //TAMBAH
	public function tambah()
	{
		$this->form_validation->set_rules('nama_user', 'NAMA USER', 'required');
		$this->form_validation->set_rules('usernam', 'USERNAME', 'required');
		$this->form_validation->set_rules('password', 'PASSWORD', 'required');

		if($this->form_validation->run() == FALSE){
		$data['judul'] = 'Rizky cafe || User';

		$this->load->view('admin/header', $data);
        $this->load->view('admin/user/tambah', $data);
        $this->load->view('admin/footer');	
		}else{
			$this->session->set_flashdata('flash', 'Ditambahkan');
			$this->Administrator_model->TambahUser();
			redirect('Administrator/user/user');
		}
	}

    //HAPUS
	public function hapus($id_user)
	{
		$this->Administrator_model->HapusUser($id_user);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('administrator/user/user');
	}

    //UBAH
	public function ubah()
	{
		
        $this->form_validation->set_rules( 'id', 'ID', 'required' );
        $this->form_validation->set_rules( 'nama', 'Nama', 'required' );
        $this->form_validation->set_rules( 'kelas', 'Kelas', 'required' );

        if( $this->form_validation->run() == FALSE ){
         
            $data['judul'] = 'Form Ubah';
            $data['level'] = ['Administrator', 'Waiter', 'Kasir', 'Owner', 'Pelanggan'];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/user/ubah', $data);
            $this->load->view('admin/footer');
        }else {
            $this->Mahasiswa_model->UbahDataSiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('administrator/user/ubah');
        }       
    }

    // ------------------------ //
    // <-- AKHIR FUNGSI USER -->//
    // ------------------------ //

    // ------------------------ //
    // <----- FUNGSI MENU ----->//
    // ------------------------ // 
    
    // INDEX
    public function menu()
    {
        $data['judul'] = 'Rizky Cafe || Menu';
        $data['menu'] = $this->Administrator_model->GetMenu();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu/index', $data);
        $this->load->view('admin/footer');
    }

     // TAMBAH
     public function tambahMenu()
     {
         $this->form_validation->set_rules('nama_masakan', 'NAMA MASAKAN', 'required');
         $this->form_validation->set_rules('harga', 'HARGA', 'required');
         $this->form_validation->set_rules('status_masakan', 'STATUS MASAKAN', 'required');
         $this->form_validation->set_rules('jenis_masakan', 'JENIS MASAKAN', 'required');
 
         if($this->form_validation->run() == FALSE){
             $data['judul'] = 'Form Tambah Masakan';
             $this->load->view('admin/header', $data);
             $this->load->view('admin/menu/tambah', $data);
             $this->load->view('admin/footer');
         }else{
             $this->Administrator_model->TambahMenu();
             $this->session->set_flashdata('flash', 'Ditambahkan');
             redirect('administrator/menu');
         }
     }

     // UBAH
     public function ubahMenu($id_masakan)
     {
         $this->form_validation->set_rules( 'nama_masakan', 'NAMA MASAKAN', 'required' );
         $this->form_validation->set_rules( 'harga', 'HARGA', 'required' );
         $this->form_validation->set_rules( 'status_masakan', 'STATUS MASAKAN', 'required' );
 
         if( $this->form_validation->run() == FALSE ){
             $data['menu'] = $this->Administrator_model->GetIdMenu($id_masakan);
             $data['judul'] = 'Form Ubah';
             $this->load->view('admin/header', $data);
             $this->load->view('admin/menu/ubah', $data);
             $this->load->view('admin/footer');
         }else {
             $this->Administrator_model->UbahDataMenu();
             $this->session->set_flashdata('flash', 'Diubah');
             redirect('administrator/menu');
         }       
     }

     //HAPUS
	public function hapusMenu($id_masakan)
	{
		$this->Administrator_model->HapusMenu($id_masakan);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('administrator/menu/index');
    }
    // ------------------------ //
    // <-- AKHIR FUNGSI MENU -->//
    // ------------------------ //
    
    // ------------------------ //
    // <-- AWAL FUNGSI ORDER -->//
    // ------------------------ //

    // INDEX
    public function order()
    {
        $data['judul'] = 'Rizky Cafe || Form Order';
        $data['order'] = $this->Administrator_model->getAllOrder();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/order/index', $data);
        $this->load->view('admin/footer');

    }


    public function hapusOrder($id_order)
    {
        $this->Administrator_model->HapusOrder($id_order);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('administrator/order');
    }

    public function lihatDetail($id_order)
    {
        $data['judul'] = 'Detail order';
        $data['order'] = $this->Administrator_model->GetById($id_order);
        $data['detail_order'] = $this->Administrator_model->GetDetailOrder($id_order);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/order/lihat', $data);
        $this->load->view('admin/footer');

    }

    public function updateOrder()
    {
        $this->Administrator_model->updateStatus();
        redirect('administrator/order');
    }

    // ------------------------ //
    //<-- AKHIR FUNGSI ORDER -->//
    // ------------------------ //

    // ------------------------ //
    //<--- FUNGSI TRANSAKSI --->//
    // ------------------------ //

    public function tambahTransaksi()
    {
       $this->Administrator_model->transaksi();
       $this->Administrator_model->updateOrder();
       redirect('Administrator/transaksi');
    }

    public function transaksi()
    {
        $data['judul'] = 'Data Transaksi';
        $data['transaksi'] = $this->Administrator_model->getTransaksi();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/transaksi/index', $data);
        $this->load->view('admin/footer');
    }
    
    public function updateTransaksi()
    {
        $this->Administrator_model->bayar();
        redirect('Administrator/transaksi');
    }

    // ------------------------ //
    //<-AKHIR FUNGSI TRANSAKSI->//
    // ------------------------ //
}

