<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper('user');
        $this->load->model('Common_Model');
    }
}