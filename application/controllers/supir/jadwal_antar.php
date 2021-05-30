<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal_antar extends CI_Controller {

    public function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, pelanggan pg WHERE tr.id_mobil=mb.id_mobil AND tr.id_pelanggan=pg.id_pelanggan")->result();
        $this->load->view('templates_supir/header');
        $this->load->view('templates_supir/sidebar');
        $this->load->view('supir/jadwal_antar', $data);
        $this->load->view('templates_supir/footer');
        $this->load->view('templates_supir/wrapper');

        // $this->load->view('templates_supir/wrapper');
    }

}

/* End of file jadwal.php */

?>