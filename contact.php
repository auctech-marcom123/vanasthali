<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Vanasthaly Group | Contact </title>
<!-- Stylesheets -->
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
            <h1>Contact</h1>
        </div>
        <!--Page Info-->
        <div class="page-info"> 
            <div class="auto-container clearfix">
                <ul class="bread-crumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->

    <!-- Contact Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <!-- Social Outer -->
            <div class="map-outer">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8928.01869875074!2d81.006265!3d26.837337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2dcff76b0fd%3A0x8b725d01a2dd3cac!2sVANASTHALI%20GROUP!5e1!3m2!1sen!2sin!4v1734769378014!5m2!1sen!2sin" width="100%" height=400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <ul class="contact-info wow slideInLeft">
                    <li>
                        <span>Mail us</span>
                        <p style="text-transform: lowercase;"><a href="mailto:contactus@vanasthaligroup.in">contactus@vanasthaligroup.in</a></p>
                    </li>

                    <li>
                        <span>Call us</span>
                        <p><a href="tel:+9184333 32666">+91 – 84333 32666, 72390 00078</a></p>
                    </li>

                    <li>
                        <span>Visit us</span>
                        <p>1/543, VARDAN KHAND, SEC.-1 GOMTI NAGAR EXTENSION LUCKNOW- 226010</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Contact Map Section -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">contact us</span>
                <h2>get in touch</h2>
            </div>

            <!-- Contact Form-->
            <div class="contact-form-1">
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
        </div>
    </section>
    <!--End Contact Section -->

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
<script src="js/validate.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="public/js/script.js"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>