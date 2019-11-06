<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/23/2019
 * Time: 12:57 PM
 */

class Content_Model extends CI_Model
{

    public function contentModel(){

        $config['upload_path'] = './uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library('upload',$config);

        $this->upload->do_upload('image');
        $file = $this->upload->data();

        $content = [
            'title'=>$this->input->post('title',TRUE),
            'discription'=>$this->input->post('content',TRUE),
            'location'=>$this->input->post('location',TRUE),
            'image'=>$file['file_name'],
            'map_code'=>$this->input->post('map',TRUE),
            'district_name'=>$this->input->post('district'),
            'user_id'=>$this->session->userdata('id')
        ];

        $responce = $this->db->insert('post',$content);
        return $responce;
        die();
    }

    public function getContents(){

        $pid = $this->session->userdata('id');
        $this->db->where('user_id',$pid);
        $responce = $this->db->get('post');

        return $responce;

        die();
       /* $path =  $config['upload_path'] = './uploads/images/';*/



    }

    public function getContentConut(){

        $query = $this->db->query('Select * from post');
       return $query->num_rows();
       die();
    }

    public function deleteContent($pid){

        $query = $this->db->delete('post', array('pid' => $pid));
        return $query;
        die();
    }

    public function getPost($pid){

        $query = $this->db->query("SELECT * FROM Post where pid={$pid}");
        return $query->row(0);
        die();
    }

    public function update_data($pid){

        $config['upload_path'] = './uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library('upload',$config);

        $this->upload->do_upload('image');
        $file = $this->upload->data();
        $data = $file['file_name'];


        if ($data == ""){
            $updateData=array(
                'title'=>$this->input->post('title'),
                'discription'=>$this->input->post('content'),
                'location'=>$this->input->post('location'),
                'map_code'=>$this->input->post('map'),
                'district_name'=>$this->input->post('district'),
                'image'=>$this->input->post('pastimage')
            );
            $this->db->where('pid',$pid);
            $responce = $this->db->update('post',$updateData);

            return $responce;
            die();
        }else{
            $updateData=array(
                'title'=>$this->input->post('title'),
                'discription'=>$this->input->post('content'),
                'location'=>$this->input->post('location'),
                'map_code'=>$this->input->post('map'),
                'district_name'=>$this->input->post('district'),
                'image'=>$file['file_name']
            );

            $this->db->where('pid',$pid);
            $responce = $this->db->update('post',$updateData);

            return $responce;
            die();
        }

    }

    public function getAllPost(){
        $query = $this->db->query("SELECT * FROM Post");
        return $query;
        die();
    }

    public function getPostByDistrictName($name){

        $this->db->select('*');
        $this->db->where('district_name', $name);
        $query = $this->db->get('post');
        return $query;
        die();
    }
}