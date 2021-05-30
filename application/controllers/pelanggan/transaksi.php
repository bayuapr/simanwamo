<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

    public function index()
    {
        $pelanggan = $this->session->userdata('id_pelanggan');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan AND pg.id_pelanggan='$pelanggan' ORDER BY id_sewa DESC ")->result();
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/transaksi', $data);
        $this->load->view('templates_pelanggan/footer');
        // $this->load->view('templates_pelanggan/wrapper');

    }

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan AND tr.id_sewa='$id' ORDER BY id_sewa DESC ")->result();
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/pembayaran', $data);
        $this->load->view('templates_pelanggan/footer');
        // $this->load->view('templates_pelanggan/wrapper');

    }

    public function pembayaran_aksi()
    {
        $id = $this->input->post('id_sewa');
        $bukti_pembayaran               = $_FILES['bukti_pembayaran']['name'];
        if ($bukti_pembayaran) {
            $config['upload_path']     = './assets/upload/';
            $config['allowed_types']   = 'pdf|jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti_pembayaran')) {
                $bukti_pembayaran = $this->upload->data('file_name');
                $this->db->set('bukti_pembayaran', $bukti_pembayaran);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'bukti_pembayaran' =>$bukti_pembayaran,
        );

        $where = array(
            'id_sewa' => $id
        );

        $this->sewa_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Bukti Pembayaran Anda Berhasil di Upload!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('pelanggan/transaksi');
    }

    public function cetak_invoice($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan AND tr.id_sewa='$id' ORDER BY id_sewa DESC ")->result();
        $this->load->view('pelanggan/cetak_invoice', $data);
    }

    public function batal_transaksi($id)
    {
        $where = array('id_sewa' => $id);
        $data  = $this->sewa_model->get_where($where, 'transaksi')->row();

        $where2 = array('id_mobil' => $data->id_mobil);
        $data2  = array('status' => '1' );

        $this->sewa_model->update_data('mobil', $data2, $where2);
        $this->sewa_model->delete_data($where, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Berhasil dibatalkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('pelanggan/transaksi'); 
    }
}

/* End of file transaksi.php */
