<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dosen
      <small>Kumpulan data-data dosen</small>
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
            <h3 class="box-title">Tabel Dosen</h3>
            <div class="box-tools">
              <div class="input-group input-group-sm">
                <a href="<?php echo base_url() ?>index.php/dosen/tambah" class="btn-sm btn-primary pull-right" role="button"><i class="fa fa-plus"> Data</i></a>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> No</th>
                  <th>ID Dosen</th>
                  <th>Nama Dosen</th>
                  <th>No. Telp</th>
                  <th>Jabatan</th>
                  <th colspan='2'>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($hasil as $item) :
                ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $item->id_dosen; ?></td>
                    <td><?= $item->nama_dosen; ?></td>
                    <td><?= $item->tlp; ?></td>
                    <td><?= $item->jabatan; ?></td>

                    <td> 
                      <a href="<?php echo base_url() ?>dosen/update/<?php echo $item->id_dosen; ?>" class="btn btn-warning" role="button">Update</a>
                    </td>
                    <td> 
                      <a href="<?php echo base_url() ?>dosen/hapus/<?php echo $item->id_dosen; ?>" class="btn btn-danger" role="button">Delete</a>
                    </td>
                  </tr>
                <?php
                  $no++;
                endforeach;
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
