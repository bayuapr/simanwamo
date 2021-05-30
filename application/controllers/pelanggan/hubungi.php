<?php

defined('BASEPATH') or exit('No direct script access allowed');

class hubungi extends CI_Controller
{

    public function index()
    {
        $data['hubungi'] = $this->sewa_model->get_data('hubungi')->result();
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/hubungi', $data);
        $this->load->view('templates_pelanggan/footer');
    }

    public function kirim_pesan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('pesan', 'Pesan', 'required', array('required' => '%s Harus Diisi !!!'));
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $id            = $this->input->post('id_hubungi');
            $nama          = htmlspecialchars($this->input->post('nama'));
            $email         = htmlspecialchars($this->input->post('email'));
            $pesan         = htmlspecialchars($this->input->post('pesan'));

            $data = array(
                'nama'         => $nama,
                'email'        => $email,
                'pesan'        => $pesan,
            );
            $this->sewa_model->insert_data($data, 'hubungi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pesan Berhasil Dikirim!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('pelanggan/hubungi');
        }
    }
}

/* End of file hubungi.php */
