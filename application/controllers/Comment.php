<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/30/2019
 * Time: 8:21 AM
 */

class Comment extends CI_Controller
{
    public function commentsend(){
        $this->load->model('Comment_Model');
        $responce =$this->Comment_Model->sendComment();

        if ($responce == 1){
            $this->session->set_flashdata('ok','Comment Sent Succsessfully');
            redirect('Home/index');
        }else{
            $this->session->set_flashdata('no','System Error Occuerd !');
            redirect('Home/index');
        }
    }

}