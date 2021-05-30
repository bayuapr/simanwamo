<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));


        if ($this->form_validation->run() == TRUE) {
            $email      = $this->input->post('email');
            $password   = md5($this->input->post('password'));
            $this->login->login($email, $password);
        }

        $this->load->view('templates_admin/header');
        $this->load->view('form_login');
        // $this->load->view('templates_admin/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->login->logout('pelanggan/dashboard');
    }
}

/* End of file Controllername.php */
