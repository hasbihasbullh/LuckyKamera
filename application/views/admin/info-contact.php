<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
            <?php foreach ($info as $row) { ?>
            <form method="post" action="<?= base_url('admin/info_contact') ?>">
                <input type="hidden" readonly value="<?=$row->id_info;?>" name="id_info" class="form-control" >
            <div class="form-group row">
                <label for="email_info" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email_info" name="email_info" value="<?= $row->email_info ?>">
                    <?= form_error('email_info', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="telp_info" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp_info" name="telp_info" value="<?= $row->telp_info ?>">
                    <?= form_error('telp_info', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>

            </form>
        <?php } ?>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 