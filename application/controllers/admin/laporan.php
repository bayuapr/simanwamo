<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function index()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/filter_laporan');
            $this->load->view('templates_admin/footer');
            $this->load->view('templates_admin/wrapper');
        }else{
            $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan AND date(tanggal_sewa) >= '$dari' AND date(tanggal_sewa) <= '$sampai' ")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/tampil_laporan', $data);
            $this->load->view('templates_admin/footer');
            $this->load->view('templates_admin/wrapper');
        }
    }

    public function cetak_laporan()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['title'] = "Cetak Laporan Transaksi";
        $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan AND date(tanggal_sewa) >= '$dari' AND date(tanggal_sewa) <= '$sampai' ")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/cetak_laporan', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required', array('required' => '%s Harus Diisi !!!'));
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required', array('required' => '%s Harus Diisi !!!'));
        
    }

}

/* End of file laporan.php */
