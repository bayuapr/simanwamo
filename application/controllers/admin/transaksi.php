<?php

defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
{

    public function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan")->result();
        $data['supir'] = $this->sewa_model->get_data('supir')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');

    }

    public function pembayaran($id)
    {
        $where = array('id_sewa' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_sewa='$id' ")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cek_pembayaran()
    {
        $id                 = $this->input->post('id_sewa');
        $status_pembayaran  = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran' => $status_pembayaran
        );

        $where = array(
            'id_sewa' => $id
        );

        $this->sewa_model->update_data('transaksi', $data, $where);
        redirect('admin/transaksi');
    }

    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $file_pembayaran = $this->sewa_model->download_pembayaran($id);

        $file = 'assets/upload/' . $file_pembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }

    public function transaksi_selesai($id)
    {
        $where = array('id_sewa' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_sewa='$id' ")->result();
        $data['supir'] = $this->sewa_model->get_data('supir')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function transaksi_selesai_aksi()
    {
        $id                      = $this->input->post('id_sewa');
        $tanggal_pengembalian    = $this->input->post('tanggal_pengembalian');
        $status_sewa             = $this->input->post('status_sewa');
        $status_pengembalian     = $this->input->post('status_pengembalian');
        $tanggal_kembali         = $this->input->post('tanggal_kembali');
        $denda                   = $this->input->post('denda');
        $jam_sewa                = $this->input->post('jam_sewa');
        $jam_kembali             = $this->input->post('jam_kembali');
        $jam_pengembalian        = $this->input->post('jam_pengembalian');
        $alamat_detail           = $this->input->post('alamat_detail');
        $nama_supir            = htmlspecialchars($this->input->post('nama_supir'));

        

        $x                       = strtotime($tanggal_pengembalian);
        $y                       = strtotime($tanggal_kembali);
        $selisih                 = abs($x - $y)/(60*60*24);
        $total_denda             = $selisih * $denda;
        

        $data = array(
            'tanggal_pengembalian'=> $tanggal_pengembalian,
            'status_sewa'         => $status_sewa,
            'status_pengembalian' => $status_pengembalian,
            'total_denda'         => $total_denda,
            'jam_sewa'            => $jam_sewa,
            'jam_kembali'         => $jam_kembali,
            'jam_pengembalian'    => $jam_pengembalian,
            'alamat_detail'       => $alamat_detail,
            'nama_supir'        => $nama_supir,

        );

        $where = array(
            'id_sewa' => $id
        );

        $this->sewa_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Transaksi Berhasil di Update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/transaksi');
        
    }

    public function batal_transaksi($id)
    {
        $where = array('id_sewa' => $id);
        $data  = $this->sewa_model->get_where($where, 'transaksi')->row();

        $where2 = array('id_mobil' => $data->id_mobil);
        $data2  = array('status' => '1');

        $this->sewa_model->update_data('mobil', $data2, $where2);
        $this->sewa_model->delete_data($where, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Berhasil dibatalkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/transaksi');
    }
}

/* End of file transaksi.php */
