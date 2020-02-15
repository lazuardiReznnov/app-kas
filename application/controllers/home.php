<?php
defined('BASEPATH') or exit('No direct script access allowed');
class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $controller = 'home/index';
        $data['title'] = 'Home';
        $this->templates->loadTemp($controller, $data);
    }
}
