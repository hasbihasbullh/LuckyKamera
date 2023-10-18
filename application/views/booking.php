	<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Booking</h2>
					</div>
				</div>
            </div>
        </section>
    <!--================End Home Banner Area =================-->

    <?php 
        $tgl_sekarang   = date('Y-m-d');
        $tgl_mulai      = strtotime($tgl_sekarang);
        $jmlhari        = 86400*1;
        $tglplus        = $tgl_mulai+$jmlhari;
        $tgl_sekarang   = date("Y-m-d",$tglplus);
     ?>

    <!--================Latest Product Area =================-->
    <?php foreach ($barang as $brg) { ?>
        <section class="feature_product_area latest_product_area">
            <div class="main_box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('assets/upload/product/'.$brg->gambar) ?>" class="card-img">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $brg->nama_brg ?></h5>
                                            <?php foreach($kategori as $ktg) { 
                                                if ($ktg->id_ktg == $brg->id_ktg) { ?>
                                                    <p class="card-text"><?=$ktg->nama_ktg?></p>
                                                <?php } ?>
                                            <?php } ?>
                                            <p class="card-text">Rp.<?= number_format($brg->harga,0,',','.') ?>/Hari</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-defination">
                                <form method="post" action="<?= base_url('booking/cek/') ?>" name="booking" onSubmit="return valid();">
                                    <input type="hidden" class="single-input" name="id_brg"  value="<?= $brg->id_brg;?>">
                                <div class="form-group row">
                                    <label for="tgl_mulai" class="col-sm-3 col-form-label">tanggal Mulai</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_mulai" class="single-input" placeholder="From Date(dd/mm/yyyy)" required>
                                        <input type="hidden" name="tgl_sekarang" class="single-input" value="<?= $tgl_sekarang;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_selesai" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_selesai" class="single-input" placeholder="To Date(dd/mm/yyyy)" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pickup" class="col-sm-3 col-form-label">Metode Pickup</label>
                                    <div class="col-sm-9">
                                        <div class="form-select" id="default-select2">
                                            <select name="pickup" required>
                                                <option value="">Select</option>
                                                <option value="Ambil Sendiri">Ambil Sendiri</option>
                                                <option value="Pickup Sesuai Alamat">Pickup Sesuai Alamat</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6">
                                        <button type="submit" class="genric-btn danger radius">Cek Ketersediaan</button>
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