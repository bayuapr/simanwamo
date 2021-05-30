<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class auth_admin extends CI_Controller {

        function __construct()
    {
        parent::__construct();
        $this->load->model('sewa_model');
    }

    public function login_admin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
        
        
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->login_admin->login($username, $password);
        }

        $this->load->view('templates_admin/header');
        $this->load->view('admin/login');
        // $this->load->view('templates_admin/footer');
    }

    // public function ganti_password()
    // {
    //     $this->load->view('templates_admin/header');
    //     $this->load->view('ganti_password');
    //     $this->load->view('templates_admin/footer');
    // }

    //     public function ganti_password_aksi()
    // {
    //     $password_baru = $this->input->post('password_baru');
    //     $ulang_password = $this->input->post('ulang_password');
    //     $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[ulang_password]');
    //     $this->form_validation->set_rules('ulang_password', 'Ulangi Password', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates_admin/header');
    //         $this->load->view('ganti_password');
    //         $this->load->view('templates_admin/footer');
    //     } else {
    //         $data = array('password' => md5($password_baru));
    //         $id = array('id_admin' => $this->session->userdata('id_admin'));

    //         $this->sewa_model->update_password($id, $data, 'admin');
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         Password Berhasil Diupdate, Silahkan Login!
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //             <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>');
    //         redirect('auth_admin/login_admin');
    //     }
    // }

    public function logout_admin()
    {
        $this->session->sess_destroy();
        $this->login_admin->logout('auth_admin/login_admin');
    }

}

/* End of file Controllername.php */
