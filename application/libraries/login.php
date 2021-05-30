<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('sewa_model');
    }

    public function login($email, $password)
    {
        $cek = $this->ci->sewa_model->login($email, $password);
        if ($cek) {
            $id_pelanggan = $cek->id_pelanggan;
            $nama = $cek->nama;
            $email = $cek->email;


            //buat session
            $this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('nama', $nama);
            redirect('pelanggan/dashboard');
        } else {
            //jika salah
            $this->ci->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email Atau Password Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('email') == '') {
            $this->ci->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('id_pelanggan');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda Berhasil Logout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('auth/login');
    }
}

/* End of file LibraryName.php */
