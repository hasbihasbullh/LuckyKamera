        <!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Tentang Kami</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Stay updated with our latest trends</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Pembayaran</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="<?= base_url('assets/template/frontend/'); ?>img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>	
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Ikuti Kami</h6>
                            <div class="f_social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
								<a href="https://api.whatsapp.com/send?phone=62895378244308"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>						
                </div> -->
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;2020 All rights reserved
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url('assets/template/frontend/'); ?>js/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>js/popper.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>js/stellar.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/isotope/isotope-min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/flipclock/timer.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>vendors/counter-up/jquery.counterup.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>js/mail-script.js"></script>
        <script src="<?= base_url('assets/template/frontend/'); ?>js/theme.js"></script>
        <!-- Loader -->
        <script src="<?= base_url('assets/template/frontend/'); ?>js/loader.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <!-- Sweetalert JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

        <script>
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        </script>

        <script type="text/javascript">
        function valid()
        {
            if(document.booking.tgl_selesai.value < document.booking.tgl_mulai.value){
                alert("Tanggal selesai harus lebih besar dari tanggal mulai sewa!");
                return false;
            }
            if(document.booking.tgl_mulai.value < document.booking.tgl_sekarang.value){
                alert("Tanggal sewa minimal H-1!");
                return false;
            }

        return true;
        }
        </script>
        
    </body>
</html> 