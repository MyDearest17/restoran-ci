<?php

class Prints extends CI_Controller{

    public function __CONSTRUCT()
    {
        parent::__CONSTRUCT();
        $this->load->library('Pdf');
        $this->load->model('Administrator_model');
    }

    public function index()
    {
        // instance object dan memberikan pengaturan halaman pdf
        $pdf = new FPDF('p','mm',[80, 120]);
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan 
        $pdf->SetFont('Arial','B','10');
        // mencetak string
        $pdf->Cell(60,-4,'BARATIE WORK',0,5,'C');
        $pdf->SetFont('Arial','','8');
        $pdf->Cell(60,12,'Jalan Siliwangi No.17 Baleendah Kabupaten Bandung',0,5,'C');
        $pdf->Cell(60, -6,'08122154602 - baratiework@gmail.com',0,5,'C');
        $pdf->Cell(60, 12,'--------------------------------------------------------------------------------',0,5,'C');
        // memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(-8);
        $pdf->Cell(25,6,'NAMA MASAKAN',0,0);
        $pdf->Cell(15,6,'JUMLAH',0,0);
        $pdf->Cell(20,6,'HARGA',0,0);
        $pdf->Cell(20,6,'TOTAL',0,1);

        foreach($this->Administrator_model->GetDetailOrder() as $pr ){
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(-8);
            $pdf->Cell(25,6,'NAMA MASAKAN',0,0);
            $pdf->Cell(15,6,'JUMLAH',0,0);
            $pdf->Cell(20,6,'HARGA',0,0);
            $pdf->Cell(20,6,'TOTAL',0,1);
        }

        




        $pdf->Output();
    }
}