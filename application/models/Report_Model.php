<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 10/29/2019
 * Time: 1:26 PM
 */

class Report_Model extends CI_Model
{

    public function send_report(){

        $data =  array(
            'email' => $this->input->post('email'),
            'subject'=>$this->input->post('subject'),
            'reason'=>$this->input->post('reason'),
            'date'=>date('Y-m-d')
        );

        $result =$this->db->insert('report',$data);

        return $result;
    }

    public function getAllReports(){

        $query = $this->db->query('SELECT * FROM report order by date desc');
        return $query;
    }

    public function deleteReport($pid){

        $query = $this->db->delete('report', array('pid' => $pid));
        return $query;
    }
}