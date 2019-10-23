<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/20/2019
 * Time: 11:08 AM
 */

class Profile extends CI_Controller
{

    public function userProfile(){
       $this->load->view('profile');
    }

    public function editUser(){

        $fname = $this->input->post('fname');
        print_r($fname);
    }
}