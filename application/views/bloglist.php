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

                        <li><a href="index.html">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>
                </div> -->

                <!-- *** LEFT COLUMN ***
		     _________________________________________________________ -->

                <div class="col-sm-9" id="blog-listing">

                    <ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li>Daftar Blog</li>
                    </ul>


                    <div class="box">

                        <h1>Blog LoakinAja.com</h1>
                        <p>Temukan hal yang bermanfaat dengan membaca blog kami.</p>

                    </div>

                    <div class="post">
                        <h2><a href="post.html">Fashion now</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.html"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="post.html">
                                <img src="img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>


                    <div class="post">
                        <h2><a href="post.html">Who is who - example blog post</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.html"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="post.html">
                                <img src="img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>

                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next disabled"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>



                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->


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
                             <a href="<?php echo base_url()."index.php/main/about" ?>">About Us</a>
                         </li>
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
