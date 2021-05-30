<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class hubungi extends CI_Controller {

    public function index()
    {
        $data['hubungi'] = $this->sewa_model->get_data('hubungi')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/hubungi', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function kirim_email($id)
    {
        $where = array('id_hubungi' => $id);
        $data['hubungi'] = $this->sewa_model->get_where($where, 'hubungi')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_kirim_email', $data);
        $this->load->view('templates_admin/footer');
        $this->load->view('templates_admin/wrapper');
    }

    public function kirim_email_aksi()
    {
        $to_email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('pesan');
        $config = [
            'mailtype' => 'html',
            'charset'  => 'utf-8',
            'protocol' => 'smtp',
            'smtp_host'=> 'smtp.gmail.com',
            'smtp_user'=> 'byabymin@gmail.com',
            'smtp_pass'=> 'empat522',
            'smtp_cryoto' => 'ssl',
            'smtp_post'=> 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"

        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('byabymin@gmail.com','Admin Sistem Manajeman Penyewaan Mobil Pt.Prasido Dwijaya');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send())
        {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pesan Terkirim!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/hubungi');
        } else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Pesan Tidak Terkirim!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/hubungi');
        }
    }

}

/* End of file Controllername.php */
