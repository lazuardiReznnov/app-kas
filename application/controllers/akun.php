<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
    }
    public function index()
    {
        $data['title'] = 'Akun';
        $data['list_akun'] = $this->akun_model->getallAkun();
        $controler = 'akun/index';
        $this->templates->loadTemp($controler, $data);
    }
}
