<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
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
                      <th>Nama Customers</th>
                      <th>Email</th>
                      <th>No Telp</th>
                      <th>Alamat</th>
                      <th>KTP</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($customers as $cs) : ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $cs->nama_cs ?></td>
                      <td><?php echo $cs->email ?></td>
                      <td><?php echo $cs->telp ?></td>
                      <td><?php echo $cs->alamat ?></td>
                      <td><img src="<?php echo base_url('assets/upload/customers/'.$cs->ktp) ?>" width="64" /></td>
                      <td>
                        <center>
                          <div class="tooltip-demo">
                            <a data-toggle="modal" href="#detail_model<?=$cs->id_cs;?>" class="btn btn-info btn-sm" data-popup="tooltip" data-placement="top" title="Detail Data"><i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/customers/reset/'.$cs->id_cs); ?>" onclick="return confirm('Apakah anda yakin akan mereset password untuk email <?=$cs->nama_cs;?> ?');" class="btn btn-secondary btn-sm" data-popup="tooltip" data-placement="top" title="Reset Data"><i class="fas fa-sync-alt"></i></a>
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
<?php $no=0; foreach($customers as $cs): $no++; ?>
<div class="modal fade" id="detail_model<?=$cs->id_cs;?>" tabindex="-1" role="dialog" aria-labelledby="detail_modelLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detail_modelLabel">Detail Customers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="nama_cs" class="col-sm-3 col-form-label">Nama Customers</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_cs" name="nama_cs" value="<?=$cs->nama_cs;?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="email" name="email" value="<?=$cs->email;?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="telp" class="col-sm-3 col-form-label">No Telp</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="telp" name="telp" value="<?=$cs->telp;?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="alamat" rows="3" readonly><?=$cs->alamat;?></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="date_created" class="col-sm-3 col-form-label">Tanggal Daftar</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="date_created" name="date_created" value="<?=$cs->date_created;?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">KTP</div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-10">
                    <img src="<?php echo base_url('assets/upload/customers/'.$cs->ktp) ?>" class="img-thumbnail">
                  </div>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
