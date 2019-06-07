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
      $this->load->view('pages/FirstPage/LoginForm');
  		$this->load->view('templates/footer');


  	}
}
