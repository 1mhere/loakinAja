<div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">

              <h4>ABOUT US</h4>

              <p class="text-muted">loakinAja adalah platform situs untuk menjual atau donasi barang bekas mulai dari koran, kardus, buku, baju, dan barang-barang lain.</p>
            <hr>



          </div>
            <div class="col-md-4 col-sm-6">
                <h4>Halaman</h4>

                <ul>
                    <li><a href="#">Karir</a>
                    </li>
                    <li><a href="#">Mitra Kerja</a>
                    </li>
                    <li><a href="#">Kebijakan Privasi</a>
                    </li>
                    <li><a href="#">Syarat dan ketentuan</a>
                    </li>
                    <li><a href="#">FAQ</a>
                    </li>
                    <li><a href="#">Kontak</a>
                    </li>
                </ul>

                <hr>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->


            <div class="col-md-4 col-sm-6">

                <h4>Temukan Kami</h4>

                <p>
                    Jl. Gegerkalong Hilir, Desa Ciwaruga,
                    Parongpong, Kabupaten Bandung Barat,
                    Jawa Barat 40012,
                    Indonesia
                </p>

                <a href="<?php echo base_url()."index.php/main/contact" ?>">Hubungi Kami</a>

                <hr class="hidden-md hidden-lg">
                <h4>Terhubung dengan kami</h4>

                <p class="social">
                    <a href="https://www.facebook.com/loakinaja" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/loakinaja" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/loakinaja/" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                    <!-- <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a> -->
                    <a href="mailto:info@loakinaja.com" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                </p>

            </div>
            <!-- /.col-md-3 -->




            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** COPYRIGHT ***-->
<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">© 2016 LoakinAja.</p>

        </div>
        <div class="col-md-6">
            <p class="pull-right">Template by <a href="http://bootstrapious.com/e-commerce-templates">Bootstrapious</a> with support from <a href="https://kakusei.cz">Kakusei</a>
                <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
            </p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->

<!-- pop up -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url()."index.php/user/login" ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="email-modal" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password-modal" placeholder="password">
                    </div>

                    <?php echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
                    <p class="text-center">
                        <button class="btn btn-primary"><i class="fa fa-user"></i> Masuk</button>
                    </p>

                </form>

                <p class="text-center text-muted">Belum punya akun?</p>
                <p class="text-center text-muted"><a href="<?php echo base_url()."index.php/main/register" ?>"><strong>Daftar</strong></a>! </p>

            </div>
        </div>
    </div>
</div>
