<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TikeMasuk.id
      <small>Version 1.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Event Dibuat</span>
            <span class="info-box-number">90<small>%</small></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uang Terkumpul</span>
            <span class="info-box-number">41,410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Tiket Terjual</span>
            <span class="info-box-number">760</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Peserta Hadir</span>
            <span class="info-box-number">2,000</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <section = "content">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Acara Saya</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Nama Acara</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Tiket Terjual</th>
                <th>Sisa Tiket</th>
                <th>Status Penjualan</th>
                <th>Pengaturan</th>
              </tr>
              </thead>
              <tbody>
                <?php if($event == true){
                  foreach ($event as $e ):
                 ?>

                  <tr>
                    <td><a href=<?php echo base_url()?>event/<?php echo $e['id_event']?>/<?php echo $e['slug']?>><?php echo $e['nama_acara']?></a></td>
                    <td><?php echo $e['tanggal_acara']?></td>
                    <td><?php echo $e['id_event']?></td>
                    <td><?php echo $e['id_event']?></td>
                    <!-- <td><span class="label label-success">Shipped</span></td> -->

                      <td>
                        <span class="label label-success">Dibuka</span>
                      </td>
                      <td><a class="label label-warning" href=<?php echo base_url()?>edit/<?php echo $e['id_event']?>>Edit</a>
                      <a class="label label-danger" href=<?php echo base_url()?>hapus/<?php echo $e['id_event']?> onclick="return  confirm('Hapus Event Ini ?')">Hapus</a></td>

                  </tr>
                <?php endforeach;}else echo 'Tidak ada data' ?>


              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="addevent" class="btn btn-sm btn-warning btn-flat pull-left">Buat Event</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
      <!-- /.col -->
    </section>
    <!-- /.row -->

    <!-- Main row -->
