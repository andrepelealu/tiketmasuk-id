<?php
class User_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();

  }

  public function insert_user()
  {
    $this->load->helper('string');
    $_SESSION['token'] = random_string('alnum',16);

    $data = [
      'email'     => $this->input->post('email'),
      'nama'      => $this->input->post('nama'),
      'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'token'     => $_SESSION['token']
    ];
    $this->db->insert('users', $data);
  }

  public function get_user($key, $value){
    $query = $this->db->get_where('users',array($key=>$value));
    if(!empty($query->row_array())){
      return $query->row_array();
    }
    return false ;
  }
  public function get_event($key, $value){
    $query = $this->db->get_where('event',array($key=>$value));
    if(!empty($query->row_array())){
      return $query->row_array();
    }
    return false ;
  }
  ///update role setelah klik email verifikasi
  public function update_role($user_id,$role_nr)
  {
    $data = array('role'=> $role_nr);
    $this->db->where('id',$user_id);
    return $this->db->update('users',$data);

  }
  public function is_loggedIn(){
    if(!isset($_SESSION['logged_in'])){
      return false;
    }
    return true;
  }
  public function addevent()
  {
    // $this->load->helper('string');
    // $_SESSION['token'] = random_string('alnum',16);

    $data = [


      'nama_penyelenggara'          => $this->input->post('nama'),
      'user'                        => $this->input->post('nama_'),
      'nama_acara'                  => $this->input->post('acara'),
      'tanggal_acara'               => $this->input->post('tanggal_mulai'),
      'waktu_mulai'                 => $this->input->post('tanggal_selesai'),
      'waktu_selesai'               => $this->input->post('mulai'),
      'tempat'                      => $this->input->post('selesai'),
      'deskripsi'                   => $this->input->post('deskripsi'),
      'kuota_tiket'                 => $this->input->post('kuota_tiket'),
      'tanggal_jual_mulai'          => $this->input->post('tanggal_jual_mulai'),
      'tanggal_jual_selesai'        => $this->input->post('tanggal_jual_selesai'),
      'harga_tiket'                 => $this->input->post('harga_tiket')

    ];
    $bisa = $this->db->insert('event', $data);
    if($bisa){
      echo '<script language="javascript">';
      echo 'if (confirm("Event Berhasil di Buat !")) {
          location.replace("addevent")2
        }';
      echo '</script>';
      //
      //redirect('profile');
    }else{
      echo '<script language="javascript">';
      echo 'if (confirm("Event Gagal di Buat !")) {
          location.replace("addevent")
        }';
      echo '</script>';
    }
  }
  public function tampiluser()
  {
    return $this->db->get('users');

  }
}

 ?>
