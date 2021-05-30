<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sewa_model extends CI_Model

{
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_mobil($id)
    {
        $hasil = $this->db->where('id_mobil', $id)->get('mobil');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function cek_login()
    {
        $email         = set_value('email');
        $password      = set_value('password');

        $result = $this->db->where('email', $email)
            ->where('password', md5($password))
            ->limit(1)
            ->get('pelanggan');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where(array(
            'email' => $email,
            'password' => $password
        ));
        return $this->db->get()->row();
    }

    public function login_admin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }

    public function login_supir($email, $password)
    {
        $this->db->select('*');
        $this->db->from('supir');
        $this->db->where(array(
            'email' => $email,
            'password' => $password
        ));
        return $this->db->get()->row();
    }

    public function update_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function download_pembayaran($id)
    {
        $query = $this->db->get_where('transaksi', array('id_sewa' => $id));
        return $query->row_array();
    }

    public function total_mobil()
    {
        return $this->db->get('mobil')->num_rows();
    }

    public function total_pelanggan()
    {
        return $this->db->get('pelanggan')->num_rows();
    }

    public function total_transaksi()
    {
        return $this->db->get('transaksi')->num_rows();
    }

    public function total_supir()
    {
        return $this->db->get('supir')->num_rows();
    }

    public function total_type()
    {
        return $this->db->get('type')->num_rows();
    }

    public function get_keyword_mobil($keyword)
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->like('merek', $keyword);
        $this->db->or_like('no_plat', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_type($keyword)
    {
        $this->db->select('*');
        $this->db->from('type');
        $this->db->like('kode_type', $keyword);
        $this->db->or_like('nama_type', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_pelanggan($keyword)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_supir($keyword)
    {
        $this->db->select('*');
        $this->db->from('supir');
        $this->db->like('nama_lengkap', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_servis_pajak($keyword)
    {
        $this->db->select('*');
        $this->db->from('servis_pajak');
        $this->db->like('merek_mobil', $keyword);
        $this->db->or_like('nomor_plat', $keyword);
        return $this->db->get()->result();
    }

    public function hapusFile($id)
    {
        $this->db->where('id_mobil', $id);
        return $this->db->delete('');
    }
    // public function get_mobil_keyword($keyword)
    // {
    //     $this->db->select('*');
    //     $this->db->from('mobil');
    //     $this->db->like('merek', $keyword);
    //     $this->db->or_like('no_plat', $keyword);
    //     return $this->db->get()->result();
    // }
}

/* End of file sewa_model.php */
