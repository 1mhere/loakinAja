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
                        <li><a href="#">Ladies</a>
                        </li>
                        <li><a href="#">Tops</a>
                        </li>
                        <li>White Blouse Armani</li>
                    </ul>

                </div> -->

                <div class="col-sm-3">
                    <!-- *** MENUS AND FILTERS ***-->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <!-- <a href="<?php echo base_url()."index.php/main/category" ?>">Categories -->
                                       <!-- <span class="badge pull-right">42</span> -->
                                     <!-- </a> -->
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
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Brands <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Armani (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Versace (12)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Carlo Bruni (15)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Jack Honey (14)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div> -->

                    <!-- <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Colours <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour white"></span> White (14)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour green"></span> Green (20)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour red"></span> Red (10)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div> -->

                    <!-- *** MENUS AND FILTERS END *** -->

                    <!-- <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div> -->
                </div>

                    <div class="row" id="productMain">
                        <div class="col-sm-4">
                            <div id="mainImage">
                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                            </div>

                            <!-- /.ribbon -->
                            <div class="ribbon sale">
                                <div class="theribbon">TOP</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->



                        </div>
                        <div class="col-sm-4">
                            <div class="box">
                                <h1 class="text-center">Piring Paket Hajatan</h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Description</a>
                                </p>
                                <p class="price">Rp. 183.000</p>

                                <p class="text-center buttons">
                                    <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>


                            </div>

                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url()."assets/img/T1.jpg" ?>" class="thumb">
                                        <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url()."assets/img/T1.jpg" ?>" class="thumb">
                                        <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url()."assets/img/T1.jpg" ?>" class="thumb">
                                        <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p>Paket dengan jumlah 50 piring.</p>
                            <h4>Material</h4>
                            <ul>
                                <li>Kaca</li>
                            </ul>
                            <h4>Size</h4>
                            <ul>
                                <li>diameter 10"</li>
                            </ul>

                            <blockquote>
                                <p><em>Barang mulus 100%</em>
                                </p>
                            </blockquote>

                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
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
