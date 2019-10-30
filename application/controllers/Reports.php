<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/29/2019
 * Time: 1:08 PM
 */

class Reports extends CI_Controller
{

    public function sendreport(){

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('reason', 'Reason', 'required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('home');
        }else{
          $this->load->model('Report_Model');
          $result = $this->Report_Model->send_report();

          if ($result == 1){
              $this->session->set_flashdata('msg','Report Send Succsess');
              redirect('Home/index');
          }else{
              $this->session->set_flashdata('error','System Error Occurd !');
              redirect('Home/index');
          }
        }

    }
}