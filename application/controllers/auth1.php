<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auth1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('sewa_model');
    }

    public function login()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
        } else {
            $email                  = $this->input->post('email');
            $password               = md5($this->input->post('password'));

            $cek = $this->sewa_model->cek_login($email, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email Atau Password Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('email', $cek->email);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('id_pelanggan', $cek->id_pelanggan);

                switch ($cek->role_id) {
                    case 1:
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        redirect('pelanggan/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('pelanggan/dashboard');
    }

    public function ganti_password()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('ganti_password');
        $this->load->view('templates_admin/footer');
    }

    public function ganti_password_aksi()
    {
        $password_baru = $this->input->post('password_baru');
        $ulang_password = $this->input->post('ulang_password');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[ulang_password]');
        $this->form_validation->set_rules('ulang_password', 'Ulangi Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('ganti_password');
            $this->load->view('templates_admin/footer');
        } else {
            $data = array('password' => md5($password_baru));
            $id = array('id_pelanggan' => $this->session->userdata('id_pelanggan'));

            $this->sewa_model->update_password($id, $data, 'pelanggan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Password Berhasil Diupdate, Silahkan Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
}

/* End of file auth.php */
