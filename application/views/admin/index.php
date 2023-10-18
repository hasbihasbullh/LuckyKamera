<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
	  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary btn-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

  <?= $this->session->flashdata('message'); ?>

  <div class="alert alert-light alert-dismissible fade show" role="alert">
    Selamat Datang <strong><?= $admin['name']; ?></strong> Di Halaman Admin.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

	 <!-- Content Row -->
          <div class="row">

            <!-- Jumlah Customers -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Customers</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $customers ?></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= base_url('admin/customers');  ?>"><i class="fas fa-users fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Jumlah Barang -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $barang ?></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= base_url('admin/barang');  ?>"><i class="fas fa-boxes fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 