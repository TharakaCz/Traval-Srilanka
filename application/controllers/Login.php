<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/18/2019
 * Time: 3:45 PM
 */

class Login extends CI_Controller
{

    public function loginUser(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            $this->load->model('User_Modle');
            $result = $this->User_Modle->loginUser();

            if ($result != false){

              $user_data = array(
                  'id' => $result->pid,
                  'fname'=> $result->frist_name,
                  'lname'=>$result->last_name,
                  'email' =>$result->email,
                  'address'=>$result->address,
                  'password'=>$result->password,
                  'active'=>true,
                  'role'=>$result->role
              );

              $this->session->set_userdata($user_data);


                redirect('HOME/index');
            }else{
                $this->session->set_flashdata('msg','Login Faild Try Again');
                redirect('HOME/login');
            }
        }
    }

    public function userlogout(){

        $this->session->unset_userdata('id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('address');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('active');

        redirect('HOME/login');
    }
}