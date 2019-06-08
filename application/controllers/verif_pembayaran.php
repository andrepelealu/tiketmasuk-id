<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class verif_pembayaran EXTENDS CI_Controller{
  	public function __construct()
  	{
  		parent::__construct();
  		$this->load->model('user_model');
  	}
    
  public function tampil(){
    if(!$this->user_model->is_loggedIn())  {
        redirect('login');
      }
      $data['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
      $data2['event'] = $this->user_model->get_event2('user',$_SESSION['nama']);
      $this->load->view('layout/header_profile',$data);
      $this->load->view('layout/sidebar',$data);
      $this->load->view('user/profile',$data2);
      $this->load->view('layout/footer');
  }
}
