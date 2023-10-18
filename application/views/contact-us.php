<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Hubungi Kami</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="single-product.html">Hubungi Kami</a>
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
                        <?= $this->session->flashdata('message'); ?>
						
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.25099167951!2d106.9210368!3d-6.9427432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6849454b7e2403%3A0xc17f9c304937d8b6!2sLUCKY%20Kamera%20(Sukabumi%20Kota)!5e0!3m2!1sid!2sid!4v1697643521609!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                        <br><br>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="contact_info">
                                    <?php foreach ($info as $row) { ?>
                                    <div class="info_item">
                                        <i class="lnr lnr-phone-handset"></i>
                                        <h6><a href="#"><?= $row->telp_info ?></a></h6>
                                        <p>Buka Setiap Hari 08:00 - 20:00</p>
                                    </div>
                                    <div class="info_item">
                                        <i class="lnr lnr-envelope"></i>
                                        <h6><a href="#"><?= $row->email_info ?></a></h6>
                                        <p>Kirimkan pertanyaan Anda kepada kami kapan saja!</p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <form class="row contact_form" action="<?= base_url('welcome/contact_us') ?>" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama_visit" name="nama_visit" placeholder="Nama Lengkap">
                                             <?= form_error('nama_visit', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email_visit" name="email_visit" placeholder="Alamat Email">
                                            <?= form_error('email_visit', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="telp_visit" name="telp_visit" placeholder="No Telpon">
                                            <?= form_error('telp_visit', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="pesan" id="pesan" rows="1" placeholder="Pesan"></textarea>
                                            <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn submit_btn">Kirim <i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Latest Product Area =================-->