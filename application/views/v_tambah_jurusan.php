<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Jurusan
      <small>Tambah Data Jurusan</small>
    </h1>

  </section>
  <!-- /.content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Jurusan</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="post" action="<?php echo base_url() ?>jurusan/simpan_jurusan" role="form">
            <div class="box-body">
              <div class="form-group ">
                <label for="kode_jurusan">Kode Jurusan</label>
                <input type="text" class="form-control" required="required" id="kode_jurusan" name="kode_jurusan" placeholder="Kode Jurusan">
              </div>
              <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input type="text" required="required" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Nama Jurusan">
              </div>
              <div class="form-group">
                <label for="kaprodi">Kepala Program Studi</label>
                <input type="text" required="required" class="form-control" id="kaprodi" name="kaprodi" placeholder="Kepala Program Studi">
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer form-actions">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->

<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->