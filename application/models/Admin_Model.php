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
        }else{
            echo ('error');
        }



    }
}