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
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telp</th>
                      <th>Pesan</th>
                      <th>Tanggal Posting</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($contactus as $cu) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $cu->nama_visit ?></td>
                      <td><?php echo $cu->email_visit ?></td>
                      <td><?php echo $cu->telp_visit ?></td>
                      <td><?php echo $cu->pesan ?></td>
                      <td><?php echo $cu->tgl_posting ?></td>
                      <center>
                        <?php if ($cu->status == 1) { ?>
                        <td>Sudah Dibaca</td>
                        <?php } else { ?>
                        <td>
                          <div class="tooltip-demo">
                            <a href="<?php echo base_url('admin/contactus/active/'.$cu->id_cu); ?>" onclick= "return confirm('Tandai sudah dibaca?')">Baca</a>
                          </div>
                        </td>
                        <?php } ?>
                      </center>
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
