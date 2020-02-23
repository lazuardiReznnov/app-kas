<?php
defined('BASEPATH') or exit('No direct script access allowed');
class transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model', 'transaksi');
        $this->load->model('Akun_model', 'akun');
    }

    public function index()
    {
        $data['title'] = 'transaksi';
        $controler = 'transaksi/index';
        $data['list_trans'] = $this->transaksi->gettransall();
        $data['akun'] = $this->akun->getAllAkun();
        $this->templates->loadTemp($controler, $data);
    }
}
