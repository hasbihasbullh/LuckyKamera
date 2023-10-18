        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content row">
						<div class="col-lg-5">
							<h3>Lucky Kamera <br />Collections!</h3>
							<p>Kalian punya masalah tentang kamera kamilah solusinya.</p>
							<a class="white_bg_btn" href="#">View Collection</a>
						</div>
						<div class="col-lg-7">
							<div class="halemet_img">
								<img src="<?= base_url('assets/template/frontend/'); ?>img/banner/kamera.png" alt="">
							</div>
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
							<h2>Products</h2>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="latest_product_inner row">
                            <?php foreach ($barang as $brg) { ?>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="<?= base_url('assets/upload/product/'. $brg->gambar) ?>" alt="" >
									</div>
									<a href="<?= base_url('welcome/detail_product/'.$brg->id_brg)?>"><h4><?= $brg->nama_brg  ?></h4></a>
									<h5>Rp.<?= number_format($brg->harga,0,',','.') ?>/Hari</h5>
								</div>
							</div>
                            <?php } ?>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Latest Product Area =================-->
        
        <!--================Clients Logo Area =================-->
        <section class="clients_logo_area">
        	<div class="container">
        		<div class="main_title">
        			<h2>Brands</h2>
        			<p>Who are in extremely love with eco friendly system.</p>
        		</div>
        		<div class="clients_slider owl-carousel">
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-sony-1.png" alt="">
        			</div>
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-fujifilm-2.png" alt="">
        			</div>
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-canon-3.png" alt="">
        			</div>
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-nikon-4.png" alt="">
        			</div>
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-pentax-5.png" alt="">
        			</div>
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-olympus-6.png" alt="">
        			</div>
        			<div class="item">
        				<img src="<?= base_url('assets/template/frontend/'); ?>img/clients-logo/c-leica-7.png" alt="">
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Clients Logo Area =================-->