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
               redirect('Home/postContent');
            }else{
                $this->session->set_flashdata('msg','System Error Occurd! Content Send Faild');
                redirect('Home/postContent');
            }
        }
    }

    public function user_status(){
        $this->load->model('Content_Model');
        $content['data'] =$this->Content_Model->getContents();
        $this->load->view('userPost',$content);

    }

    public function delete($pid){
        $this->load->model('Content_Model');
        $result = $this->Content_Model->deleteContent($pid);

        if ($result == 1){
            $this->session->set_flashdata('dmsg','Your Post Delete Succsess');
            redirect('Content/user_status');
        }else{
            $this->session->set_flashdata('derror','System Error Occuerd !');
            redirect('Content/user_status');
        }
    }

    public function editPost($pid){

        $this->load->model('Content_Model');
        $result['data'] =$this->Content_Model->getPost($pid);
        $this->load->model('District_Model');
        $result['district']=$this->District_Model->getAllDistrict();

        if ($result != null){

            $this->load->view('editPost',$result);
        }else{
            echo "Data Error";
        }
    }


    public function updatePost($pid){
        $this->load->model('Content_Model');
        $responce =$this->Content_Model->update_data($pid);

        if ($responce == 1){
            $this->session->set_flashdata('usuccsess','Post Edit Succsessfully');
            redirect('Content/user_status');
        }else{
            $this->session->set_flashdata('uerror','System Error Occurd !');
            redirect('Content/user_status');
        }
    }

    public function getPostByDsName(){
        $name=$this->input->post('district');
        $this->load->model('District_Model');
        $result['data']=$this->District_Model->getAllDistrict();
        $this->load->model('Content_Model');
        $result['post'] =$this->Content_Model->getPostByDistrictName($name);
        $this->load->view('travelPlaces',$result);
    }
}