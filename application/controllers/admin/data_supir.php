<?php

defined('BASEPATH') or exit('No direct script access allowed');

class data_supir extends CI_Controller
{

    public function index()
    {
        $data['supir'] = $this->sewa_model->get_data('supir')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_supir', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_supir()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_supir');
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_supir_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_supir();
        } else {
            $nama_supir             = htmlspecialchars($this->input->post('nama_supir'));
            $email                  = htmlspecialchars($this->input->post('email'));
            $alamat                 = htmlspecialchars($this->input->post('alamat'));
            $gender                 = htmlspecialchars($this->input->post('gender'));
            $no_telepon             = htmlspecialchars($this->input->post('no_telepon'));
            $password               = md5($this->input->post('password'));

            $data = array(
                'nama_supir'        => $nama_supir,
                'email'             => $email,
                'alamat'            => $alamat,
                'gender'            => $gender,
                'no_telepon'        => $no_telepon,
                'password'          => $password,
            );

            $this->sewa_model->insert_data($data, 'supir');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data supir Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_supir');
        }
    }

    public function update_supir($id)
    {
        $where = array('id_supir' => $id);
        $data['supir'] = $this->db->query("SELECT * FROM supir WHERE id_supir = '$id' ")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_supir', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function update_supir_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_supir;
        } else {
            $id                     = $this->input->post('id_supir');
            $nama_supir           = htmlspecialchars($this->input->post('nama_supir'));
            $email                  = htmlspecialchars($this->input->post('email'));
            $alamat                 = htmlspecialchars($this->input->post('alamat'));
            $gender                 = htmlspecialchars($this->input->post('gender'));
            $no_telepon             = htmlspecialchars($this->input->post('no_telepon'));
            $password               = md5($this->input->post('password'));

            $data = array(
                'nama_supir'      => $nama_supir,
                'email'             => $email,
                'alamat'            => $alamat,
                'gender'            => $gender,
                'no_telepon'        => $no_telepon,
                'password'          => $password,
            );

            $where = array(
                'id_supir' => $id
            );
            $this->sewa_model->update_data('supir', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data supir Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_supir');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_supir', 'Nama Lengkap', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('gender', 'Gender', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
    }

    public function delete_supir($id)
    {
        $where = array('id_supir' => $id);
        $this->sewa_model->delete_data($where, 'supir');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data supir Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_supir');
    }
}

/* End of file data_supir.php */
