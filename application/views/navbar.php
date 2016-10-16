<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="<?php echo base_url()."index.php/main" ?>" data-animate-hover="bounce">
                <img src="<?php echo base_url()."assets/img/logo.png"?>" alt="Obaju logo" class="hidden-xs">
                <img src="<?php echo base_url()."assets/img/logo-small.png" ?>" alt="Obaju logo" class="visible-xs"><span class="sr-only">loakinAja - go to home page</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="<?php echo base_url()."index.php/main" ?>">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Item(s) in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="<?php echo base_url()."index.php/main" ?>">Home</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Clothing</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">T-shirts</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Shirts</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Pants</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Shoes</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Trainers</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Sandals</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Hiking shoes</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Casual</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Accessories</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Trainers</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Sandals</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Hiking shoes</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Casual</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Hiking shoes</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Casual</a>
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
                                        <h5>Shop</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main" ?>">Homepage</a>
                                            </li>
                                            <li><a href="<?php echo base_url()."index.php/main/category" ?>">Category</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main/register" ?>">Register / login</a>
                                            </li>
                                            <li><a href="#">Orders history</a>
                                            </li>
                                            <li><a href="#">Order history detail</a>
                                            </li>
                                            <li><a href="#">Wishlist</a>
                                            </li>
                                            <li><a href="#">Customer account / change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Order process</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url()."index.php/main/basket" ?>">Shopping cart</a>
                                            </li>
                                            <li><a href="#">Checkout - step 1</a>
                                            </li>
                                            <li><a href="#">Checkout - step 2</a>
                                            </li>
                                            <li><a href="#">Checkout - step 3</a>
                                            </li>
                                            <li><a href="#">Checkout - step 4</a>
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

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Item(s) in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Barang Loak">
                    <span class="input-group-btn">

  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->
