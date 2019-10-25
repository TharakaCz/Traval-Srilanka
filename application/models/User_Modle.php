<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/18/2019
 * Time: 7:28 PM
 */

class User_Modle extends CI_Model
{

    public function registorUserData(){

        $data = array(
            'frist_name'=> $this->input->post('fname',TRUE),
            'last_name' => $this->input->post('lname',TRUE),
            'address' => $this->input->post('address',TRUE),
            'email' => $this->input->post('email',TRUE),
            'password' => sha1($this->input->post('password',TRUE)),
            'role' => $role ='user'
        );

        $this->db->insert('user',$data);
    }

    public function loginUser(){

       $email = $this->input->post('email');
       $password = sha1($this->input->post('password'));

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $respond = $this->db->get('user');

        if ($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            echo false;
        }
    }
}