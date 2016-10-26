<div class="navbar navbar-default yamm"  role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">


            <div class="navbar-buttons">
              <a class="navbar-brand home" href="<?php echo base_url()."index.php/main" ?>" data-animate-hover="bounce">
                  <img src="<?php echo base_url()."assets/img/logo.png"?>" alt="loakinAja logo" class="hidden-xs">
                  <img src="<?php echo base_url()."assets/img/logo-small.png" ?>" alt="loakinAja logo" class="visible-xs"><span class="sr-only">loakinAja - go to home page</span>
              </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <?php
                  $cek= $this->session->userdata('username');
                  if(empty($cek)){
                ?>
                <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/user/loginMember" ?>">
                    <i class="fa fa-user"></i>  <span class="hidden-xs">Masuk</span>
                </a>
                <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/user/register" ?>">
                    <i class="fa fa-sign-in"></i>  <span class="hidden-xs">Daftar</span>
                </a>
                <?php
              }else{ ?>
                <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/user/logout" ?>">
                    <i class="fa fa-sign-out"></i>  <span class="hidden-xs">Daftar</span>
                </a>
              <?php
              } ?>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="<?php echo base_url()."index.php/main" ?>">Home</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Blog<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Sosial</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main/blog" ?>">How You Can Help Protect Sea Turtles</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Children and families social work</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Child Care Fundraising</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Top insight into your event fundraisers</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                  </li>
                  <li class="dropdown yamm-fw">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Project<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <div class="yamm-content">
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <h5>Sosial</h5>
                                          <ul>
                                              <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Peduli Anak Yatim</a>
                                              </li>
                                              <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Buku untuk Sekolah</a>
                                              </li>
                                              <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Santunan Beasiswa</a>
                                              </li>
                                              <li><a href="<?php echo base_url()."index.php/main/blog" ?>">Iftar dan Buka Bersama</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <!-- /.yamm-content -->
                          </li>
                      </ul>
                    </li>



                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Other<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/user/register" ?>">Daftar / Masuk</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/user/history" ?>">History</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/user/account" ?>">Profil / Ganti Kata Sandi</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="col-sm-3">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href="#">Blog listing</a>
                                            </li>
                                            <li><a href="#">Blog Post</a>
                                            </li>
                                            <li><a href="#">FAQ</a>
                                            </li>
                                            <li><a href="#">Text page</a>
                                            </li>
                                            <li><a href="#">Text page - right sidebar</a>
                                            </li>
                                            <li><a href="#">404 page</a>
                                            </li>
                                            <li><a href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">
          <?php
            $cek= $this->session->userdata('username');
            if(empty($cek)){
          ?>
            <div class="navbar-collapse collapse right" id="jual">
                <a href="<?php echo base_url()."index.php/user/register" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-sign-in" aria-hidden="true"></i><span class="hidden-sm">Daftar</span></a>
            </div>

            <div class="navbar-collapse collapse right" id="donate">
                  <!-- <a  href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-primary navbar-btn"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-sm">Masuk</span></a> -->
                  <a href="<?php echo base_url()."index.php/user/loginMember" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-sm">Masuk</span></a>
            </div>
          <?php
        }else{ ?>
          <div class="navbar-collapse collapse right" id="donate">
                <!-- <a  href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-primary navbar-btn"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-sm">Masuk</span></a> -->
                <a href="<?php echo base_url()."index.php/user/logout" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-sm">Keluar</span></a>
          </div>
        <?php
        } ?>
            <!-- <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div> -->

        </div>

        <!-- <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Barang Loak">
                    <span class="input-group-btn">

                      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                    </span>
                </div>
            </form>

        </div> -->
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->
