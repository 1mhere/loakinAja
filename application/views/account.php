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

                        <h3>Data Pribadi</h3>
                        <p class="text-muted">Nama : </p>
                        <p class="lead"><?php echo $this->session->userdata('name'); ?></p>
                        <p class="text-muted">Username : </p>
                        <p class="lead"><?php echo $this->session->userdata('username'); ?></p>
                        <p class="text-muted">Email : </p>
                        <p class="lead"><?php echo $this->session->userdata('email'); ?></p>
                        <p class="text-muted">Nomor Telepon : </p>
                        <p class="lead"><?php echo $this->session->userdata('phone'); ?></p>
                        <p class="text-muted">Alamat :</p>
                        <p class="lead"><?php echo $this->session->userdata('alamat'); ?></p>
                        <br> <br>
                        <div class="text-center">
                              <a href="<?php echo base_url()."index.php/user/account_edit" ?>" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-sm">Edit Profil</span></a>
                        </div>
                        <br> <br>
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
