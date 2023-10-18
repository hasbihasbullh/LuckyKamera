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
                      <th>Kode Sewa</th>
                      <th>Product</th>
                      <th>Tanggal Mulai</th>
                      <th>tanggal Selesai</th>
                      <th>Durasi</th>
                      <th>Biaya</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 


