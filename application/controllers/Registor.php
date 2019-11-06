<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/18/2019
 * Time: 3:12 PM
 */

class Registor extends CI_Controller
{

    public function registorUser(){
        $this->form_validation->set_rules('fname', 'Frist Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirmPassword','Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registor');
        }
        else
        {
          $this->load->model('User_Modle');
          $response = $this->User_Modle->registorUserData();

          if (!$response){
              $this->session->set_flashdata('msg','Registor Succsessfully Pleace Login');
              redirect('HOME/login');
          }else{
              $this->session->set_flashdata('error','Registor Faild Try Again');
              redirect('HOME/registor');
          }
        }

    }
}