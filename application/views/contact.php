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
                        <li>Contact</li>
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
                        <h1>Kontak</h1>

                        <p class="lead">Ingin tahu lebih lanjut tentang loakinAja.com? Hubungi kami melalui: </p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                              <h4>Alamat</h4>

                              <p>
                                  <br>Jl. Gegerkalong Hilir, Desa Ciwaruga
                                  <br>Parongpong, Kabupaten Bandung Barat,
                                  <br>Jawa Barat 40012
                                  <br>Indonesia
                                  <br>
                              </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i>Telepon</h3>
                                <p class="text-muted">Berikut nomor telepon kami yang bisa kamu hubungi</p>
                                <p><strong>+62837 7636 3847</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Email</h3>
                                <p class="text-muted">Hubungi kami lewat email.</p>
                                <ul>
                                    <li><strong><a href="mailto:">info@loakinaja.com</a></strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <!-- <hr>

                        <div id="map">

                        </div>

                        <hr>
                        <h2>Contact form</h2>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>

                        </form> -->


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

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(49.1678136, 16.5671893),
                mapTypeId: google.maps.MapTypeId.ROAD,
                scrollwheel: false
            }
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);

            var myLatLng = new google.maps.LatLng(49.1681989, 16.5650808);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</body>

</html>
