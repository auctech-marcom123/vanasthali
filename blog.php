<?php
include 'db_con.php'; // Include your DB connection

if (isset($_GET['page_url'])) {
	// Escape the URL parameter to prevent SQL injection
	$page_url = mysqli_real_escape_string($con, $_GET['page_url']);

	// Fetch product details using page_url
	$blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
	$blog_result = mysqli_query($con, $blog_query);

	if ($blog_result && mysqli_num_rows($blog_result) > 0) {
		// Fetch the product details
		$blog = mysqli_fetch_assoc($blog_result);

		// Fetch product images related to the product ID
		$image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
		$image_result = mysqli_query($con, $image_query);
        
?>


<?php
	} else {
		// If no product found, show a message
		echo "<p>Product not found.</p>";
	}
} else {
	// If page_url is not provided
	echo "<p>No product URL provided.</p>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $blog['blog_desc_first']  ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second']  ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one']  ?>">

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
    <style>
        * {
        margin: 0px;
        padding: 0px;
        border: none;
        outline: none;
        font-size: 100%;
        line-height: inherit;
        font-family:inherit;
    }
    span{
      
        color: rgb(0, 0, 0);
        font-family: 'Rajdhani', sans-serif !important;
    
        }
    </style>
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
                <h1>
                    <h1 class="pbmit-tbar-title"> <?php echo str_replace('-', ' ', $blog['blog_url'])  ?></h1>
                </h1>
            </div>
            <!--Page Info-->
            <div class="page-info">
                <div class="auto-container clearfix">
                    <ul class="bread-crumb">
                        <li><a href="https://www.auctech.in/vanasthali/">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
            <!--End Page Info-->
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side / Our Blog-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="news-detail">
                            <!-- News Block -->
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <?php
								// Fetch and display the first product image
								$image_row = mysqli_fetch_assoc($image_result); // Fetch the first image
								if ($image_row) {
									echo "<img src='blog_uploads/{$image_row['image']}' alt='Product Image' class='img-fluid mb-3 top-img' style='width:100%; object-fit:cover;' />";
								} else {
									echo "<p>No product images available.</p>"; // Message if no image is found
								}
								?>
                                    </div>
                                    <div class="lower-content">
                                        <span class="date">
                                            <?php echo date("j F Y", strtotime($blog['created_at'])); ?>
                                        </span>
                                        <h5><?php echo $blog['blog_heading'] ?></h5>
                                        <div class="text">
                                            <p>
                                                <span style="color: rgb(0, 0, 0);font-family: none !important"><?php echo $blog['blog_desc_two'] ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <!-- Search -->

                            <!-- Post Widget -->
                            <div class="sidebar-widget popular-posts">
                            <div class="widget-content">
                                    <h4 class="sidebar-title">Recent Blogs</h4>
                                    <?php
                                    include('db_con.php');

                                    // Get current date
                                    $current_date = date("Y-m-d");

                                    
                                    $sql = "SELECT blogs.blog_heading AS heading, 
                                                    blogs_images.image, 
                                                    blogs.blog_url,
                                                    blogs.created_at
                                            FROM blogs
                                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                            WHERE DATE(blogs.created_at) = '$current_date'
                                            GROUP BY blogs.id  
                                            ORDER BY blogs.created_at DESC LIMIT 4"; 

                                    $result = $con->query($sql);

                                    // Check if there are any results
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $heading = $row['heading'];
                                            $image = $row['image'];
                                            $blog_url = $row['blog_url'];
                                            $created_at = $row['created_at'];
                                            $formatted_date = date("j F Y", strtotime($created_at));
                                    ?>
                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="<?php echo $blog_url; ?>"><img
                                                        src="blog_uploads/<?php echo $image; ?>" alt=""></a></figure>
                                            <div class="text" style="font-size:11px; line-height:17px;"><a href="<?php echo $blog_url; ?>"><?php echo $heading; ?></a></div>
                                        </div>
                                    </article>
                                    <?php 
                                        }
                                    } else {
                                        
                                        echo "<p>No blog found for today</p>";
                                    }
                                    ?>
                                </div>

                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Page Container -->

        <!--Main Footer-->
        <footer class="main-footer" id="footer">
            <?php
                include('footer.php');
            ?>
        </footer>
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
    <script src="public/js/script.js"></script>
    <script src="js/map-script.js"></script>
</body>

</html>