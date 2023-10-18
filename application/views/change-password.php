        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Change Password</h2>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="single-product.html">Change Password</a>
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
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('welcome/changepassword') ?>">
                                    <div class="form-group row">
                                        <label for="nama_cs" class="col-sm-3 col-form-label">Current Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="single-input" id="current_password" name="current_password">
                                            <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="single-input" id="new_password1" name="new_password1">
                                            <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Repeat Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="single-input" id="new_password2" name="new_password2">
                                            <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
  
                                    <div class="form-group row justify-content-center">
                                        <div class="col-sm-6">
                                            <button type="submit" class="genric-btn danger radius">Change Password</button>
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