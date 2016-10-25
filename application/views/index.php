<!DOCTYPE html>
<html lang="en">

<!-- head -->
  <?php include 'head.php';?>
<!-- end of head -->

<body>

  <!-- *** NAVBAR *** -->
  <?php include 'navbar.php';?>
  <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="<?php echo base_url()."assets/img/main-slider1.jpg" ?>" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url()."assets/img/main-slider2.jpg"?>" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <div class="box">
                <div class="container">
                    <div class="col-sm-8">
                      <div class="navbar-buttons">
                        <div class="navbar-collapse collapse right" id="join">
                              <a href="<?php echo base_url()."index.php/main/gabung" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-users"></i><span class="hidden-sm">Mitra Kerja</span></a>
                        </div>
                        <div class="navbar-collapse collapse right" id="donate">
                              <a href="<?php echo base_url()."index.php/user/donasi" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-heart"></i><span class="hidden-sm">Donasi</span></a>
                        </div>
                          <div class="navbar-collapse collapse right" id="jual">
                              <a href="<?php echo base_url()."index.php/user/jual" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Jual</span></a>
                          </div>


                          </center>
                      </div>

                    </div>
                  </div>

                </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">


                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="<?php echo base_url()."index.php/user/donasi" ?>">Donasi</a></h3>
                                <p>Anda bisa mendonasikan sesuatu disini.</p>

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="<?php echo base_url()."index.php/user/donasi" ?>">Jual</a></h3>
                                <p>Dengan ini Anda bisa menjual barang bekas Anda lebih mudah.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="<?php echo base_url()."index.php/main/contact" ?>">Gabung</a></h3>
                                <p>Bergabung menjadi mitra kerja kami untuk membangun sistem jual beli loak dan donasi lebih efektif.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Our Latest Blog</h2>
                        </div>
                    </div>
                </div>

                <!-- <div class="container">
                    <div class="product-slider">

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg"?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/product2.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">
                                      Rp. 183,000</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div> -->
                <div class="container">

                    <div class="col-md-12" data-animate="fadeInUp">

                        <div id="blog-homepage" class="row">
                            <div class="col-sm-3">
                                <div class="post">
                                    <h4><a href="<?php echo base_url()."index.php/main/blog" ?>">How You Can Help Protect Sea Turtles</a></h4>
                                    <p class="author-category">By <a href="#">Seseorang</a>
                                    </p>
                                    <hr>
                                    <p class="intro">Program yang dilaksanakan untuk anak yatim dapat merasakan apa yang kita rasakan.</p>
                                    <p class="read-more"><a href="<?php echo base_url()."index.php/main/blog" ?>" class="btn btn-primary">Continue reading</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="post">
                                    <h4><a href="<?php echo base_url()."index.php/main/blog" ?>">Children and families social work</a></h4>
                                    <p class="author-category">By <a href="#">Seseorang</a>
                                    </p>
                                    <hr>
                                    <p class="intro">Pengumpulan buku berdasarkan donasi dari situs untuk sekolah-sekolah yang membutuhkan.</p>
                                    <p class="read-more"><a href="<?php echo base_url()."index.php/main/blog" ?>" class="btn btn-primary">Continue reading</a>
                                    </p>
                                </div>

                            </div>

                            <div id="blog-homepage" class="row">
                                <div class="col-sm-3">
                                    <div class="post">
                                        <h4><a href="<?php echo base_url()."index.php/main/blog" ?>">Child Care Fundraising</a></h4>
                                        <p class="author-category">By <a href="#">Seseorang</a>
                                        </p>
                                        <hr>
                                        <p class="intro">Pemberian santunan untuk siswa dengan keluarga kurang mampu.</p>
                                        <p class="read-more"><a href="<?php echo base_url()."index.php/main/blog" ?>" class="btn btn-primary">Continue reading</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="post">
                                        <h4><a href="<?php echo base_url()."index.php/main/blog" ?>">Top insight into your event fundraisers</a></h4>
                                        <p class="author-category">By <a href="#">Seseorang</a>
                                        </p>
                                        <hr>
                                        <p class="intro">Program yang diadakan dibulan ramadhan untuk mempererat silaturahmi.</p>
                                        <p class="read-more"><a href="<?php echo base_url()."index.php/main/blog" ?>" class="btn btn-primary">Continue reading</a>
                                        </p>
                                    </div>

                                </div>

                        </div>
                        <!-- /#blog-homepage -->
                    </div>
                </div>
                <!-- /.container -->
                </div>

                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

            <!-- *** BLOG HOMEPAGE *** -->

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">Our Latest Project</h3>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-3">
                            <div class="post">
                                <h4><a href="#">Peduli Anak Yatim</a></h4>
                                </p>
                                <hr>
                                <p class="intro">Program yang dilaksanakan untuk anak yatim dapat merasakan apa yang kita rasakan.</p>
                                <p class="read-more"><a href="#" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="post">
                                <h4><a href="#">Buku Untuk Sekolah</a></h4>
                                </p>
                                <hr>
                                <p class="intro">Pengumpulan buku berdasarkan donasi dari situs untuk sekolah-sekolah yang membutuhkan.</p>
                                <p class="read-more"><a href="#" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>

                        </div>

                        <div id="blog-homepage" class="row">
                            <div class="col-sm-3">
                                <div class="post">
                                    <h4><a href="#">Santunan Beasiswa</a></h4>
                                    </p>
                                    <hr>
                                    <p class="intro">Pemberian santunan untuk siswa dengan keluarga kurang mampu.</p>
                                    <p class="read-more"><a href="#" class="btn btn-primary">Continue reading</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="post">
                                    <h4><a href="#">Iftar dan Buka Bersama</a></h4>
                                    </p>
                                    <hr>
                                    <p class="intro">Program yang diadakan dibulan ramadhan untuk mempererat silaturahmi.</p>
                                    <p class="read-more"><a href="#" class="btn btn-primary">Continue reading</a>
                                    </p>
                                </div>

                            </div>

                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->
            </div>
            <!-- *** BLOG HOMEPAGE END *** -->

        <!-- /#content -->

        <!-- *** FOOTER ***-->
          <?php include 'footer.php';?>
        <!-- *** FOOTER END *** -->

    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE *** -->
 <!-- script -->
      <?php include 'script.php';?>
<!-- end of script -->

</body>

</html>
