<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstPage extends CI_Controller
{

  public function __construct() {
          parent::__construct();
            $this->load->model('FirstPageDAO');



  }
  public function index()
  	{
      $this->load->view('templates/header');
      $this->load->view('pages//FirstPage/FirstPage');
      $this->load->view('pages/FirstPage/TopBar');
      $this->load->view('pages/FirstPage/LoginForm');
  		$this->load->view('templates/footer');


  	}
  public function login()
    {
      $user = array
      (
        'login'=>$this->input->post('login'),
        'pass'=>$this->input->post('pass')
      );
      $this->FirstPageDAO->login($user);
    }
}
