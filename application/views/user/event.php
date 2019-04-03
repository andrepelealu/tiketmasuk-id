



<p>event anda berhasil dibuat !</p>
<p>berikut adalah halaman penjualan anda ..</p>

<?php  $user = $user['nama']?><br>
<?php  'id = '.$id = $id['id_event']?>
<?php $data2['id'] = $this->user_model->get_new_id($user); ?>
<a href="<?php echo base_url() ?>event/tampil/<?php echo $id.'/'.$slug ?>"><?php echo base_url() ?>event/tampil/<?php echo $id.'/'.$slug ?></a>
