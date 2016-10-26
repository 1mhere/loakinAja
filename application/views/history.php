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
                        <li>History</li>
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

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>History</h1>

                        <p class="lead">Transaksi yang sudah Anda Lakukan</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  foreach ($data as $d) {
              		                  ?>
                                    <tr>
                                        <th><?php echo $d['id_barang']; ?></th>
                                        <td><?php echo $d['tanggal']; ?></td>
                                        <td><?php echo $d['harga']; ?></td>
                                        <td><span class="label label-succes"><?php echo $d['status']; ?></span>
                                        </td>
                                        <td><a href="<?php echo base_url()."index.php/user/detail/".$d['id_barang'] ?>" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
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
