<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{
    protected $table = 'akun';
    public function getallAkun()
    {
        return $this->db->get($this->table)->result_array();
    }
    public function addAkun()
    {
        $data = [
            "id_akun" => $this->input->post('id_akun', true),
            "nama_akun" => $this->input->post('nama_akun', true),
            "ket_akun" => $this->input->post('ket_akun', true)
        ];
        $this->db->insert($this->table, $data);
    }
    public function getAkunById($id_akun)
    {
        return $this->db->get_where($this->table, array('id_akun' => $id_akun))->row();
    }
    public function updateakun()
    {
        $data = [
            "id_akun" => $this->input->post('id_akun', true),
            "nama_akun" => $this->input->post('nama_akun', true),
            "ket_akun" => $this->input->post('ket_akun', true)
        ];
        $this->db->where('id_akun', $this->input->post('id_akun', true));
        $this->db->update($this->table, $data);
    }
    public function hapusakun($id_akun)
    {
        $this->db->where('id_akun', $id_akun);
        $this->db->delete($this->table);
    }
}
