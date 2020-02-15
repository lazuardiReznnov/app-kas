<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi_model extends CI_Model
{
    private $table = 'transaksi';
    public function gettransall()
    {
        $this->db->select('transaksi.id_kas');
        $this->db->select('transaksi.id_akun');
        $this->db->select('transaksi.tgl_kas');
        $this->db->select('transaksi.ket_kas');
        $this->db->select('transaksi.type');
        $this->db->select('transaksi.jml');
        $this->db->select('akun.id_akun');
        $this->db->select('akun.nama_akun');
        $this->db->from($this->table);
        $this->db->join('akun', 'transaksi.id_akun = akun.id_akun', 'inner');
        return $this->db->get()->result_array();
    }
}
