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
                        <li><a href="<?php echo base_url()."index.php/main" ?>">Home</a>
                        </li>
                        <li>mitra</li>
                    </ul>

                </div> -->

                <div class="col-md-12">
                    <div class="box">
                        <h1>Mitra Kerja</h1>

                        <p class="lead">Jadilah mitra kami untuk mempermudah usaha loak Anda.</p>
                        <p>Anda dapat bergabung dan menggunakan sistem kami untuk membuat bisnis loak Anda lebih maju.</p>
                        <p class="text-muted">Jika Ada hal yang ingin ditanyakan, <a href="<?php echo base_url()."index.php/main/contact" ?>">hubungi kami</a>.</p>

                        <hr>

                        <form action="<?php echo base_url()."index.php/mitra/do_join" ?>" method="post">
                          <div class="form-group">
                              <label for="berat">Nama Mitra</label>
                              <input type="text" class="form-control" name="name">
                          </div>
                          <div class="form-group">
                              <label for="berat">Username</label>
                              <input type="text" class="form-control" name="username">
                          </div>
                          <div class="form-group">
                              <label for="berat">Password</label>
                              <input type="password" class="form-control" name="password">
                          </div>
                          <div class="form-group">
                              <label for="berat">Email</label>
                              <input type="email" class="form-control" name="email">
                          </div>
                            <div class="form-group">
                                <label for="berat">Nomor Telepon</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="text">Alamat</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <?php echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Bergabung</button>
                            </div>
                        </form>
                    </div>
                </div>
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
