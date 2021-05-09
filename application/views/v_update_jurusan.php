<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Jurusan
      <small>Update Jurusan #<?= $ambil->id_jurusan; ?></small>
    </h1>


  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Update Data Jurusan</h3>

          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <form method="post" action="<?php echo base_url() ?>jurusan/simpan_update" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="id_jurusan" value="<?php echo $ambil->id_jurusan; ?>" />
                <div class="form-group">
                  <label for="kode_jurusan">Kode Jurusan</label>
                  <input type="text" required="required" class="form-control" id="kode_jurusan" name="kode_jurusan" placeholder="Kode Jurusan" value="<?php echo $ambil->kode_jurusan; ?>">
                  <span class="help-block"></span>
                </div>
                <div class="form-group">
                  <label for="nama_jurusan">Nama Jurusan</label>
                  <input type="text" required="required" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $ambil->nama_jurusan; ?>">
                  <span class="help-block"></span>
                </div>
                <div class="form-group">
                  <label for="kaprodi">Kaprodi</label>
                  <input type="text" required="required" class="form-control" id="kaprodi" name="kaprodi" placeholder="Kaprodi" value="<?php echo $ambil->kaprodi; ?>">
                  <span class="help-block"></span>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Ubah</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->