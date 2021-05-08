<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mata Kuliah
            <small>Update Mata Kuliah #<?= $ambil->id_matkul; ?></small>
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
                        <h3 class="box-title">Update Data Mata Kuliah</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <form action="<?= base_url() ?>index.php/matkul/simpan_update" method="post">
                            <div class="box-body">
                                <input type="hidden" name="id_matkul" value="<?= $ambil->id_matkul; ?>" />

                                <div class="form-group">
                                    <label for="matkul">Mata Kuliah</label>
                                    <input type="text" class=" form-control" name="matkul" value="<?= $ambil->matkul; ?>" placeholder="Nama Mata Kuliah ">
                                </div>

                                <div class="form-group">
                                  <label for="waktu">Waktu</label>
                                  <input type="time" class="form-control" name="waktu" value="<?= $ambil->waktu; ?>" placeholder="Waktu">
                                </div>

                                <div class="form-group">
                                    <label for="id_dosen">ID Dosen Pengampu</label>
                                    <input type="text" class=" form-control" name="id_dosen" value="<?= $ambil->id_dosen; ?>" placeholder="ID Dosen Pengampu ">
                                </div>

                                <div class="form-group">
                                    <?php
                                    $ti = "selected";
                                    $si = "";
                                    $tk = "";
                                    $mi = "";
                                    $ka = "";
                                    if ($ambil->jurusan == 'TI') {
                                        $ti = "selected";
                                    } else if ($ambil->jurusan == 'SI') {
                                        $si = "selected";
                                    } else if ($ambil->jurusan == 'TK') {
                                        $tk = "selected";
                                    } else if ($ambil->jurusan == 'MI') {
                                        $mi = "selected";
                                    } else if ($ambil->jurusan == 'KA') {
                                        $ka = "selected";
                                    }
                                    ?>

                                    <label for="jurusan">Pilih Jurusan:</label>
                                    <select class="form-control" name="jurusan">
                                        <option <?= $ti; ?> value="TI">Teknik Informatika</option>
                                        <option <?= $si; ?> value="SI">Sistem Informasi</option>
                                        <option <?= $tk; ?> value="TK">Teknik Komputer</option>
                                        <option <?= $mi; ?> value="MI">Manajemen Informatika</option>
                                        <option <?= $ka; ?> value="KA">Komputerisasi Akuntansi</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
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
