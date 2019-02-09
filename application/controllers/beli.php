<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beli extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
  public function profile(){
  if(!$this->user_model->is_loggedIn())  {
      redirect('login');
    }
    $data['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
    $this->load->view('layout/header_profile',$data);
		$this->load->view('layout/sidebar',$data);
    $this->load->view('user/profile',$data);
		$this->load->view('layout/footer');
  }


	public function addevent(){
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
			$data['user'] = $this->user_model->get_user('id',$_SESSION['user_id']);
			$this->load->view('layout/header_profile',$data);
			$this->load->view('layout/sidebar',$data);
			$this->load->view('user/addevent');
			$this->load->view('layout/footer');
		}else {
			$this->user_model->addevent();

		}
}


}
