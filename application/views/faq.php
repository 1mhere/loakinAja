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

                <!-- <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>FAQ</li>
                    </ul>

                </div> -->

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
 <div class="panel panel-default sidebar-menu">

     <div class="panel-heading">
         <h3 class="panel-title">Halaman</h3>
     </div>

     <div class="panel-body">
         <ul class="nav nav-pills nav-stacked">
           <li>
               <a href="<?php echo base_url()."index.php/main/about" ?>">Tim LoakinAja.com</a>
           </li>
             <li>
                 <a href="<?php echo base_url()."index.php/main/contact" ?>">Kontak</a>
             </li>
             <li>
                 <a href="<?php echo base_url()."index.php/main/faq" ?>">FAQ</a>
             </li>

         </ul>

     </div>
 </div>

                 <!-- *** PAGES MENU END *** -->


                 <div class="banner">
                     <a href="<?php echo base_url()."index.php/main/bloglist" ?>">
                         <img src="<?php echo base_url()."assets/img/banner.jpg" ?>" alt="sales 2014" class="img-responsive">
                     </a>
                 </div>
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>Frequently asked questions</h1>

                        <p class="lead">Berikut pertanyaan-pertanyaan yang sering ditanyakan tentang loakinAja.com</p>

                        <hr>

                        <div class="panel-group" id="accordion">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                          					    <a data-toggle="collapse" data-parent="#accordion" href="#faq1">

                          						          1. Apa syarat untuk bisa menjual barang bekas saya di LoakinAja.com?

                          					    </a>

                          					</h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Anda harus mendaftarkan diri Anda, dan mengisi data diri dengan benar.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                          					    <a data-toggle="collapse" data-parent="#accordion" href="#faq2">

                          						          2. Kemana LoakinAja.com menyalurkan donasi saya?

                          					    </a>

                          					</h4>
                                </div>
                                <div id="faq2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Kami akan menyalurkan donasi Anda untuk membantu orang-orang yang membutuhkan.</p>

                                    </div>
                                </div>
                            </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
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
