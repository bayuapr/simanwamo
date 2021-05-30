<?php

defined('BASEPATH') or exit('No direct script access allowed');

class data_mobil extends CI_Controller
{

    public function index()
    {
        $data['mobil'] = $this->sewa_model->get_data('mobil')->result();
        $data['type'] = $this->sewa_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function tambah_mobil()
    {
        $data['type'] = $this->sewa_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_mobil', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
        
    }

    public function tambah_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_mobil();
        } else {
            $kode_type            = htmlspecialchars($this->input->post('kode_type'));
            $merek                = htmlspecialchars($this->input->post('merek'));
            $no_plat              = htmlspecialchars($this->input->post('no_plat'));
            $warna                = htmlspecialchars($this->input->post('warna'));
            $tahun                = htmlspecialchars($this->input->post('tahun'));
            $status               = htmlspecialchars($this->input->post('status'));
            $harga                = htmlspecialchars($this->input->post('harga'));
            $denda                = htmlspecialchars($this->input->post('denda'));
            $supir                = htmlspecialchars($this->input->post('supir'));
            $tape_cd              = htmlspecialchars($this->input->post('tape_cd'));
            $dongkrak_stang       = htmlspecialchars($this->input->post('dongkrak_stang'));
            $ban_cadangan         = htmlspecialchars($this->input->post('ban_cadangan'));
            $karpet               = htmlspecialchars($this->input->post('karpet'));
            $kunci_roda           = htmlspecialchars($this->input->post('kunci_roda'));
            $tempat_tisue         = htmlspecialchars($this->input->post('tempat_tisue'));

            $gambar               = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path']     = './assets/upload/';
                $config['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Mobil Gagal DiUpload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type'           => $kode_type,
                'merek'               => $merek,
                'no_plat'             => $no_plat,
                'tahun'               => $tahun,
                'warna'               => $warna,
                'status'              => $status,
                'harga'               => $harga,
                'denda'               => $denda,
                'supir'               => $supir,
                'tape_cd'             => $tape_cd,
                'dongkrak_stang'      => $dongkrak_stang,
                'ban_cadangan'        => $ban_cadangan,
                'karpet'              => $karpet,
                'kunci_roda'          => $kunci_roda,
                'tempat_tisue'        => $tempat_tisue,
                'gambar'              => $gambar,
            );

            $this->sewa_model->insert_data($data, 'mobil');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_mobil');
        }
    }

    public function update_mobil($id)
    {
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();
        $data['type'] = $this->sewa_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_mobil', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function update_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_mobil;
        } else {
            $id                   = $this->input->post('id_mobil');
            $kode_type            = htmlspecialchars($this->input->post('kode_type'));
            $merek                = htmlspecialchars($this->input->post('merek'));
            $no_plat              = htmlspecialchars($this->input->post('no_plat'));
            $warna                = htmlspecialchars($this->input->post('warna'));
            $tahun                = htmlspecialchars($this->input->post('tahun'));
            $status               = htmlspecialchars($this->input->post('status'));
            $harga                = htmlspecialchars($this->input->post('harga'));
            $denda                = htmlspecialchars($this->input->post('denda'));
            $supir                = htmlspecialchars($this->input->post('supir'));
            $tape_cd              = htmlspecialchars($this->input->post('tape_cd'));
            $dongkrak_stang       = htmlspecialchars($this->input->post('dongkrak_stang'));
            $ban_cadangan         = htmlspecialchars($this->input->post('ban_cadangan'));
            $karpet               = htmlspecialchars($this->input->post('karpet'));
            $kunci_roda           = htmlspecialchars($this->input->post('kunci_roda'));
            $tempat_tisue         = htmlspecialchars($this->input->post('tempat_tisue'));
            $gambar               = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path']     = './assets/upload/';
                $config['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type'           => $kode_type,
                'kode_type'           => $kode_type,
                'merek'               => $merek,
                'no_plat'             => $no_plat,
                'tahun'               => $tahun,
                'warna'               => $warna,
                'status'              => $status,
                'harga'               => $harga,
                'denda'               => $denda,
                'supir'               => $supir,
                'tape_cd'             => $tape_cd,
                'dongkrak_stang'      => $dongkrak_stang,
                'ban_cadangan'        => $ban_cadangan,
                'karpet'              => $karpet,
                'kunci_roda'          => $kunci_roda,
                'tempat_tisue'        => $tempat_tisue,
                'gambar'              => $gambar,
            );

            $where = array(
                'id_mobil' => $id
            );

            $this->sewa_model->update_data('mobil', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_mobil');
        }
    }

    public function updateUpload()
    {
        $gambar               = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path']     = './assets/upload/';
            $config['allowed_types']   = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Mobil Gagal DiUpload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('merek', 'Merek', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('no_plat', 'No Plat', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('warna', 'Warna', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('status', 'Status', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('harga', 'Harga', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('denda', 'Denda', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('supir', 'Supir', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('tape_cd', 'Tape/CD', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('dongkrak_stang', 'Dongkrak & Stang', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('ban_cadangan', 'Ban Cadangan', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('karpet', 'Karpet', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('kunci_roda', 'Kunci Roda', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('tempat_tisue', 'Tempat Tisue', 'required', array('required' => '%s Harus Diisi !!!'));
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->sewa_model->ambil_id_mobil($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_mobil', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function delete_mobil($id)
    {
        // $where = array('id_mobil' => $id);
        // if ($id->gambar != null) {
        //     $target_file = './assets/upload/' .$id->gambar;
        //     unlink($target_file);
        // }
        $where = array('id_mobil' => $id);
        $this->sewa_model->delete_data($where, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_mobil');
        // $file_name = './assets/upload/'.$data->gambar;
        // if (is_readable($file_name) && unlink($file_name)) {
        //     $delete =$this->sewa_model->ambil_id_mobil($id);
        //     redirect('admin/data_mobil');
        // }else {
        //     echo "Gagal";
        // }
    }

    public function cari()
    {
        $keyword       = $this->input->post('keyword');
        $data['mobil'] = $this->sewa_model->get_keyword_mobil($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

}



/* End of file data_mobil.php */