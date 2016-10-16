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
                        <li>Ladies</li>
                    </ul>
                </div> -->

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS *** -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <!-- <a href="<?php echo base_url()."index.php/main/category" ?>">Men <span class="badge pull-right">42</span></a> -->
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




                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="<?php echo base_url()."assets/img/banner.jpg" ?>" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <img src="<?php echo base_url()."assets/img/banner2.jpg" ?>" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <img src="<?php echo base_url()."assets/img/banner.jpg" ?>" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <!-- <div class="box">
                        <h1>Ladies</h1>
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div> -->

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url()."index.php/main/detail" ?>" class="btn btn-default">View detail</a>
                                        <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url()."index.php/main/detail" ?>" class="btn btn-default">View detail</a>
                                        <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url()."index.php/main/detail" ?>" class="btn btn-default">View detail</a>
                                        <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url()."index.php/main/detail" ?>" class="btn btn-default">View detail</a>
                                        <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url()."index.php/main/detail" ?>" class="btn btn-default">View detail</a>
                                        <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url()."index.php/main/detail" ?>">
                                                <img src="<?php echo base_url()."assets/img/T1_2.jpg" ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/main/detail" ?>" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/T1.jpg" ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url()."index.php/main/detail" ?>">Piring Paket Hajatan</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url()."index.php/main/detail" ?>" class="btn btn-default">View detail</a>
                                        <a href="<?php echo base_url()."index.php/main/basket" ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
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