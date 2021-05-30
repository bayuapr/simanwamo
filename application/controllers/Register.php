<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function index()
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('form_register');
            // $this->load->view('templates_admin/footer');
        } else {
            $nama                   = htmlspecialchars($this->input->post('nama'));
            $email                  = htmlspecialchars($this->input->post('email'));
            $alamat                 = htmlspecialchars($this->input->post('alamat'));
            $gender                 = htmlspecialchars($this->input->post('gender'));
            $no_telepon             = htmlspecialchars($this->input->post('no_telepon'));
            $no_ktp                 = htmlspecialchars($this->input->post('no_ktp'));
            $password               = md5($this->input->post('password'));


            $data = array(
                'nama'              => $nama,
                'email'             => $email,
                'alamat'            => $alamat,
                'gender'            => $gender,
                'no_telepon'        => $no_telepon,
                'no_ktp'            => $no_ktp,
                'password'          => $password,
            );
            $this->sewa_model->insert_data($data, 'pelanggan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Register, Silahkan Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required',  array('required' => '%s Harus Diisi !!!'));
        // $this->form_validation->set_rules('email', 'Email', 'required',  array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[pelanggan.email]',['is_unique' => 'Email ini sudah terdaftar!', 'required' => '%s Harus Diisi !!!']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',  array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('gender', 'Gender', 'required',  array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required|numeric|min_length[10]|max_length[13]',  array('required' => '%s Harus Diisi !!!', 'numeric' => '%s Angka 0-9', 'min_length' => '%s Minimal 10 digit', 'max_length' => '%s Maksimal 13 digit'));
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required|numeric|min_length[16]|max_length[16] ',  array('required' =>'%s Harus Diisi !!!', 'numeric' => '%s Angka 0-9', 'min_length' => '%s Minimal 16 digit', 'max_length' => '%s Maksimal 16 digit'));
        $this->form_validation->set_rules('password', 'Password', 'required',  array('required' => '%s Harus Diisi !!!'));
    }

}

/* End of file register.php */
