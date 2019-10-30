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
	    $this->load->view('postContent');
    }


}
