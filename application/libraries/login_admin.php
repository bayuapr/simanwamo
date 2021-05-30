<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('sewa_model');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->sewa_model->login_admin($username, $password);
        if ($cek) {
            $nama_admin = $cek->nama_admin;
            $username = $cek->username;

            //buat session
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nama_admin', $nama_admin);
            redirect('admin/dashboard');
        }else {
            //jika salah
            $this->ci->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username Atau Password Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth_admin/login_admin');
        }
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth_admin/login_admin');
            
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama_admin');
        $this->ci->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda Berhasil Logout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('auth_admin/login_admin');
        
    }


}

/* End of file LibraryName.php */

?>