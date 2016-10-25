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
                        <li>Profil</li>
                    </ul>

                </div> -->

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
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
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Profil</h1>
                        <p class="lead">Ubah data pribadi kamu dan kata sandi kamu disini</p>
                        <p class="text-muted">harap isi dan perbaharui dengan benar untuk kelancaran transaksi dengan kami.</p>

                        <h3>Ubah Kata sandi</h3>

                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_old">Kata sandi lama</label>
                                        <input type="password" class="form-control" name="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_1">Kata sandi baru</label>
                                        <input type="password" class="form-control" name="password_1">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_2">Ulang kata sandi</label>
                                        <input type="password" class="form-control" id="password_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                            </div>
                        </form>

                        <hr>

                        <h3>Data Pribadi</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="firstname">Nama lengkap</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="city">Alamat</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>

                                </div>
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
