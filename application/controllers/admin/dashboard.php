<?php

defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sewa_model');
    }
    

    public function index()
    {
        $data = array(
            'total_mobil' => $this->sewa_model->total_mobil(),
            'total_pelanggan' => $this->sewa_model->total_pelanggan(),
            'total_transaksi' => $this->sewa_model->total_transaksi(),
            'total_supir' => $this->sewa_model->total_supir(),
        );
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');


    }
}

/* End of file dashboard.php */
