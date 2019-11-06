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

        $this->load->model('Report_Model');
        $result['reports']=$this->Report_Model->getAllReports();

        $this->load->model('Comment_Model');
        $result['comment']=$this->Comment_Model->getCommentDesc();

       $this->load->view('adminPanel',$result);

    }

    public function delete_user($pid){

        $this->load->model('Admin_Model');
       $responce = $this->Admin_Model->deleteUser($pid);

        if ($responce == 1){
            $this->session->set_flashdata('msg','Record Delete Succsessfully');
        }else{
            $this->session->set_flashdata('msg','Record Delete Error');
        }
    }

    public function edit_user($pid){
        $this->load->model('Admin_Model');
        $responce['data'] = $this->Admin_Model->editUser($pid);

        if ($responce != null){
            $this->load->view('editUser',$responce);
        }else{
          echo "Data Error";
        }
    }

    public function update_user($pid){
        $this->load->model('Admin_Model');
        $responce = $this->Admin_Model->upadateUser($pid);

       if ($responce == 1){
           $this->session->set_flashdata('msg','Record Update Succsessfully');
           redirect('Admin/admin_panel');
       }else{
           $this->session->set_flashdata('error','Record Update Error');
       }
    }
}