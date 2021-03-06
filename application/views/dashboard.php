<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control Panel</small>
    </h1>
  </section>

  <!-- /.content -->
  <!-- Small boxes (Stat box) -->
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $total_mhs; ?></h3>

            <p>Mahasiswa</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-people"></i>
          </div>
          <a href="<?= base_url() ?>index.php/mahasiswa/index"" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $total_dosen; ?></h3>

            <p>Dosen</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-contacts"></i>
          </div>
          <a href="<?= base_url() ?>index.php/dosen/index"" class=" small-box-footer"" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>><?php echo $total_jurusan; ?></h3>

            <p>Jurusan</p>
          </div>
          <div class="icon">
            <i class="ion ion-university"></i>
          </div>
          <a href="<?= base_url() ?>index.php/jurusan/index"" class=" small-box-footer"" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>><?php echo $total_matkul; ?></h3>

            <p>Mata Kuliah</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-bookmarks"></i>
          </div>
          <a href="<?= base_url() ?>index.php/matkul/index"" class=" small-box-footer"" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

  </section>
</div>
<!-- /.content-wrapper -->

<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->