<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class login_supir
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('sewa_model');
    }

    public function login($email, $password)
    {
        $cek = $this->ci->sewa_model->login_supir($email, $password);
        if ($cek) {
            $nama_lengkap = $cek->nama_lengkap;
            $email = $cek->email;

            //buat session
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('nama_lengkap', $nama_lengkap);
            redirect('supir/jadwal_antar');
        }else {
            //jika salah
            $this->ci->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email Atau Password Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth_supir/login_supir');
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
            redirect('auth_supir/login_supir');
            
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('nama_lengkap');
        $this->ci->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda Berhasil Logout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('auth_supir/login_supir');
        
    }


}

/* End of file LibraryName.php */
