<?php

class Login extends CI_Controller{

    public function __CONSTRUCT()
    {
        parent::__CONSTRUCT();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $data['judul'] = "Login || Cafe Rizky";
        $data['meja'] = $this->Login_model->getNoMeja();
        $this->load->view('assets/top', $data);
        $this->load->view('login', $data);
        $this->load->view('assets/bot');
    }

    public function proses_login()
    {
        if($this->input->post('usernam', TRUE)){
            $data =[
            'usernam' => $this->input->post('usernam', TRUE),
            'password' => $this->input->post('password', TRUE),
            'id_level' => 4
            ];
            $login = $this->Login_model->Login($data);

            if($login->num_rows() == 1){
                $no_meja = $this->input->post('no_meja');
                $data = ['status_meja' => 'penuh'];
                $where = ['no_meja' => $no_meja];

                $this->Login_model->updateMeja($data, $where);

                $data = $login->row_array();

                $tanggal = date('Y-m-d');
                $id_order = uniqid();
                $id_user = $data['id_user'];

                $order = [
                    'id_order' => $id_order,
                    'no_meja' => $no_meja,
                    'tanggal' => $tanggal,
                    'id_user' => $id_user
                ];

                $this->Login_model->tambahOrder($order);

                $this->session->set_userdata('pelanggan', TRUE);
                $this->session->set_userdata('usernam', $data['usernam']);
                $this->session->set_userdata('id_order', $id_order);
                $this->session->set_userdata('no_meja', $no_meja);
                redirect('pelanggan');
            }else{
                $this->session->set_flashdata('error', 'username/password salah');
                redirect(base_url());
            }
        }
    }

    public function petugas()
    {
        $data['judul'] = 'Login || Rizky Cafe';

        $this->load->view('assets/top', $data);
        $this->load->view('login_petugas');
        $this->load->view('assets/bot');
    }

    public function proses_login_petugas()
	{
		$data = [
					'usernam' => $this->input->post('usernam'),
					'password' => $this->input->post('password'),
					'id_level !=' => 4
				];

		$login = $this->Login_model->login($data);

		if($login->num_rows()==1){
			$data = $login->row_array();

			if($data['id_level'] == 1){
				$this->session->set_userdata('administrator',true);
				$this->session->set_userdata('usernam',$data['usernam']);
				redirect('administrator');
			}elseif($data['id_level'] == 2){
				$this->session->set_userdata('waiter',true);
				$this->session->set_userdata('usernam',$data['usernam']);
				redirect('waiter');
			}elseif($data['id_level'] == 3){
				$this->session->set_userdata('kasir',true);
				$this->session->set_userdata('usernam',$data['usernam']);
				redirect('kasir');
			}elseif($data['id_level'] == 5){
				$this->session->set_userdata('owner',true);
				$this->session->set_userdata('usernam',$data['usernam']);
				redirect('owner');
			}
		}else{
			$this->session->set_flashdata('error','username/password salah');
			redirect(base_url('login/petugas'));
		}
    }
    
    public function logout()
	{
		if($this->session->userdata('pelanggan') == true){

			$data = [ 'status_meja' => 'kosong' ];
			$where = [ 'no_meja' => $this->session->userdata('no_meja') ];

			$this->Login_model->updateMeja($data,$where);
		}
		$this->session->sess_destroy();
		redirect(base_url());
	}
    public function logoutpetugas()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/petugas'));
	}

    
}