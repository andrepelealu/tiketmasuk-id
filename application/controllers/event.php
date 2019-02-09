<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}


	public function tampil($id){
		// $user 	= $this->user_model->get_event('nama_acara',$acara);
		$user 	= $this->user_model->get_event('id_event',$id);

		if(!$user){
			die('email gada');
		}else {
			$data['event'] = $this->user_model->get_event('id_event',$id);
			// die('ada');
			$this->load->view('user/event',$data);

		}


		// if($user['token'] != $token)
		// die('token ga sama');
		// //update role
		// $this->user_model->update_role($user['id'],1);
		//
		// //set sessions
		// $_SESSION['user_id'] = $user['id'];
		// $_SESSION['logged_in'] = true;
		// //redirect
		// redirect('dashboard');
	}




}
