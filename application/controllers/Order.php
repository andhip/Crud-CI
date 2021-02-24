<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
    }
 
    public function export() {
        $orders = $this->order_model->get_all();
        $tanggal = date('d-m-Y');
		
		// Setting halaman PDF
		$pdf = new \TCPDF('l','mm','A4');
        $pdf->AddPage();
		$pdf->Cell(10,7,'',0,1);
		// Membuat string
        $pdf->SetFont('', 'B', 20);
        $pdf->Cell(270, 7, "Daftar Peserta Didik Baru Tahun Ajaran 2021/2022 ", 0, 1, 'C');
		$pdf->SetFont('', '', 14);
        $pdf->Cell(270, 7, "Sekolah Coding Jakarta ".$tanggal, 0, 1, 'C');
        $pdf->SetAutoPageBreak(true, 0);
 
        // Add Header
        $pdf->Ln(20);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        $pdf->Cell(35, 8, "No.induk", 1, 0, 'C');
        $pdf->Cell(55, 8, "Nama", 1, 0, 'C');
        $pdf->Cell(100, 8, "Alamat", 1, 0, 'C');
        $pdf->Cell(85, 8, "Asal Sekolah", 1, 1, 'C');
        $pdf->SetFont('', '', 12);
        foreach($orders->result_array() as $k => $order) {
            $this->addRow($pdf, $k+1, $order);
        }
        $tanggal = date('d-m-Y');
        $pdf->Output('Daftar Mahasiswa Baru - '.$tanggal.'.pdf'); 
    }
 
    private function addRow($pdf, $no, $order) {
        $pdf->Cell(10, 8, $no, 1, 0, 'C');
        $pdf->Cell(35, 8, $order['noinduk'], 1, 0);
        $pdf->Cell(55, 8, $order['nama'], 1, 0, '');
		$pdf->Cell(100, 8,$order['alamat'], 1, 0, '');
        $pdf->Cell(85, 8, $order['asalsekolah'], 1, 0, '');
    }
}


 
