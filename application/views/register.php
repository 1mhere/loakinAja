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
                        <li><a href="<?php echo base_url()."index.php/user/register" ?>">Daftar / Masuk</a></li>
                    </ul>

                </div> -->

                <div class="col-md-6">
                    <div class="box">
                        <h1>Daftar</h1>

                        <p class="lead">Belum punya akun?</p>
                        <p>Daftar sekarang juga untuk dapat menjual dan mendonasikan barang bekas Anda.</p>

                        <hr>

                        <form action="<?php echo base_url()."index.php/user/do_insert" ?>" method="post">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Kata sandi</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <?php echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Masuk</h1>

                        <p class="lead">Sudah punya akun?</p>
                        <p class="text-muted"></p>

                        <hr>

                        <!-- <form action="<?php echo base_url()."index.php/main" ?>" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>Masuk</button>
                            </div>
                        </form> -->
                        <a href="<?php echo base_url()."index.php/user/loginMember" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-sm">Masuk</span></a>

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
