<?php
defined('BASEPATH') or exit('No direct script access allowed');

class templates
{
    protected $_Ci;

    public function __construct()
    {
        $this->_ci = &get_instance();
    }
    public function loadTemp($controler, $data)
    {
        $this->_ci->load->view('templates/header', $data);
        //$this->_ci->load->view('templates/sidebar', $data);
        //$this->_ci->load->view('templates/topbar', $data);
        $this->_ci->load->view($controler, $data);
        $this->_ci->load->view('templates/footer');
    }
}
