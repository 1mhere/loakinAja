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

                <!-- <div class="col-sm-12">

                    <ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Blog</a>
                        </li>
                        <li>Blog post</li>
                    </ul>
                </div> -->

                <div class="col-sm-9" id="blog-post">



                    <!-- /.box -->
                </div>
                <!-- /#blog-post -->

                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
               <div class="panel panel-default sidebar-menu">

                   <div class="panel-heading">
                       <h3 class="panel-title">Pages</h3>
                   </div>

                   <div class="panel-body">
                       <ul class="nav nav-pills nav-stacked">

                           <li>
                               <a href="<?php echo base_url()."index.php/main/contact" ?>">Contact page</a>
                           </li>
                           <li>
                               <a href="<?php echo base_url()."index.php/main/faq" ?>">FAQ</a>
                           </li>

                       </ul>

                   </div>
               </div>

               <!-- *** PAGES MENU END *** -->


               <div class="banner">
                   <a href="<?php echo base_url()."index.php/main/bloglist" ?>">
                       <img src="<?php echo base_url()."assets/img/banner.jpg" ?>" alt="sales 2014" class="img-responsive">
                   </a>
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
