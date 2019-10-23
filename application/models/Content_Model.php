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

        $config['upload_path'] = './uploads/images';
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
            'user_id'=>$this->session->userdata('id')

        ];

        $this->db->insert('post',$content);
    }
}