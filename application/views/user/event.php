
<div class="content-wrapper">
<section = "content">
  <!-- TABLE: LATEST ORDERS -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Event Berhasil Dibuat</h3>

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
         ?>

<a href="<?php echo base_url() ?>event/tampil/<?php echo $e['id_event'].'/'.$e['slug'] ?>"><?php echo base_url() ?>event/tampil/<?php echo $e['id_event'].'/'.$e['slug'] ?></a>
<?php endforeach;}else echo 'Tidak ada data' ?>

</div>
</div>
</div>

  </section>
