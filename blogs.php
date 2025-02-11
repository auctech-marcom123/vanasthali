<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vanasthali Group | Blogs</title>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/menubar.css">
    <link rel="stylesheet" href="public/css/ionicon.min.css">
    <link rel="stylesheet" href="public/css/reset.min.css">
    <link rel="stylesheet" href="public/css/style.min.css">
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <header class="header" id="header">
            <?php
                include('header.php');
            ?>
        </header>
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-title bread-crumb-img" style="background-image:url(images/background/3.jpg);">
            <div class="auto-container">
                <h1>Our Blogs</h1>
            </div>
            <!--Page Info-->
            <div class="page-info">
                <div class="auto-container clearfix">
                    <ul class="bread-crumb">
                        <li><a href="https://www.auctech.in/vanasthali/">Home</a></li>
                        <li>Our Blogs</li>
                    </ul>
                </div>
            </div>
            <!--End Page Info-->
        </section>
        <!--End Page Title-->

         <!-- News Section -->
         <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="title">our recent blogs & Articles</span>
                    <h2>Blogs & articles</h2>
                </div>
                
                <div class="row">
                <?php
                    include('db_con.php');

                    $sql = "SELECT blogs.blog_heading AS heading, 
                                    blogs_images.image, 
                                    blogs.blog_desc_first, 
                                    blogs.blog_url,
                                    blogs.created_at
                            FROM blogs
                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                            GROUP BY blogs.id"; 

                    $result = $con->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        $heading = $row['heading'];
                        $image = $row['image'];
                        $blog_desc_first = $row['blog_desc_first'];
                        $blog_url = $row['blog_url'];
                        $created_at = $row['created_at'];
                        $formatted_date = date("j F Y", strtotime($created_at));

                    ?>

                    <!-- News Block -->
                    <div class="news-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft">
                            <div class="image-box">
                                <figure class="image"><a href="blog/<?php echo $blog_url; ?>"><img src="blog/blog_uploads/<?php echo $image; ?>"
                                            alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <span class="date"><?php echo $formatted_date; ?></span>
                                <h5><a href="blog/<?php echo $blog_url; ?>"><?php echo $heading; ?></a></h5>
                                <div class="text"><?php echo $blog_desc_first; ?></div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--End News Section -->


        <!--Main Footer-->
       <!--Main Footer-->
       <footer class="main-footer" id="footer">
            <?php
                include('footer.php');
            ?>
        </footer>
        <!-- End Footer -->
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <!--Scroll to top-->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/script.js"></script>
    <!--Google Map APi Key-->
    <script src="public/js/script.js"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
</body>

</html>