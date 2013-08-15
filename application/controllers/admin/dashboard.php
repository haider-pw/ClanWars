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
        $PTable='cw_tabs';
        $columns=array('cw_tabs.Name','Description');
        $group_by='Description';
        $joins = array(
            array(
                'table'    => 'cw_menu',
                'condition' => 'cw_tabs.ID = cw_menu.TabID',
                'jointype'  => 'INNER'
            )
        );
        $table='cw_menu';
        $data['menus']=$this->Common_Model->get($table);
        //Getting Data for Tabs, should show all the Tabs which have any menus
        $table='cw_tabs';
        $data['tabs']=$this->Common_Model->joined_get_by($columns,$PTable,$joins,$where='',$group_by);
        //$all_data['all']=array($data,$tabs_data);
        $this->load->view('admin/main',$data);
    }
}