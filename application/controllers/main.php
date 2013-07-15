<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

public function  __construct() {

parent::__construct();

}

    function index()
    {
        $this->load->view('main');
    }

    function login()
    {
        $this->load->view('login_page');
    }

}