    <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Detail Sewa</h2>
					</div>
				</div>
            </div>
        </section>
    <!--================End Home Banner Area =================-->

    <!--================Latest Product Area =================-->
    <?php foreach ($barang as $brg) { ?>
        <section class="feature_product_area latest_product_area">
        	<div class="main_box">
				<div class="container">
					<div class="feature_product_inner">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <form method="post" action="<?= base_url('') ?>">
                                    <div class="form-group row">
                                        <label for="nama_cs" class="col-sm-3 col-form-label">Kode Sewa</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Product</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Tanggal Mulai</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Durasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="durasi" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Biaya</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Total Biaya Swea</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">No Telp</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="single-input" readonly>
                                        </div>
                                    </div>

  
                                    <div class="form-group row justify-content-center">
                                        <div class="col-sm-6">
                                            <button type="submit" class="genric-btn danger radius">Cetak</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
        	</div>
        </section>
    <?php } ?>
    <!--================End Latest Product Area =================-->