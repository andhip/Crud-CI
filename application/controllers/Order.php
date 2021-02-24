<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
    }
 
    public function index()
    {
        $data['orders'] = $this->order_model->get_all();
        $this->load->view('V_Index', $data);
    }

	public function store()
    {
        $noinduk = $this->input->post('noinduk');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $asalsekolah = $this->input->post('asalsekolah');
        $data = [
            'noinduk' => $noinduk,
            'nama' => $nama,
            'alamat' => $alamat,
            'asalsekolah' => $asalsekolah
        ];
 
        $simpan = $this->order_model->insert("order", $data);
        if($simpan){
            echo '<script>alert("Berhasil menambah data order");window.location.href="'.base_url('index.php/order').'";</script>';
        }
    }
 
 
    public function export() {
        $orders = $this->order_model->get_all();
        $tanggal = date('d-m-Y');
 
        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('', 'B', 20);
        $pdf->Cell(115, 0, "Laporan Order - ".$tanggal, 0, 1, 'L');
        $pdf->SetAutoPageBreak(true, 0);
 
        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        $pdf->Cell(55, 8, "noinduk", 1, 0, 'C');
        $pdf->Cell(35, 8, "nama", 1, 0, 'C');
        $pdf->Cell(35, 8, "alamat", 1, 0, 'C');
        $pdf->Cell(50, 8, "asalsekolah", 1, 1, 'C');
        $pdf->SetFont('', '', 12);
        foreach($orders->result_array() as $k => $order) {
            $this->addRow($pdf, $k+1, $order);
        }
        $tanggal = date('d-m-Y');
        $pdf->Output('Laporan Order - '.$tanggal.'.pdf'); 
    }
 
    private function addRow($pdf, $no, $order) {
        $pdf->Cell(10, 8, $no, 1, 0, 'C');
        $pdf->Cell(35, 8, $order['noinduk'], 1, 0, 'C');
        $pdf->Cell(55, 8, $order['nama'], 1, 0, 'C');
        $pdf->Cell(85, 8, $order['asalsekolah'], 1, 0, 'C');
    }
}

 
  
 
