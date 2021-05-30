<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tentang extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/tentang');
        $this->load->view('templates_pelanggan/footer');
    }
}

/* End of file tentang.php */
