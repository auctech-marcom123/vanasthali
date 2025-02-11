<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Vanasthali Group | Panchvati</title>
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
    <style>
       .filter.active {
    background-color: #333; /* Darker background for active filter */
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
        <section class="page-title bread-crumb-img" style="background-image:url(images/background/4.jpg);">
            <div class="auto-container">
                <h1>Panchvati</h1>
            </div>
            <div class="page-info">
                <div class="auto-container clearfix">
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Panchvati</li>
                    </ul>
                </div>
            </div>
            <!--End Page Info-->
        </section>
        <!--End Page Title-->
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column wow fadeInRight">
                            <div class="sec-title">
                                <span class="title">
                                    <h1>Panchvati</h1>
                                </span>

                            </div>
                            <div class="text">Location: – Near Purvanchal Expressway, Amethi Market, Gosaiganj- Lucknow
                                <br><br>
                                To change the industry of conventional real estate development, championing excellence
                                in craftsmanship, planning and service. The greatest residential architectural marvels
                                of the world shall rise here, defining luxury as a lifestyle lived every day. Our
                                mission which guides us in our all real estate endeavours is a three point promise,
                                meticulously chalked out to ensure that our brand becomes synonymous with the highest
                                standards in real estate quality today, tomorrow and in the coming decades.
                            </div>
                            <div class="btn-box wow fadeInUp"><a href="images/legal/VANASTHALI-PLAN-01.pdf"
                                    class="theme-btn btn-style-two lightbox-image" target="_blank"><span
                                        class="btn-title">Download Plan</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="image-box">
                                <figure class="image"><a href="images/legal/VANASTHALI-PLAN-01.pdf"
                                        class="lightbox-image" target="_blank"><img src="images/resource/room-img-1.jpg"
                                            alt=""></a></figure>
                                <span class="title">Panchvati</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Gallery Section -->
        <section class="gallery-page-section">
            <div class="auto-container">
                <!-- MixitUp Gallery -->
                
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            
                            <?php
                                include('db_con.php');
                                
                                
                                $sql = "SELECT DISTINCT project_type FROM add_project";
                                $types = $con->query($sql);

                               
                                $projectTypes = [];
                                if ($types->num_rows > 0) {
                                    while ($type = $types->fetch_assoc()) {
                                        $projectTypes[] = $type['project_type'];
                                        echo "<li class='filter active' data-role='button' data-filter='." . strtolower($type['project_type']) . "'>" . ucfirst($type['project_type']) . "</li>";
                                    }
                                }
                                ?>
                        </ul>
                    </div>

                    <div class="filter-list row">
                        <?php
                            $sql = "
                                SELECT p.project_type, p.heading, p.id, GROUP_CONCAT(i.image) AS images
                                FROM add_project p
                                LEFT JOIN project_images i ON p.id = i.project_type_id
                                GROUP BY p.id
                            ";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $images = explode(',', $row['images']);
                                    $projectType = strtolower($row['project_type']);
                                    $heading = htmlspecialchars($row['heading']);
                            ?>
                        <!-- Gallery Item -->
                        <div class="gallery-item-two mix all <?php echo $projectType; ?> col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="admin/project_uploads/<?php echo htmlspecialchars($images[0]); ?>"
                                        alt="<?php echo $projectType; ?>">
                                </figure>
                                <div class="overlay-box">
                                    <a href="admin/project_uploads/<?php echo htmlspecialchars($images[0]); ?>"
                                        class="lightbox-image" data-fancybox="gallery">
                                        <span class="icon flaticon-add"></span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="text-center nab-text"><?php echo $heading; ?></h3>
                        </div>
                        <?php
                                }
                            } else {
                                echo '<p class="text-danger">No image found in gallery.</p>';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/mixitup@3.3.1/dist/mixitup.min.js"></script>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter');
            const galleryContainer = document.querySelector('.mixitup-gallery');

          
            let activeFilter = localStorage.getItem('activeFilter') || 'ALL';

            
            const mixer = mixitup(galleryContainer, {
                selectors: {
                    target: '.gallery-item-two' 
                },
                animation: {
                    duration: 300
                },
                load: {
                    filter: '.' + activeFilter 
                }
            });

            
            filterLinks.forEach(link => {
                const filter = link.getAttribute('data-filter');
                
                if (filter === '.' + activeFilter || (filter === 'ALL' && activeFilter === 'ALL')) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active'); 
                }
            });

            // Handle the filter button clicks
            filterLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    localStorage.setItem('activeFilter',
                    filter); 

                   
                    mixer.filter(filter);

                   
                    filterLinks.forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        });
        </script>
        <!-- End Gallery Page Section -->

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
    <!--Google Map APi Key-->
    <script src="public/js/script.js"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
</body>


</html>