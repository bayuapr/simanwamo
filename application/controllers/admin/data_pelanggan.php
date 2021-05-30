<?php

defined('BASEPATH') or exit('No direct script access allowed');

class data_pelanggan extends CI_Controller
{

    public function index()
    {
        $data['pelanggan'] = $this->sewa_model->get_data('pelanggan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_pelanggan', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_pelanggan()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_pelanggan');
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_pelanggan_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_pelanggan();
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
            Data Pelanggan Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_pelanggan');
        }
    }

    public function update_pelanggan($id)
    {
        $where = array('id_pelanggan' => $id);
        $data['pelanggan'] = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$id' ")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_pelanggan', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function update_pelanggan_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_pelanggan;
        } else {
            $id                     = $this->input->post('id_pelanggan');
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

            $where = array(
                'id_pelanggan' => $id
            );
            $this->sewa_model->update_data('pelanggan', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelanggan Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_pelanggan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('gender', 'Gender', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi !!!'));
    }

    public function delete_pelanggan($id)
    {
        $where = array('id_pelanggan' => $id);
        $this->sewa_model->delete_data($where, 'pelanggan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Pelanggan Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_pelanggan');
    }

    public function cari()
    {
        $keyword       = $this->input->post('keyword');
        $data['pelanggan'] = $this->sewa_model->get_keyword_pelanggan($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_pelanggan', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }
}

/* End of file data_pelanggan.php */
