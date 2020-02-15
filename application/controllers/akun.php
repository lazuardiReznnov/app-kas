<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model', 'akun');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('id_akun', 'Kode Akun', 'required');
        $this->form_validation->set_rules('nama_akun', 'Nama Akun', 'required');
        $this->form_validation->set_rules('ket_akun', 'Keterangan Akun', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Akun';
            $data['list_akun'] = $this->akun->getallAkun();
            $controler = 'akun/index';
            $this->templates->loadTemp($controler, $data);
        } elseif ($this->akun->nameExist()) {
            $data['title'] = ' AKUN';
            $data['list_akun'] = $this->akun->getallAkun();
            $controler = 'akun/index';
            $this->templates->loadTemp($controler, $data);
            $this->session->set_flashdata('error', 'Terdaftar');
        } else {
            $this->akun->addAkun();
            $this->session->set_flashdata('success', 'Ditambahkan');
            redirect('akun/index');
        }
    }
    public function detailakun($id_akun)
    {
        $data['title'] = 'Detail Akun';
        $data['detail_akun'] = $this->akun->getAkunById($id_akun);
        $controler = 'akun/detailakun';
        $this->templates->loadTemp($controler, $data);
    }
    public function editakun($id_akun)
    {
        $this->form_validation->set_rules('id_akun', 'Kode Akun', 'required');
        $this->form_validation->set_rules('nama_akun', 'Nama Akun', 'required');
        $this->form_validation->set_rules('ket_akun', 'Keterangan Akun', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'EDIT AKUN';
            $data['list_akun'] = $this->akun->getAkunById($id_akun);
            $controler = 'akun/editakun';
            $this->templates->loadTemp($controler, $data);
        } else {
            $this->akun->updateakun();
            $this->session->set_flashdata('success', 'Diperbaharui');
            redirect('akun/detailakun/' . $id_akun);
        }
    }
    public function hapusakun($id_akun)
    {
        $this->akun->hapusakun($id_akun);
        $this->session->set_flashdata('success', 'Dihapus');
        redirect('akun/index');
    }
}
