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
            die();
        }else{
            echo false;
            die();
        }
    }

    public function userCount(){

        $query = $this->db->query('SELECT * FROM user');

        return $query->num_rows();

    }

    public function updateUser(){

        $data = array(
            'frist_name'=>$this->input->post('fname'),
            'last_name'=>$this->input->post('lname'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email')
        );
        $this->db->where('pid',$this->session->userdata('id'));
        $responce = $this->db->update('user',$data);

       return $responce;
    }
}