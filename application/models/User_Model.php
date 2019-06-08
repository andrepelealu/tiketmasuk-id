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
      return $query->row_array(); /// Hanya menampilkan satu baris
    }
    return false ;
  }
  public function get_event2($key, $value){
    $query = $this->db->get_where('event',array($key=>$value));
    if(!empty($query->row_array())){
      return $query->result_array();
    }
    return false ;
  }
  public function get_new_id($user){

    $this->db->order_by('id_event', 'desc');
    $this->db->limit(1);
    $query = $this->db->get_where('event',array('user'=>$user));
    //$query = $this->db->query("SELECT id_event FROM event WHERE user = $user ORDER BY id_event DESC LIMIT 1");
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
    $acara = $this->input->post('acara');
    $slug = str_replace(" ","-",$acara);

    $data = [


      'nama_penyelenggara'          => $this->input->post('nama'),
      'user'                        => $this->input->post('nama_'),
      'nama_acara'                  => $this->input->post('acara'),
      'tanggal_acara'               => $this->input->post('tanggal_mulai'),
      'tanggal_acara_selesai'       => $this->input->post('tanggal_selesai'),
      'waktu_mulai'                 => $this->input->post('mulai'),
      'waktu_selesai'               => $this->input->post('selesai'),
      'tempat'                      => $this->input->post('tempat'),
      'deskripsi'                   => $this->input->post('deskripsi'),
      'kuota_tiket'                 => $this->input->post('kuota_tiket'),
      'tanggal_jual_mulai'          => $this->input->post('tanggal_jual_mulai'),
      'tanggal_jual_selesai'        => $this->input->post('tanggal_jual_selesai'),
      'harga_tiket'                 => $this->input->post('harga_tiket'),
      'slug'                        => $slug
    ];

    $bisa = $this->db->insert('event', $data);
    if($bisa){
      // get id terbaru -> lempar ke link -> redirect halaman penjualan
      redirect('event/'.$data[user].'/'.$data[slug]);
      // echo '<script language="javascript">';
      // echo 'if (confirm("Event Berhasil di Buat !")) {
      //     location.replace("../event")
      //   }';
      // echo '</script>';
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
  public function editevent($id){
    $data = array(
      'nama_penyelenggara'          => $this->input->post('nama'),
      'user'                        => $this->input->post('nama_'),
      'nama_acara'                  => $this->input->post('acara'),
      'tanggal_acara'               => $this->input->post('tanggal_mulai'),
      'tanggal_acara_selesai'       => $this->input->post('tanggal_selesai'),
      'waktu_mulai'                 => $this->input->post('mulai'),
      'waktu_selesai'               => $this->input->post('selesai'),
      'tempat'                      => $this->input->post('tempat'),
      'deskripsi'                   => $this->input->post('deskripsi'),
      'kuota_tiket'                 => $this->input->post('kuota_tiket'),
      'tanggal_jual_mulai'          => $this->input->post('tanggal_jual_mulai'),
      'tanggal_jual_selesai'        => $this->input->post('tanggal_jual_selesai'),
      'harga_tiket'                 => $this->input->post('harga_tiket')
      // 'slug'                        => $slug
    );

    $this->db->where('id_event', $id);
    $bisa = $this->db->update('event', $data);
    if($bisa){
      // get id terbaru -> lempar ke link -> redirect halaman penjualan
      //redirect('event/'.$data[user].'/'.$data[slug]);
      // echo '<script language="javascript">';
      // echo 'if (confirm("Event Berhasil di edit !")) {';
//       echo '<script language="javascript">';
// echo 'alert("message successfully sent")';
// echo '</script>';
        redirect('edit/'.$id);


      // echo '</script>';

      // redirect('profile');
    }else{
      echo '<script language="javascript">';
      echo 'if (confirm("Event Gagal di update !")) {
          location.replace("edit")
        }';
      echo '</script>';
    }
  }
  public function hapusevent($id){
    $bisa = $this->db->delete('event', array('id_event' => $id));
    if($bisa){
      redirect(base_url('dashboard'));
    }else{
      echo 'gagal';
    }
  }
}

 ?>
