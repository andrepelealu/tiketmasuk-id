

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Buat Acara
      <!-- <small>Version 1.0</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
<div class="row">
  <div class="col-md-6">
    <br>
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Detail Acara</h3>
      </div>
      <div class="box-body">
        <div class="form-group">
          <?php $id = $event['id_event'] ?>
          <?php echo form_open('edit/'.$id) ?>
    <input type="hidden" class="form-control" name="nama_" value="<?php echo $user['nama']?>">
     <label>Nama Penyelenggara</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-user"></i>
       </div>
       <input type="text" class="form-control" name="nama" value="<?php echo $event['nama_penyelenggara']?>">
     </div>
     <label>Nama Acara</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-user"></i>
       </div>
       <input type="text" class="form-control" name="acara" value="<?php echo $event['nama_acara']?>">
     </div>
     <label>Tanggal Mulai</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-calendar"></i>
       </div>
       <input type="date" class="form-control" name="tanggal_mulai" value="<?php echo $event['tanggal_acara']?>">
     </div>
     <label>Tanggal Selesai</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-calendar"></i>
       </div>
       <input type="date" class="form-control" name="tanggal_selesai" value="<?php echo $event['tanggal_acara_selesai']?>">
     </div>
     <label>Waktu Mulai</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-clock"></i>
       </div>
       <input type="time" class="form-control" name="mulai" value="<?php echo $event['waktu_mulai']?>">
     </div>

     <label>Waktu Selesai</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-clock"></i>
       </div>
       <input type="time" class="form-control" name="selesai" value="<?php echo $event['waktu_selesai']?>">
     </div>

     <label>Tempat Pelaksanaan</label>
     <div class="input-group">
       <div class="input-group-addon">
         <i class="fas fa-globe-asia"></i>
       </div>
       <textarea type="textarea" class="form-control" rows="5" name="tempat"><?php echo $event['tempat']?>
       </textarea>
     </div>

     <!-- /.input group -->
   </div>
      </div>

    </div>

  </div>


  <div class="col-md-6">
    <br>
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Tiketing</h3>
      </div>
      <div class="box-body">

        <label>Kuota Tiket</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fas fa-ticket-alt"></i>
          </div>
          <input type="number" class="form-control" name="kuota_tiket" value="<?php echo $event['kuota_tiket']?>">
        </div>

        <label>Tanggal Penjualan</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="date" class="form-control" name="tanggal_jual_mulai" value="<?php echo $event['tanggal_jual_mulai']?>">
        </div>

        <label>Tanggal Selesai</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="date" class="form-control" name="tanggal_jual_selesai" value="<?php echo $event['tanggal_jual_selesai']?>">
        </div>

        <label>Harga Tiket</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-dollar"></i>
          </div>
          <input type="number" class="form-control" name="harga_tiket" value="<?php echo $event['harga_tiket']?>">
        </div>

      </div>
    </div>
  </div>
  <div class="col-md-6">

    <div class="box box-succes">
      <div class="box-header">
        <h3 class="box-title">Deskripsi Acara</h3>
      </div>
      <div class="box-body">

        <label>Deskripsi Acara</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fas fa-ticket-alt"></i>
          </div>
          <textarea type="text" rows="7" class="form-control" name="deskripsi" ><?php echo $event['deskripsi']?></textarea>
        </div>


      </div>
    </div>
  </div>
  <div class="col-md-6">

  </div>

  <div class="col-md-6">
    <input type="submit" name="submit" value="simpan" class="btn btn-success btn-lg btn-block">

  </div>
<? form_close();?>
  </div>

</div>

</div>


</section>

<!--
  <label for="">Nama Penyelenggara</label>
  <input type="text" name="nama"><br>

  <label for="">Bintang Tamu/Pembicara</label>
  <input type="text" name="gs"><br>

  <label for="">Tanggal</label>
  <input type="date" name="tanggal"><br>

  <label for="">Waktu Mulai</label>
  <input type="time" name="mulai"><br>

  <label for="">Waktu Selesai</label>
  <input type="time" name="selesai"><br>

  <label for="">Tempat</label>
  <input type="text" name="tempat"><br>

  <input type="submit" name="submit" value="Simpan">




<!-- SCRIPT -->
<!-- jQuery 3 -->

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
