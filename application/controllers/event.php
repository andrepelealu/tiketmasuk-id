<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('beli_model');
	}
	public function hapusevent($id){
	if(!$this->user_model->is_loggedIn())  {
				redirect('login');
			}
	$this->user_model->hapusevent($id);
	}
	public function tampil($user,$slug){
		if(!$this->user_model->is_loggedIn())  {
				redirect('login');
			}
			$data2['event'] = $this->user_model->get_event2('user',$_SESSION['nama']);
			$data['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
			// $data2['id'] = $this->user_model->get_new_id($user);
			$slug_['slug'] = $slug;
			$this->load->view('layout/header_profile',$data);
			$this->load->view('layout/sidebar');

			$this->load->view('user/event',$data2);
			$this->load->view('layout/footer');


	}
	public function user($id){
		$user 	= $this->user_model->get_event('id_event',$id);
		if(!$user){
			die('email gada');
		}else {
			$data['event'] = $this->user_model->get_event('id_event',$id);
			$this->load->view('user/showevent',$data);
		}
	}
	public function beli($id){
		if(!$this->user_model->is_loggedIn())  {
				redirect('login');
			}else {
			$harga = $this->beli_model->ambilharga($id);
			$cek = $this->beli_model->cek_tiket($id);
			if($cek<0){
				echo 'tiket habis';
			}else{
				$this->beli_model->beli($id,$harga);
				// $this->beli_model->kurangitiket($id);
				//
			}
		}
	}
	public function edit($id){
		if(!$this->user_model->is_loggedIn())  {
				redirect('login');
			}
		$this->form_validation->set_rules('nama','Nama Penyelenggara');
		$this->form_validation->set_rules('acara','Nama Acara','required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Pelaksanaan','required');
		$this->form_validation->set_rules('tanggal_selesai','Tanggal Selesai Acara','required');
		$this->form_validation->set_rules('mulai','Waktu Mulai Acara','required');
		$this->form_validation->set_rules('selesai','Waktu Selesai Acara','required');
		$this->form_validation->set_rules('tempat','Tempat Pelaksanaan','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi Acara','required');
		$this->form_validation->set_rules('kuota_tiket','Kuota Tiket','required');
		$this->form_validation->set_rules('tanggal_jual_mulai','Tanggal Penjualan','required');
		$this->form_validation->set_rules('tanggal_jual_selesai','Tanggal Penutupan Penjualan Tiket','required');
		$this->form_validation->set_rules('harga_tiket','Harga Tiket , Jika acara gratis , isi dengan angka 0','required');
		if($this->form_validation->run() === false){
			$data['event'] = $this->user_model->get_event('id_event',$id);
			$data2['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
			$this->load->view('layout/header_profile',$data2);
			$this->load->view('layout/sidebar',$data);
			$this->load->view('user/edit',$data);
			$this->load->view('layout/footer');
		}else {
			$this->user_model->editevent($id);
		}
	}
}
