<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mahasiswa
            <small>Update mahasiswa #<?php echo $ambil->nim; ?></small>
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
                        <h3 class="box-title">Update Data Mahasiswa</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <form action="<?php echo base_url() ?>index.php/mahasiswa/simpan_update" method="post">
                            <div class="box-body">
                                <input type="hidden" name="nim" value="<?php echo $ambil->nim; ?>" />

                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class=" form-control" name="nama" value="<?php echo $ambil->nama; ?>" placeholder="Nama Lengkap ">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Jenis Kelamin</label>

                                    <div class="form-check">
                                        <?php
                                        if ($ambil->jk == 1) {
                                            $laki_laki = "checked";
                                            $perempuan = "";
                                        } else {
                                            $perempuan = "checked";
                                            $laki_laki = "";
                                        }

                                        ?>

                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" <?php echo $laki_laki; ?> name="jk" value="1"> Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" <?php echo $perempuan; ?> name="jk" value="2"> Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lhr">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lhr" value="<?php echo $ambil->tanggal_lhr; ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Umur:</label>
                                    <input type="number" name="umur" class="form-control" value="<?php echo $ambil->umur; ?>" placeholder="Umur" />
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
                                        <option <?php echo $ti; ?> value="TI">Teknik Informatika</option>
                                        <option <?php echo $si; ?> value="SI">Sistem Informasi</option>
                                        <option <?php echo $tk; ?> value="TK">Teknik Komputer</option>
                                        <option <?php echo $mi; ?> value="MI">Manajemen Informatika</option>
                                        <option <?php echo $ka; ?> value="KA">Komputerisasi Akuntansi</option>
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