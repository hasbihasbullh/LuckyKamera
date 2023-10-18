	<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Product Tersedia Untuk Di sewa</h2>
					</div>
				</div>
            </div>
        </section>
    <!--================End Home Banner Area =================-->

    <!--================Latest Product Area =================-->
    <?php foreach ($barang as $brg) { ?>

<?php
    foreach ($add_booking as $add) {
    $id_brg         = $add->id_brg;
    $tgl_mulai      = $add->tgl_mulai;
    $tgl_selesai    = $add->tgl_selesai;
    $pickup         = $add->pickup;
    }
    $start          = new DateTime($tgl_mulai);
    $finish         = new DateTime($tgl_selesai);
    $int            = $start->diff($finish);
    $dur            = $int->days;
    $durasi         = $dur+1;
    $harga          = $brg->harga;
    $totalbarang    = $durasi*$harga;
    $totalsewa      = $totalbarang;
?>

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
                                <?php foreach ($add_booking as $add) { ?>
                            <form method="post" action="<?= base_url('booking/detail/') ?>">
                                    <input type="hidden" class="single-input" name="id_brg" value="<?= $add->id_brg ?>"readonly>
                                    <input type="hidden" class="single-input" name="email"  value="<?= $customers['email'];?>"readonly>
                                <div class="form-group row">
                                    <label for="nama_cs" class="col-sm-3 col-form-label">tanggal Mulai</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tgl_mulai" class="single-input" placeholder="From Date(dd/mm/yyyy)" value="<?= $add->tgl_mulai;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tgl_selesai" class="single-input" placeholder="To Date(dd/mm/yyyy)" value="<?= $add->tgl_selesai;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-3 col-form-label">Durasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="durasi" class="single-input" value="<?= $durasi;?> Hari" readonly>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-3 col-form-label">Metode Pickup</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pickup" class="single-input" value="<?= $pickup;?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-3 col-form-label">Biaya</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="biaya" class="single-input" value="Rp.<?= number_format($harga,0,',','.') ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-3 col-form-label">Total Biaya Sewa</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="totalbiaya" class="single-input" value="Rp.<?= number_format($totalsewa,0,',','.') ?>" readonly>
                                    </div>
                                </div>
  
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-6">
                                        <button type="submit" class="genric-btn danger radius">Sewa Sekarang</button>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
        <!--================End Latest Product Area =================-->