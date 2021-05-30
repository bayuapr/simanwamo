<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auth_supir extends CI_Controller
{

    public function login_supir()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));


        if ($this->form_validation->run() == TRUE) {
            $email    = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->login_supir->login($email, $password);

        }

        $this->load->view('templates_supir/header');
        $this->load->view('supir/login');
        // $this->load->view('templates_supir/footer');
    }

    public function logout_supir()
    {
        $this->session->sess_destroy();
        $this->login_supir->logout('auth_supir/login_supir');
    }
}

/* End of file Controllername.php */
