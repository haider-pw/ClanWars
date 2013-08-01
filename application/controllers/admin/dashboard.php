<?php
/**
 * Created by JetBrains PhpStorm.
 * User: SBPS
 * Date: 7/31/13
 * Time: 12:37 PM
 * To change this template use File | Settings | File Templates.
 */

class Dashboard extends Backend_Controller{
    public function __construct(){
        parent:: __construct();
    }
    function index(){
        $table='cw_menu';
        $data=$this->Common_Model->get($table);
        print_r($data);
        exit();
        $this->load->view('admin/main');
    }
}