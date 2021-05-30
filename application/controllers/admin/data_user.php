<?php

defined('BASEPATH') or exit('No direct script access allowed');

class data_user extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->sewa_model->get_data('user')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }


    public function tambah_user()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_user');
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_user_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_user();
        } else {
            $nama     = htmlspecialchars($this->input->post('nama'));
            $email        = htmlspecialchars($this->input->post('email'));
            $no_hp             = htmlspecialchars($this->input->post('no_hp'));
            $password          = md5($this->input->post('password'));

            $data = array(
                'nama'      => $nama,
                'email'    => $email,
                'no_hp'     => $no_hp,
                'password'         => $password,
            );

            $this->sewa_model->insert_data($data, 'user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_user');
        }
    }

    public function update_user($id)
    {

        $where = array('id_user' =>$id);
        $data['user'] = $this->db->query("SELECT * FROM user WHERE id_user = '$id' ")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_user', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function update_user_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_user;
        } else {
            $id                     = $this->input->post('id_user');
            $nama                   = htmlspecialchars($this->input->post('nama'));
            $email                  = htmlspecialchars($this->input->post('email'));
            $no_hp                  = htmlspecialchars($this->input->post('no_hp'));
            $password               = md5($this->input->post('password'));

            $data = array(
                'nama'      => $nama,
                'email'    => $email,
                'no_hp'     => $no_hp,
                'password'  => $password,
            );

            $where = array(
                'id_user' => $id
            );
            $this->sewa_model->update_data('user', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_user');
        }
    }

    public function cari()
    {
        $keyword       = $this->input->post('keyword');
        $data['user'] = $this->sewa_model->get_keyword_user($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required',  array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email ini sudah terdaftar!', 'required' => '%s Harus Diisi !!!']);
        $this->form_validation->set_rules('no_hp', 'No. Telepon', 'required|numeric|min_length[10]|max_length[13]',  array('required' => '%s Harus Diisi !!!', 'numeric' => '%s Angka 0-9', 'min_length' => '%s Minimal 10 digit', 'max_length' => '%s Maksimal 13 digit'));
        $this->form_validation->set_rules('password', 'Password', 'required',  array('required' => '%s Harus Diisi !!!'));
    }
}

/* End of file data_user.php */
