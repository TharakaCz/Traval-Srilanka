<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/30/2019
 * Time: 8:22 AM
 */

class Comment_Model extends CI_Model
{

    public function sendComment(){

        $data = array(
            'email'=>$this->input->post('email'),
            'frist_name'=>$this->input->post('fname'),
            'last_name'=>$this->input->post('lname'),
            'comment'=>$this->input->post('comment')
        );

        $result = $this->db->insert('comment',$data);
        return $result;
    }

    public function getComment(){

        $query = $this->db->query('Select * from comment');
        return $query;
    }

    public function getCommentDesc(){

        $query = $this->db->query('Select * from comment order by pid desc');
        return $query;
    }

    public function deleteComment($pid){

        $query = $this->db->delete('comment', array('pid' => $pid));
        return $query;
    }
}