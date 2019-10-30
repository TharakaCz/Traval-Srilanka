<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/30/2019
 * Time: 7:19 AM
 */

class Home_Model extends CI_Model
{

    public function technology(){

        $query = $this->db->query('SELECT * FROM technology');

       return $query;
    }
}