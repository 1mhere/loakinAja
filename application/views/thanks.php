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
                        <li>Thanks Page</li>
                    </ul>
                  </div> -->

                    <div class="row" id="error-page">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="box">

                                <p class="text-center">
                                    <img src="<?php echo base_url()."assets/img/logo.png" ?>" alt="Obaju template">
                                </p>


                                <?php
                                if($data==0){
                                  ?>
                                    <p class="lead">Terimakasih Atas Donasi Anda</p>
                                  <?php
                                }else{
                                ?>
                                <p class="text-muted">Uang Yang akan Anda peroleh : </p>
                                <p class="lead"><?php echo $data; ?></p>
                                <h3>Terimakasih Telah mempercayai kami</h3>
                                <?php
                                  }
                                ?>


                                <p class="buttons"><a href="<?php echo base_url()."index.php/main" ?>" class="btn btn-primary"><i class="fa fa-home"></i> Go to Homepage</a>
                                </p>
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
