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
                               <a href="<?php echo base_url()."index.php/user/account" ?>"><i class="fa fa-user"></i> Profil</a>
                           </li>
                           <li>
                             <a href="<?php echo base_url()."index.php/user/history" ?>" ><i class="fa fa-list"></i>History</a>
                           </li>
                           <li>
                               <a href="<?php echo base_url()."index.php/main/about" ?>" ><i class="fa fa-users"></i>Tim LoakinAja.com</a>
                           </li>
                             <li>
                                 <a href="<?php echo base_url()."index.php/main/contact" ?>"> <i class="fa fa-phone"></i>Kontak</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url()."index.php/main/faq" ?>" ><i class="fa fa-tasks"></i>FAQ</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url()."index.php/user/logout" ?>"><i class="fa fa-sign-out"></i> Keluar</a>
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

                        <form action="<?php echo base_url()."index.php/user/change_pass" ?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Kata sandi lama</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="newpass">Kata sandi baru</label>
                                        <input type="password" class="form-control" name="newpass">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="confirm">Ulang kata sandi</label>
                                        <input type="password" class="form-control" name="confirm" >
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <?php echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                            </div>
                        </form>

                        <hr>

                        <h3>Data Pribadi</h3>
                        <form action="<?php echo base_url()."index.php/user/change_profil" ?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="firstname">Nama </label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $this->session->userdata('name'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $this->session->userdata('username'); ?>" readonly>
                                        <p class="text-muted">*username tidak dapat diganti</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $this->session->userdata('email'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Nomor Telepon</label>
                                        <input type="number" class="form-control" name="phone" value="<?php echo $this->session->userdata('phone'); ?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="city">Alamat</label>
                                        <input type="text" class="form-control" name="address" value="<?php echo $this->session->userdata('alamat'); ?>">
                                    </div>
                                </div>
                            </div>
                            <?php echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
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
