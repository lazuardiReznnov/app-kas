<?php
defined('BASEPATH') or exit('No direct script access allowed');

class templates extends CI_Controller{
    public function loadTemp($controler, $data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view($controler, $data);
        $this->load->view('templates/footer');
    }
}