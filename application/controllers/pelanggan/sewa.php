<?php

defined('BASEPATH') or exit('No direct script access allowed');

class sewa extends CI_Controller
{

    public function tambah_sewa($id)
    {
        $data['detail'] = $this->sewa_model->ambil_id_mobil($id);
        $this->load->view('templates_pelanggan/header');
        $this->load->view('pelanggan/tambah_sewa', $data);
        $this->load->view('templates_pelanggan/footer');
        $this->load->view('templates_pelanggan/wrapper');
    }

    public function tambah_sewa_aksi()
    {

        $id_pelanggan       = $this->session->userdata('id_pelanggan');
        $id_mobil           = $this->input->post('id_mobil');
        $tanggal_sewa       = $this->input->post('tanggal_sewa');
        $jam_sewa           = $this->input->post('jam_sewa');
        $tanggal_kembali    = $this->input->post('tanggal_kembali');
        $supir              = $this->input->post('supir');
        $denda              = $this->input->post('denda');
        $harga              = $this->input->post('harga');
        $alamat_detail      = $this->input->post('alamat_detail');

        $data = array(
            'id_pelanggan'          => $id_pelanggan,
            'id_mobil'              => $id_mobil,
            'tanggal_sewa'          => $tanggal_sewa,
            'jam_sewa    '          => $jam_sewa,
            'tanggal_kembali'       => $tanggal_kembali,
            'jam_kembali    '       => '_',
            'supir'                 => $supir,
            // 'nama_supir'            =>'_',
            'denda'                 => $denda,
            'harga'                 => $harga,
            'alamat_detail'         => $alamat_detail,
            'tanggal_pengembalian'  => '_',
            'status_sewa'           => 'Belum Selesai',
            'status_pengembalian'   => 'Belum Kembali'
        );

        $this->sewa_model->insert_data($data, 'transaksi');
        $status = array(
            'status' => '0'
        );

        $id = array(
            'id_mobil' => $id_mobil
        );

        $this->sewa_model->update_data('mobil', $status, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Berhasil, Silahkan Checkout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('pelanggan/mobil');
    }
}

/* End of file sewa.php */
