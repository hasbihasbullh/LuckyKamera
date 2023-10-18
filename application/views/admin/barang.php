<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_model"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>
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
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Deskripsi</th>
                      <th>Harga/Hari</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($barang as $brg) : ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $brg->nama_brg ?></td>
                      <td><?php echo $brg->nama_ktg ?></td>
                      <td><?php echo $brg->deskripsi ?></td>
                      <td><?php echo $brg->harga ?></td>
                      <td><img src="<?php echo base_url('assets/upload/product/'.$brg->gambar) ?>" width="50" height="50" /></td>
                      <td>
                        <center>
                          <div class="tooltip-demo">
                            <a data-toggle="modal" href="#edit_model<?=$brg->id_brg;?>" class="btn btn-warning btn-sm" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/barang/hapus/'.$brg->id_brg); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$brg->nama_brg;?> ?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="tambah_modelLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/barang/tambah') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="nama_brg" class="col-sm-3 col-form-label">Barang</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_brg" name="nama_brg">
            </div>
          </div>
          <div class="form-group row">
            <label for="KategorikControlSelect" class="col-sm-3 col-form-label">Kategori</label>
              <div class="col-sm-9">
                <select class="form-control" id="KategoriControlSelect" name="id_ktg">
                  <option value="">Pilih Kategori</option>
                  <?php foreach($kategori as $ktg) { ?>
                    <option value="<?=$ktg->id_ktg?>"><?=$ktg->nama_ktg?></option>
                  <?php } ?>
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga/Hari</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="harga" name="harga">
              </div>
          </div>
          <div class="row">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
              <div class="col-sm-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="gambar">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
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
<?php $no=0; foreach($barang as $brg): $no++; ?>
<div class="modal fade" id="edit_model<?=$brg->id_brg;?>" tabindex="-1" role="dialog" aria-labelledby="edit_modelLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_modelLabel">Edit Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/barang/edit')  ?>" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="nama_brg" class="col-sm-3 col-form-label">Barang</label>
            <div class="col-sm-9">
              <input type="hidden" readonly value="<?=$brg->id_brg;?>" name="id_brg" class="form-control" >
              <input type="text" class="form-control" id="nama_brg" name="nama_brg" autocomplete="off" value="<?=$brg->nama_brg;?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="KategorikControlSelect" class="col-sm-3 col-form-label">Kategori</label>
              <div class="col-sm-9">
                <select class="form-control" id="KategoriControlSelect" name="id_ktg">
                  <option value="">Pilih Kategori</option>
                  <?php foreach($kategori as $ktg) { 
                    if ($ktg->id_ktg == $brg->id_ktg) { ?>
                      <option value="<?=$ktg->id_ktg?>" selected><?=$ktg->nama_ktg?></option>
                  <?php } else { ?>
                      <option value="<?=$ktg->id_ktg?>"><?=$ktg->nama_ktg?></option>
                         <?php } ?>
                  <?php } ?> 
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?=$brg->deskripsi;?></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga/Hari</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="harga" name="harga" value="<?=$brg->harga;?>">
              </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">Gambar</div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-4">
                    <img src="<?php echo base_url('assets/upload/product/'.$brg->gambar) ?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-8">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="gambar">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                  </div>
                </div>
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
