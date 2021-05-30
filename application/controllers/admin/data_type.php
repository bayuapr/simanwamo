<?php

defined('BASEPATH') or exit('No direct script access allowed');

class data_type extends CI_Controller
{

    public function index()
    {
        $data['type'] = $this->sewa_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_type', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function tambah_type()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_type');
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function tambah_type_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_type();
        } else {
            $kode_type             = htmlspecialchars($this->input->post('kode_type'));
            $nama_type             = htmlspecialchars($this->input->post('nama_type'));

            $data = array(
                'kode_type'         => $kode_type,
                'nama_type'         => $nama_type,
            );
            $this->sewa_model->insert_data($data, 'type');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Type Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_type');
        }
    }

    public function update_type($id)
    {
        $where = array('id_type' => $id);
        $data['type'] = $this->db->query("SELECT * FROM type WHERE id_type= '$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_type', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function update_type_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_type;
        } else {
            $id                    = $this->input->post('id_type');
            $kode_type             = htmlspecialchars($this->input->post('kode_type'));
            $nama_type             = htmlspecialchars($this->input->post('nama_type'));

            $data = array(
                'kode_type'     => $kode_type,
                'nama_type'     => $nama_type,
            );

            $where = array(
                'id_type' => $id
            );
            $this->sewa_model->update_data('type', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Type Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_type');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('nama_type', 'Nama Type', 'required', array('required' => '%s Harus Diisi !!!'));;
    }

    public function delete_type($id)
    {
        $where = array('id_type' => $id);
        $this->sewa_model->delete_data($where, 'type');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Type Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_type');
    }

    public function cari()
    {
        $keyword       = $this->input->post('keyword');
        $data['type'] = $this->sewa_model->get_keyword_type($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_type', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }
}

/* End of file data_type.php */
