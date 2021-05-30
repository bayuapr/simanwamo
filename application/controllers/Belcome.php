<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belcome extends CI_Controller
{
	public function index()
	{
		$data = array(
			'total_mobil' => $this->sewa_model->total_mobil(),
			'total_pelanggan' => $this->sewa_model->total_pelanggan(),
			'total_type' => $this->sewa_model->total_type(),
			'total_supir' => $this->sewa_model->total_supir(),
		);
		$data['mobil'] = $this->sewa_model->get_data('mobil')->result();
		$this->load->view('templates_pelanggan/header');
		$this->load->view('pelanggan/new_dashboard', $data);
		$this->load->view('templates_pelanggan/footer');
	}
}
