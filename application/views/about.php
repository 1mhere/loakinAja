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
                        <li>Tim</li>
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

                    <div class="box" id="text-page">

                        <h2>Tim LoakinAja.com</h2>

                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="<?php echo base_url()."assets/img/cto.png" ?>" class="img-circle img-responsive" alt="">
                                </p>
                            </div>
                            <div class="col-md-8">
                              <p><strong>CTO</strong></p>
                              <ul>
                                  <li>Muhammad Ridwan Fathin</li>
                                  <li>D4-Teknik Informatika</li>
                              </ul>

                              <blockquote>
                                  <p>Hal yang sulit itu menarik ketika kita punya semangat disana.</p>
                              </blockquote>
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
