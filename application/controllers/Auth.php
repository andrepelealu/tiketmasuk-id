<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
  public function register()
  {

		$this->form_validation->set_rules('email','Email','required|is_unique[users.email]');
		$this->form_validation->set_rules('nama','Nama Penyelenggara','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password2','Konfirmasi Password','required|matches[password]');


		if($this->form_validation->run() === false){
			$this->load->view('layout/header_depan');
			$this->load->view('auth/register');
		}else {
			$this->user_model->insert_user();
			$this->send_email_verification($this->input->post('email'),$_SESSION['token']);
			redirect('login');
		}
  }
	public function send_email_verification($email,$token){
		$this->load->library('email');
		$this->email->from('getin@tiketin.com','Andre');
		$this->email->to($email);
		$this->email->subject('Auth local');
		$this->email->message("
			klik untuk konfirmasi pendaftaran
			<a href='http://localhost/getin.id/auth/verify_register/$email/$token'>Klik disini</a>
		");
		$this->email->set_mailtype('html');
		$this->email->send();
	}

	public function verify_register($email,$token){
		$user = $this->user_model->get_user('email',$email);

		if(!$user)
		die('email gada');

		if($user['token'] != $token)
		die('token ga sama');
		//update role
		$this->user_model->update_role($user['id'],1);

		//set sessions
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['nama'] = $user['nama'];
		$_SESSION['logged_in'] = true;
		//redirect
		redirect('dashboard');
	}
	public function login()
	{
		if($this->user_model->is_loggedIn()){
			redirect('dashboard');
		}
		$this->form_validation->set_rules('email','Email','required|callback_cekemail');
		$this->form_validation->set_rules('password','Password','required');


		if($this->form_validation->run() === false){
			$this->load->view('layout/header_depan');
			$this->load->view('auth/login');
			$this->load->view('layout/footer');
		}else {
			$user = $this->user_model->get_user('email',$this->input->post('email'));
			//save data di sessions
			//set sessions
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['nama'] = $user['nama'];
			$_SESSION['logged_in'] = true;
			//redirect
			redirect('dashboard');
		}
	}
	public function logout(){
		unset($_SESSION['user_id'],$_SESSION['logged_in'] );
		redirect('login');
	}

	public function cekemail($email)
	{
		if(!$this->user_model->get_user('email',$email))
		{
			$this->form_validation->set_message('cekemail','email belum terdaftar');
			return false;
		}
		return true;
	}
	//coming sson
	//forget password

	public function forgetpassword(){

	}
	public function resetpassword(){

	}
}
