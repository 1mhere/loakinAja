<!DOCTYPE html>
<html lang="en">

<!-- head -->
  <?php include 'head.php';?>
<!-- end of head -->

<body>

    <div id="all">

        <div id="content">
            <div class="container">

                  <div class="modal-dialog modal-sm">

                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="Login">Admin</h4>
                          </div>
                          <div class="modal-body">
                              <form action="<?php echo base_url()."index.php/user/login" ?>" method="post">
                                  <div class="form-group">
                                      <input type="text" name="username" class="form-control" id="email-modal" placeholder="email">
                                  </div>
                                  <div class="form-group">
                                      <input type="password" name="password" class="form-control" id="password-modal" placeholder="password">
                                  </div>

                                  <?php echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
                                  <p class="text-center">
                                      <button class="btn btn-primary"><i class="fa fa-user"></i> Masuk</button>
                                  </p>

                              </form>
                                <p class="text-center text-muted">Masuk sebagai <a href="<?php echo base_url()."index.php/user/loginMember" ?>"><strong>Member</strong></a>
                                  atau
                                    <a href="<?php echo base_url()."index.php/mitra/login" ?>"><strong>Mitra</strong></a>.</p>


                              <p class="text-center text-muted">Belum punya akun?</p>
                              <p class="text-center text-muted"><a href="<?php echo base_url()."index.php/main/register" ?>"><strong>Daftar</strong></a>! </p>

                          </div>
                      </div>
                  </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


    </div>
    <!-- /#all -->


    <!-- *** SCRIPTS TO INCLUDE *** -->
 <!-- script -->
      <?php include 'script.php';?>
<!-- end of script -->

</body>

</html>
