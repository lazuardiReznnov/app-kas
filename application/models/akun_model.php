<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{
    protected $table = 'akun';
    public function getallAkun()
    {
        return $this->db->get($this->table)->result_array();
    }
}
