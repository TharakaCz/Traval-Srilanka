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
        $this->load->model('User_Modle');
        $responce =$this->User_Modle->updateUser();

        if ($responce == 1){
            $this->session->set_flashdata('edone','Profile Update Succsessfully');
            redirect('Profile/userProfile');
        }else{
            $this->session->set_flashdata('eerror','System Error Occurd !');
            redirect('Profile/userProfile');
        }
    }
}