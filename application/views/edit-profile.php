        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Edit Profile</h2>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="single-product.html">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--================End Home Banner Area =================-->

        <!--================Latest Product Area =================-->
        <section class="feature_product_area latest_product_area">
        	<div class="main_box">
				<div class="container">
					<div class="feature_product_inner">
                        <div class="main_title">
                            <p>Tanggal Daftar : <?= $customers['date_created']  ?></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('welcome/editprofile') ?>" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nama_cs" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="single-input" id="nama_cs" name="nama_cs" value="<?= $customers['nama_cs']; ?>"> 
                                            <?= form_error('nama_cs', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="single-input" id="email" name="email" value="<?= $customers['email']; ?>" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">No Telp</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="single-input" id="telp" name="telp" value="<?= $customers['telp']; ?>">
                                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-9">
                                            <textarea class="single-input" id="alamat" rows="3" name="alamat"><?= $customers['alamat']; ?></textarea>
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">KTP</label>
                                        <div class="col-sm-9">
                                            <img src="<?= base_url('assets/upload/customers/') . $customers['ktp']; ?>" class="img-thumbnail">
                                            <input type="file" class="form-control-file" id="ktp" name="ktp">
                                        </div>
                                    </div>
  
                                    <div class="form-group row justify-content-center">
                                        <div class="col-sm-6">
                                            <button type="submit" class="genric-btn danger radius">Edit Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Latest Product Area =================-->