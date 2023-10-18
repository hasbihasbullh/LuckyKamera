<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 565px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/upload/profile/') . $admin['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $admin['name']; ?></h5>
                    <p class="card-text"><?= $admin['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $admin['date_created']); ?></small></p>
                    <a class="btn btn-outline-primary btn-sm" href="<?= base_url('admin/profile/editProfile'); ?>" role="button"><i class="fas fa-user-edit"></i> Edit Profile</a>
                    <a class="btn btn-outline-primary btn-sm" href="<?= base_url('admin/profile/changePassword'); ?>" role="button"><i class="fas fa-key"></i> Change Password</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->    