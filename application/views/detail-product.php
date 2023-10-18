	<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Detail Product</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="single-product.html">Product Details</a>
						</div>
					</div>
				</div>
            </div>
        </section>
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <?php foreach ($barang as $brg) { ?>
        <div class="product_image_area">
        	<div class="container">
        		<div class="row s_product_inner">
        			<div class="col-lg-6">
        				<div class="s_product_img">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="<?php echo base_url('assets/upload/product/'.$brg->gambar)?>" weight="555" height="555">
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="col-lg-5 offset-lg-1">
        				<div class="s_product_text">
        					<h3><?= $brg->nama_brg ?></h3>
        					<h2>Rp.<?= number_format($brg->harga,0,',','.') ?>/Hari</h2>
        					<ul class="list">
                            <?php foreach($kategori as $ktg) { 
                                if ($ktg->id_ktg == $brg->id_ktg) { ?>
        						  <li value="<?=$ktg->id_ktg?>"><a class="active"><span>Category</span> : <?=$ktg->nama_ktg?></a></li>
                                <?php } ?>
                            <?php } ?>
        					</ul>
        					<p><?= $brg->deskripsi  ?></p>

        					<div class="card_area">
                                <?php 
                                if ($this->session->userdata('status') == 'login') { ?>
        						    <a class="main_btn" href="<?= base_url('booking/index/'.$brg->id_brg)?>">Booking</a>
                                <?php } else { ?>
                                    <a class="main_btn" href="<?= base_url('customers')  ?>">Login/Register</a>
                                <?php } ?>
                                <!-- <a class="icon_btn" href="#"><i class="fa fa-whatsapp"></i></a> -->
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    <?php } ?>
    <!--================End Single Product Area =================-->