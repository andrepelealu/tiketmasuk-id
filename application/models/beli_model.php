<?php
/**
 *
 */
class Beli_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function cek_tiket($id){
    $query = $this->db->get_where('event',array('id_event'=>$id));
    if(!empty($query->row())){
      $a = $query->row();
      return $a->kuota_tiket;
    }
    return false ;
  }
  public function ambilharga($id){
    $query = $this->db->get_where('event',array('id_event'=>$id));
    if(!empty($query->row())){
      $a= $query->row();
      return $a->harga_tiket;
    }
    return false ;
  }
  public function beli($id,$harga){
    // $acara = $this->input->post('acara');
    // $slug = str_replace(" ","-",$acara);



    $cust = [
      'nama_cust'                  => $this->input->post('nama_cust'),
      'email'                      => $this->input->post('email_cust'),
      'no_hp'                      => $this->input->post('hp_cust'),
      'jml_tiket'                  => $this->input->post('tiket_cust'),
      'id_event'                   => $id,
      'harga_tiket'                   => $harga
      // 'status_pembayaran'          => $this->input->post('tanggal_mulai'),
      // 'status_cekin'               => $this->input->post('tanggal_mulai'),
      // 'status_pendaftaran'      => $this->input->post('tanggal_selesai'),
    ];
    $bisa = $this->db->insert('penjualan', $cust);
    //select from event where id_event = $id
    if($bisa){
      // get id terbaru -> lempar ke link -> redirect halaman penjualan
      // redirect('sukses/'.$cust[id_event]);
      echo 'yeee';
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
public function kurangitiket($id){

}

}


?>
