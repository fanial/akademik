<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mata Kuliah
            <small>Tambah Data Mata Kuliah</small>
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
                        <h3 class="box-title">Tambah Data Mata Kuliah</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?= base_url() ?>index.php/matkul/simpan_matkul" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id_matkul">ID Mata Kuliah</label>
                                <input type="text" class="form-control" name="id_matkul" placeholder="ID Mata Kuliah">
                            </div>

                            <div class="form-group">
                                <label for="matkul">Mata Kuliah</label>
                                <input type="text" class=" form-control" name="matkul" placeholder="Nama Mata Kuliah ">
                            </div>

                            <div class="form-group">
                              <label for="waktu">Waktu</label>
                              <input type="time" class="form-control" name="waktu" placeholder="Waktu">
                            </div>

                            <div class="form-group">
                                <label for="id_dosen">ID Dosen Pengampu</label>
                                <input type="text" class=" form-control" name="id_dosen" placeholder="ID Dosen Pengampu ">
                            </div>

                            <div class="form-group">
                                <label for="jurusan">Pilih Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option value="TI">Teknik Informatika</option>
                                    <option value="SI">Sistem Informasi</option>
                                    <option value="TK">Teknik Komputer</option>
                                    <option value="MI">Manajemen Informatika</option>
                                    <option value="KA">Komputerisasi Akuntansi</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
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
