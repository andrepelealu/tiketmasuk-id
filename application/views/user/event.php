
<div class="content-wrapper">
<section = "content">
  <!-- TABLE: LATEST ORDERS -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Rincian Event</b></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <?php if($event == true){
          foreach ($event as $e ):
            $event = $e['id_event'];
            $slug = $e['slug'];
         ?>
<h4>Nama Event : <?php echo $e['nama_acara'] ?></h4>
<h4>Tanggal Pelaksanaan : <?php echo date('d F Y', strtotime($e['tanggal_acara']));  ?>  </h4>
<h4>Waktu Pelaksanaan : <?php echo $e['waktu_mulai'].' - '. $e['waktu_selesai'] ?></h4>
<h4>Tempat Pelaksanaan : <?php echo $e['tempat'] ?></h4>
<h4>Kuota Tiket : <?php echo $e['kuota_tiket'] ?></h4>
<h4>Tanggal Penjualan Mulai : <?php echo date('d F Y', strtotime($e['tanggal_jual_mulai']));  ?></h4>
<h4>Tanggal Penjualan Selesai : <?php echo date('d F Y', strtotime($e['tanggal_jual_selesai']));  ?></h4>
<h4></h4>
<h4>Deskripsi Event : </h4>
<p><?php echo $e['deskripsi'] ?></p>
<h4>Halaman Penjualan : <a href="<?php echo base_url() ?>event/tampil/<?php echo $e['id_event'].'/'.$e['slug'] ?>"><?php echo base_url() ?>event/tampil/<?php echo $e['id_event'].'/'.$e['slug'] ?></a>
</h4>
<?php endforeach;}else echo 'Tidak ada data' ?>

</div>
</div>
</div>

  </section>
