<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Jurusan
      <small>Kumpulan data-data jurusan</small>
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
            <h3 class="box-title">Tabel Jurusan</h3>
            <div class="box-tools">
              <div class="input-group input-group-sm">
                <a href="<?php echo base_url() ?>index.php/jurusan/tambah" class="btn-sm btn-primary pull-right" role="button"><i class="fa fa-plus"> Data</i></a>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> No</th>
                  <th>Kode Jurusan</th>
                  <th>Nama Jurusan</th>
                  <th>Kepala Program Studi</th>
                  <th colspan='2'>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($hasil as $item) {
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $item->kode_jurusan; ?></td>
                    <td><?php echo $item->nama_jurusan; ?></td>
                    <td><?php echo $item->kaprodi; ?></td>
                    <td> <a href="<?php echo base_url() ?>jurusan/update/<?php echo $item->id_jurusan; ?>" class="btn btn-warning" role="button">Update</a></td>
                    <td> <a href="<?php echo base_url() ?>jurusan/hapus/<?php echo $item->id_jurusan; ?>" class="btn btn-danger" role="button">Delete</a>
                    </td>
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