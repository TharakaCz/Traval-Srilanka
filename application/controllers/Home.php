<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->model('Home_Model');
	    $responce['data']=$this->Home_Model->technology();
	    $this->load->model('Comment_Model');
        $responce['com'] =$this->Comment_Model->getComment();
        $this->load->model('User_Modle');
        $responce['count']=$this->User_Modle->userCount();
        $this->load->model('Content_Model');
       $responce['content']=$this->Content_Model->getContentConut();

		$this->load->view('home',$responce);
	}
	public function login(){
	    $this->load->view('login');
    }
    public function  registor(){
	    $this->load->view('registor');
    }
    public function about(){
	    $this->load->view('aboutUs');
    }
    public function postContent(){
        $this->load->model('District_Model');
        $district['data']=$this->District_Model->getAllDistrict();
	    $this->load->view('postContent',$district);
    }

    public function travelPlaces(){

            $this->load->model('District_Model');
            $result['data']=$this->District_Model->getAllDistrict();
            $this->load->model('Content_Model');
            $result['post']=$this->Content_Model->getAllPost();
            $this->load->view('travelPlaces',$result);

    }


}
