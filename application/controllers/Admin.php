<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/24/2019
 * Time: 7:20 PM
 */

class Admin extends CI_Controller
{

    public function admin_panel(){
        $this->load->model('Admin_Model');
        $result['data'] = $this->Admin_Model->getUsers();

        $this->load->view('adminPanel',$result);

    }
}