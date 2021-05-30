<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class data_servis_pajak extends CI_Controller {

    public function index()
    {
        $data['servis_pajak'] = $this->sewa_model->get_data('servis_pajak')->result();
        $data['mobil'] = $this->sewa_model->get_data('mobil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_servis_pajak', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_servis_pajak()
    {
        $data['mobil'] = $this->sewa_model->get_data('mobil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_servis_pajak', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function tambah_servis_pajak_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_servis_pajak();
        } else {
            $merek             = htmlspecialchars($this->input->post('merek'));
            $no_plat           = htmlspecialchars($this->input->post('no_plat'));
            $tanggal           = htmlspecialchars($this->input->post('tanggal'));
            $servis            = htmlspecialchars($this->input->post('servis'));
            $pajak             = htmlspecialchars($this->input->post('pajak'));
            $total_biaya       = htmlspecialchars($this->input->post('total_biaya'));
            $nama_supir       = htmlspecialchars($this->input->post('nama_supir'));


            $data = array(
                'merek'         => $merek,
                'no_plat'       => $no_plat,
                'tanggal'       => $tanggal,
                'servis'        => $servis,
                'pajak'         => $pajak,
                'total_biaya'   => $total_biaya,
                'nama_supir'   => $nama_supir,
            );

            $this->sewa_model->insert_data($data, 'servis_pajak');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data servis_pajak Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_servis_pajak');
        }
    }

    public function update_servis_pajak($id)
    {
        $where = array('id_sp' => $id);
        $data['servis_pajak'] = $this->db->query("SELECT * FROM servis_pajak WHERE id_sp = '$id' ")->result();
        $data['mobil'] = $this->sewa_model->get_data('mobil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_servis_pajak', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function update_servis_pajak_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_servis_pajak;
        } else {
            $id                = $this->input->post('id_sp');
            $merek             = htmlspecialchars($this->input->post('merek'));
            $no_plat           = htmlspecialchars($this->input->post('no_plat'));
            $tanggal           = htmlspecialchars($this->input->post('tanggal'));
            $servis            = htmlspecialchars($this->input->post('servis'));
            $pajak             = htmlspecialchars($this->input->post('pajak'));
            $total_biaya       = htmlspecialchars($this->input->post('total_biaya'));

            $data = array(
                'merek'         => $merek,
                'no_plat'       => $no_plat,
                'tanggal'       => $tanggal,
                'servis'        => $servis,
                'pajak'         => $pajak,
                'total_biaya'   => $total_biaya,
            );

            $where = array(
                'id_sp' => $id
            );
            $this->sewa_model->update_data('servis_pajak', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Servis Pajak Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_servis_pajak');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('merek', 'Merek Mobil', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('no_plat', 'Nomor Plat', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('servis', 'Servis', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('pajak', 'Pajak', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('total_biaya', 'Total Biaya', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('nama_supir', 'Nama Supir', 'required', array('required' => '%s Harus Diisi !!!'));
    }

    public function delete_servis_pajak($id)
    {
        $where = array('id_sp' => $id);
        $this->sewa_model->delete_data($where, 'servis_pajak');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Servis Pajak Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_servis_pajak');
    }

    public function cari()
    {
        $keyword       = $this->input->post('keyword');
        $data['servis_pajak'] = $this->sewa_model->get_keyword_servis_pajak($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_servis_pajak', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

}

/* End of file data_sevis_pajak.php */

?>