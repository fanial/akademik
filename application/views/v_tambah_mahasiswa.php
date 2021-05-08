<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mahasiswa
            <small>Tambah Data Mahasiswa</small>
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
                        <h3 class="box-title">Tambah Data Mahasiswa</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?php echo base_url() ?>index.php/mahasiswa/simpan_mahasiswa" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="NIK">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class=" form-control" name="nama" placeholder="Nama Lengkap ">
                            </div>
                            <div class="form-group">
                                <label for="nama">Jenis Kelamin</label>
                                <div class="form-check">

                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="jk" value="1"> Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="jk" value="2"> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lhr">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lhr">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" class="form-control" name="umur" placeholder="Umur">
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


                            <!-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div> -->
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
