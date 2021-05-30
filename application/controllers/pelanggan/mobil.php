<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class mobil extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sewa_model');
    }
    

    public function index()
    {
        $data['mobil'] = $this->sewa_model->get_data('mobil')->result();
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/mobil', $data);
        $this->load->view('templates_pelanggan/footer');
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->sewa_model->ambil_id_mobil($id);
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/detail_mobil', $data);
        $this->load->view('templates_pelanggan/footer');
    }

    // public function cari()
    // {
    //     $keyword       = $this->input->post('keyword');
    //     $data['mobil'] = $this->sewa_model->get_mobil_keyword($keyword);
    //     $this->load->view('templates_pelanggan/header');
    //     $this->load->view('pelanggan/hasil_mobil', $data);
    //     $this->load->view('templates_pelanggan/footer');
    // }

}

/* End of file mobil.php */

?>