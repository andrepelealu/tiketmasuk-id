<h1>Detail Acara</h1>
<?php echo $event['nama_acara']?><br>
<?php echo $event['nama_penyelenggara']?><br>
<?php echo $event['tanggal_acara']?><br>
<?php echo $event['tanggal_acara_selesai']?><br>
<?php echo $event['waktu_mulai']?><br>
<?php echo $event['waktu_selesai']?><br>
<?php echo $event['tempat']?><br>
<?php echo $event['deskripsi']?><br>
<?php echo $id= $event['id_event']?><br>
<?php echo $harga= $event['harga_tiket']?><br>


<?php echo form_open('beli/'.$id) ?>

  <input type="text" name="nama_cust" value="nama">
  <input type="email" name="email_cust" value="email">
  <input type="text" name="hp_cust" value="no hp">
  <input type="number" name="tiket_cust" value="jumlah tiket">
  <input type="submit" name="submit" value="beli" class="btn btn-success btn-lg btn-block">


<?php form_open() ?>
