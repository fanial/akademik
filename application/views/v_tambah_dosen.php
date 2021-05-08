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
                    <form action="<?php echo base_url() ?>index.php/dosen/simpan_dosen" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id_dosen">ID Dosen</label>
                                <input type="text" class="form-control" name="id_dosen" placeholder="ID Dosen">
                            </div>
                            <div class="form-group">
                                <label for="nama_dosen">Nama Lengkap</label>
                                <input type="text" class=" form-control" name="nama_dosen" placeholder="Nama Lengkap ">
                            </div>
                            <div class="form-group">
                                <label for="umur">No. Telp.</label>
                                <input type="text" class="form-control" name="tlp" placeholder="No. Telp">
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <option value="Kaprodi">Kaprodi</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Staff">Staff</option>
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
