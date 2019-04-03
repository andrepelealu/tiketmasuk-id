<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('beli_model');

	}


	public function tampil($user,$slug){
		if(!$this->user_model->is_loggedIn())  {
				redirect('login');
			}
		// $user 	= $this->user_model->get_event('nama_acara',$acara);
		// $user 	= $this->user_model->get_event('id_event',$id);
		//
		// if(!$user){
		// 	die('email gada');
		// }else {
			$data['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
			// $user_ = $user['nama'];
			// $data['event'] = $this->user_model->get_event('id_event',$id);
			$data2['id'] = $this->user_model->get_new_id($user);
			// die('ada');
			$slug_['slug'] = $slug;
			$this->load->view('layout/header_depan',$slug_);
			$this->load->view('layout/sidebar',$data2);
			$this->load->view('user/event',$data);

	}

	public function user($id){
		// $user 	= $this->user_model->get_event('nama_acara',$acara);
		$user 	= $this->user_model->get_event('id_event',$id);

		if(!$user){
			die('email gada');
		}else {
			// $data['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
			// $user_ = $user['nama'];
			$data['event'] = $this->user_model->get_event('id_event',$id);
			// $data2['id'] = $this->user_model->get_new_id($this->user['nama']);
			// die('ada');
			$this->load->view('user/showevent',$data);
		}

	}

	public function beli($id){
		if(!$this->user_model->is_loggedIn())  {
				redirect('login');
			}else {
			$data['harga'] = $this->beli_model->ambilharga($id);
			$cek = $this->beli_model->cek_tiket($id);
			if($cek<0){
				echo 'tiket habis';
			}else{
				$this->beli_model->beli($id);
				$this->beli_model->beli($data);

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
