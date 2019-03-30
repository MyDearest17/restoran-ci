<?php

class Pelanggan extends CI_Controller{
    
    public function __CONSTRUCT()
    {
        parent::__CONSTRUCT();
        $this->load->model('Administrator_model');
        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
        $data['judul'] = 'Cafe Rizky';
        $data['menu'] = $this->Administrator_model->GetMenu();
        $data['order'] = $this->Pelanggan_model->getOrderbyId($this->session->userdata('id_order'));

        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('pelanggan/footer');
    }

    
    public function daftarPesanan(){
        $data['judul'] = 'Daftar Pesanan';
        $data['dataOrder'] = $this->Pelanggan_model->getDataOrder();
        $data['totalHarga'] = $this->Pelanggan_model->totalHarga()->result();
        $data['status_order'] = $this->Pelanggan_model->setIdOrder();
        $data['order'] = $this->Pelanggan_model->getOrderbyId($this->session->userdata('id_order'));
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/daftarpesanan', $data);
        $this->load->view('pelanggan/footer');
    }

    public function setDetailOrder(){
        $query = $this->Pelanggan_model->createDetailOrder();
        if($query > 0){
            redirect(base_url('pelanggan')); 
        } 
    }

    public function deleteDetailOrder()
    {
        $this->Pelanggan_model->deleteOrder();
        redirect('pelanggan/daftarpesanan');
    }

    public function updateOrder(){
        $this->Pelanggan_model->updateOrder();
        redirect('pelanggan/daftarpesanan');
    }

}


