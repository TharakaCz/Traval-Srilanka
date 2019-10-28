<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/25/2019
 * Time: 11:02 AM
 */

class Admin_Model extends CI_Model
{

    public function getUsers(){

        $query = $this->db->query('SELECT * FROM USER');

        if ($query != null){
            return $query;
            die();
        }else{
            echo ('error');
            die();
        }
    }

    public function deleteUser($pid){

        $responce = $this->db->delete('user', array('pid' => $pid));
           return $responce;
    }

    public function editUser($pid){
        $query = $this->db->query("SELECT * FROM USER where pid={$pid}");
        return $query->row(0);
    }

    public function upadateUser($pid){

        $updateData = array(
            'frist_name'=> $this->input->post('fname'),
            'last_name'=> $this->input->post('lname'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email'),
            'role'=>$this->input->post('role')
        );


        $this->db->where('pid',$pid);
        $responce = $this->db->update('user',$updateData);
        return $responce;
    }
}