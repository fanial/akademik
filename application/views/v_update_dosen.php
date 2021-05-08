<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dosen
            <small>Update Data Dosen #<?= $ambil->id_dosen; ?></small>
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
                        <h3 class="box-title">Update Data Dosen</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <form action="<?= base_url() ?>index.php/dosen/simpan_update" method="post">
                            <div class="box-body">
                                <input type="hidden" name="id_dosen" value="<?= $ambil->id_dosen; ?>" />

                                <div class="form-group">
                                    <label for="nama_dosen">Nama Lengkap</label>
                                    <input type="text" class=" form-control" name="nama_dosen" value="<?= $ambil->nama_dosen; ?>" placeholder="Nama Lengkap ">
                                </div>

                                <div class="form-group">
                                    <label for="tlp">No. Telp.</label>
                                    <input type="text" class=" form-control" name="tlp" value="<?= $ambil->tlp; ?>" placeholder="No. Telp.">
                                </div>

                                <div class="form-group">
                                    <?php
                                    $kaprodi = "selected";
                                    $dosen = "";
                                    $staff = "";
                                    $mi = "";
                                    $ka = "";
                                    if ($ambil->jabatan == 'Kaprodi') {
                                        $kaprodi = "selected";
                                    } else if ($ambil->jabatan == 'Dosen') {
                                        $dosen = "selected";
                                    } else if ($ambil->jabatan == 'Staff') {
                                        $staff = "selected";
                                    }
                                    ?>

                                    <label for="jabatan">Pilih Jabatan:</label>
                                    <select class="form-control" name="jabatan">
                                        <option <?= $kaprodi; ?> value="Kaprodi">Kaprodi</option>
                                        <option <?= $dosen; ?> value="Dosen">Dosen</option>
                                        <option <?= $staff; ?> value="Staff">Staff</option>
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
