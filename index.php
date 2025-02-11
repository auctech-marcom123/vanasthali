<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vanasthali Group</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/menubar.css">
    <link rel="stylesheet" href="public/css/ionicon.min.css">
    <link rel="stylesheet" href="public/css/reset.min.css">
    <link rel="stylesheet" href="public/css/style.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   
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

        <!-- Banner Section -->
        <section class="banner-section">
            <div class="banner-carousel owl-carousel owl-theme">
                <?php
					include('db_con.php');
					$result = $con->query("SELECT image_path, title FROM add_banner");

					while ($row = $result->fetch_assoc()):
                 ?>
                <!-- Slide Item -->
                <div class="slide-item">

                    <div class="image-layer" style="background-image: url(admin/<?php echo ($row['image_path']); ?>);">
                    </div>

                    <div class="content-box">
                        <div class="content">
                            <div class="auto-container">
                                <span class="title">Vanasthali Group</span>
                                <h2 class="fs-80"><?php echo ($row['title']); ?></h2>
                                <div class="btn-box"><a href="https://www.auctech.in/vanasthali/about.php" class="theme-btn btn-style-one"><span
                                            class="btn-title">About Us </span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <!--END Banner Section -->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column wow fadeInRight">
                            <div class="sec-title">
                                <!-- <span class="title">villa overview</span> -->
                                <h2>About Vanasthali Group</h2>
                            </div>
                            <div class="text">Vanasthali Group established in 2017, Vanasthali Group was stood out in
                                the industry with its ethical business practices, Rapidly Acquiring A public image of a
                                reliable,quality conscious developer,every conceptualised project ids designed and
                                implemented in association with architects and landscape designers,Who are the best in
                                the business.on- time delivery.low operating costs and an international standard of
                                design has led to various accolades.</div>
                            <ul class="list-style-one">
                                <li>Delivering Excellence Since 2017</li>
                                <li>Eco-Friendly Developments</li>
                                <li>Trust and Reliability</li>
                                <li>Architectural Brilliance</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="image-box">
                                <figure class="image"><a href="images/resource/about-img-1.jpg"
                                        class="lightbox-image"><img src="images/resource/about-img-1.jpg" alt=""></a>
                                </figure>
                                <span class="title">get your new home</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="facts-couner clearfix">
                    <!--Column-->
                    <div class="counter-column wow fadeInUp">
                        <div class="inner">
                            <div class="icon-box text-white"><img src="images/1.png" alt=""></div>

                            <h4 class="counter-title">Established in 2017</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="icon-box"><img src="images/2.png" alt=""></div>
                            <h4 class="counter-title">Best Bedroom Design</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <div class="icon-box"><img src="images/3.png" alt=""></span></div>
                            <h4 class="counter-title">Bath Tubs</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <div class="icon-box"><img src="images/4.png" alt=""></span></div>
                            <h4 class="counter-title">9+ Years Of Experience</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner">
                            <div class="icon-box"><img src="images/5.png" alt=""></div>
                            <h4 class="counter-title">car parking</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->

        <!-- Room Section -->
        <section class="room-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="title">Vanasthali Group</span>
                    <h2>Our Project</h2>
                </div>
            </div>
            <!--Room Detail Tabs-->
            <div class="room-detail-tabs">
                <div class="tabs-box">
                    <div class="auto-container">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#room-tab-1" class="tab-btn">PANCHVATI</li>
                            <li data-tab="#room-tab-2" class="tab-btn active-btn">Vanasthali Farms</li>
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab -->
                            <div class="tab" id="room-tab-1">
                                <div class="row">
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-column clearfix">
                                            <h2>PANCHVATI</h2>

                                            <div class="text">
                                                <p class="mb-2 mt-0"><span class="text-primary">Location: –</span> Near
                                                    Purvanchal Expressway, Amethi Market, Gosaiganj- Lucknow</p>
                                                To change the industry of conventional real estate development,
                                                championing excellence in craftsmanship, planning and service. The
                                                greatest residential architectural marvels of the world shall rise here,
                                                defining luxury as a lifestyle lived every day. Our mission which guides
                                                us in our all real estate endeavours is a three point promise,
                                                meticulously chalked out to ensure that our brand becomes synonymous
                                                with the highest standards in real estate quality today, tomorrow and in
                                                the coming decades.
                                            </div>
                                            <div class="row">
                                                <div class="room-info col-lg-4 col-md-4 col-sm-12">
                                                    <span class="icon flaticon-floor"></span>
                                                    <h5>Marble Flooring</h5>
                                                </div>

                                                <div class="room-info col-lg-4 col-md-4 col-sm-12">
                                                    <span class="icon flaticon-partnership"></span>
                                                    <h5>Wooden Furniture</h5>
                                                </div>

                                                <div class="room-info col-lg-4 col-md-4 col-sm-12">
                                                    <span class="icon flaticon-house"></span>
                                                    <h5>Fancy Windows</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <figure class="image"><a href="images/resource/room-img-1.jpg"
                                                    class="lightbox-image"><img src="images/resource/room-img-1.jpg"
                                                        alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab -->
                            <div class="tab active-tab" id="room-tab-2">
                                <div class="row">
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-column clearfix">
                                            <h2>Vanasthali Farms</h2>
                                            <div class="text">
                                            <p class="mb-2 mt-0"><span class="text-primary">Location: –</span>  Gangaganj- bhanmau road, passage thru Sultanpur road, Lucknow</p>
                                                Vanasthali group brings you the best ever farm houses and
                                                furnished homes at vanasthali farms, with all the amenities and
                                                naturally grown habitats for sustainable living.
                                                <br>
                                                We provide you the best farm houses just 45mins drive from main city
                                                centre of Lucknow.
                                                35mins drive from Palassio mall, ekana stadium.<br>
                                                The road to vanasthali farms is full of excitement and views are exotic,
                                                it’s something you are looking for in a farm houses for so long.
                                            </div>
                                            <div class="row">
                                                <div class="room-info col-lg-4 col-md-4 col-sm-12">
                                                    <span class="icon flaticon-floor"></span>
                                                    <h5>Marble Flooring</h5>
                                                </div>

                                                <div class="room-info col-lg-4 col-md-4 col-sm-12">
                                                    <span class="icon flaticon-partnership"></span>
                                                    <h5>Wooden Furniture</h5>
                                                </div>

                                                <div class="room-info col-lg-4 col-md-4 col-sm-12">
                                                    <span class="icon flaticon-appliances"></span>
                                                    <h5>Quality appliance</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <figure class="image"><a href="images/resource/room-img-2.jpg"
                                                    class="lightbox-image"><img src="images/resource/room-img-2.jpg"
                                                        alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Room Section -->

        <!-- Call To Action -->
        <section class="call-to-action">
            <div class="auto-container">
                <div class="sec-title light text-center wow fadeInUp">
                    <span class="title">don’t hestitate to contact us</span>
                    <h2>MAKE AN APPOINTMENT NOW</h2>
                </div>
                <div class="btn-box wow fadeInUp" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href="#" class="theme-btn btn-style-two" ><span class="btn-title">Book Appointment</span></a></div>
            </div>
        </section>
       <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-black" id="staticBackdropLabel" style="color: black">Book Appointment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form  method="POST" action="save_contact.php" id="enquiryForm" class="contact-form">
                    <div class="row clearfix">                                    
                        <div class="col-md-6 col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Your name" required="">
                        </div>
                        
                        <div class="col-md-6 col-sm-12 form-group">
                            <input type="number" name="phone" placeholder="Your Phone" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Write your message"></textarea>
                        </div>

                        <div class="col-md-12 col-sm-12 form-group text-center">
                            <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">send message</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
        <!--End Call To Action -->
        <!--testing-->

        <section class="gallery-page-section">
            <div class="auto-container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="auto-container">
                        <div class="sec-title text-center">
                            <span class="title">Vanasthali Group</span>
                            <h2>Our Aminities</h2>
                        </div>
                    </div>
    
                    <div class="filter-list row">
                        <!-- Gallery Item Two -->
                        <!-- our amenities -->
                         
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/1.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/1.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Commercial Area</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/2.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/2.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Park</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/3.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/3.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Yoga Centre</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/9.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/9.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Hospital</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/8.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/8.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Swimming Pool</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/7.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/7.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Club</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/5.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/5.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Community Centre</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/6.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/6.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">Multi Speciality Gym</h3>
                        </div>
                        <div class="gallery-item-two mix all views col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image"><img src="images/out-aminities/4.png" alt=""></figure>
                                <div class="overlay-box"><a href="images/out-aminities/4.png" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                            </div>
                            <h3 class="text-center nab-text">School</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       


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
                            GROUP BY blogs.id LIMIT 2"; 

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

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="gallery-carousel owl-carousel owl-theme">
                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>
                
                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>
                
                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>
                
                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-add"></span></a></div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--End Gallery Section -->

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
    <script src="js/map-script.js"></script>

    <script src="public/js/script.js"></script>
    <!--End Google Map APi-->
</body>

</html>