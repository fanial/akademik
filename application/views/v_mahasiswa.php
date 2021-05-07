<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mahasiswa
            <small>Kumpulan data-data mahasiswa</small>
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
                        <h3 class="box-title">Tabel Mahasiswa</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm">
                                <a href="<?php echo base_url() ?>index.php/mahasiswa/tambah" class="btn-sm btn-primary pull-right" role="button"><i class="fa fa-plus"> Data</i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal lahir</th>
                                    <th>Jurusan</th>
                                    <th>Usia</th>
                                    <th colspan='2'>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $jk = '';
                                foreach ($hasil as $item) {
                                    if ($item->jk == 1) {
                                        $jk = 'Laki-laki';
                                    } else {
                                        $jk = 'Perempuan';
                                    }
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $item->nik; ?></td>
                                        <td><?php echo $item->nama; ?></td>
                                        <td><?php echo $jk; ?></td>
                                        <td><?php echo $item->tanggal_lhr; ?></td>
                                        <td><?php echo $item->jurusan; ?></td>
                                        <td><?php echo $item->umur; ?></td>
                                        <td> <a href="<?php echo base_url() ?>mahasiswa/update/<?php echo $item->nik; ?>" class="btn btn-warning" role="button">Update</a></td>
                                        <td> <a href="<?php echo base_url() ?>mahasiswa/hapus/<?php echo $item->nik; ?>" class="btn btn-danger" role="button">Delete</a></td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>

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