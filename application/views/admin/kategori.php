<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_model"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori</a>
  </div>

  <?= $this->session->flashdata('message'); ?>

   <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($kategori as $ktg) : ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $ktg->nama_ktg ?></td>
                      <td>
                        <center>
                          <div class="tooltip-demo">
                            <a data-toggle="modal" href="#edit_model<?=$ktg->id_ktg;?>" class="btn btn-warning btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/kategori/hapus/'.$ktg->id_ktg); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$ktg->nama_ktg;?> ?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                          </div>
                        </center>
                      </td>
                    </tr>

                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 

<!-- Modal Tambah -->
<div class="modal fade" id="tambah_model" tabindex="-1" role="dialog" aria-labelledby="tambah_modelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambah_modelLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/kategori/tambah') ?>" method="post">
          <div class="form-group row">
            <label for="nama_ktg" class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_ktg" name="nama_ktg">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<?php $no=0; foreach($kategori as $ktg): $no++; ?>
<div class="modal fade" id="edit_model<?=$ktg->id_ktg;?>" tabindex="-1" role="dialog" aria-labelledby="edit_modelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_modelLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/kategori/edit')  ?>" method="post">
          <div class="form-group row">
            <label for="nama_ktg" class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-9">
              <input type="hidden" readonly value="<?=$ktg->id_ktg;?>" name="id_ktg" class="form-control" >
              <input type="text" class="form-control" id="nama_ktg" name="nama_ktg" autocomplete="off" value="<?=$ktg->nama_ktg;?>" >
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>