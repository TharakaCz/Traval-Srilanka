<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 11/3/2019
 * Time: 2:25 PM
 */

class District_Model extends CI_Model
{

    public function getAllDistrict(){
        $query = $this->db->query('select * from district');
        return $query;

    }
}