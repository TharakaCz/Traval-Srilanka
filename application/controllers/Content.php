<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/23/2019
 * Time: 12:52 PM
 */

class Content extends CI_Controller
{

    public function saveContent(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Location Discription', 'required');
        $this->form_validation->set_rules('location','Input Location Name','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('postContent');
        }else{
            $this->load->model('Content_Model');
            $result = $this->Content_Model->contentModel();
            if ($result == 1){
               $this->session->set_flashdata('msg','Youer Content Send Succsessfully');
            }else{
                $this->session->set_flashdata('msg','System Error Occurd! Content Send Faild');
            }
        }
    }

    public function user_status(){
        $this->load->model('Content_Model');
        $content['data'] =$this->Content_Model->getContents();
        $this->load->view('userPost',$content);

    }
}