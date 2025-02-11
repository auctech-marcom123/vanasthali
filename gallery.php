<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vanasthali Group | Gallery</title>
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
                <h1>gallery</h1>
            </div>
            <!--Page Info-->
            <div class="page-info">
                <div class="auto-container clearfix">
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li>gallery</li>
                    </ul>
                </div>
            </div>
            <!--End Page Info-->
        </section>
        <!--End Page Title-->

        <!-- Gallery Page Section -->
        <section class="gallery-page-section">
            <div class="auto-container">
                <!--MixitUp Gallery-->
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <?php
                                include('db_con.php');
                                
                                
                                $sql = "SELECT DISTINCT gallery_type FROM add_gallery";
                                $types = $con->query($sql);

                               
                                $projectTypes = [];
                                if ($types->num_rows > 0) {
                                    while ($type = $types->fetch_assoc()) {
                                        $projectTypes[] = $type['gallery_type'];
                                        echo "<li class='filter' data-role='button' data-filter='." . strtolower($type['gallery_type']) . "'>" . ucfirst($type['gallery_type']) . "</li>";
                                    }
                                }
                                ?>
                        </ul>
                    </div>

                    <div class="filter-list row">
                        <?php
                            $sql = "
                                SELECT p.gallery_type, p.heading, p.id, GROUP_CONCAT(i.image) AS images
                                FROM add_gallery p
                                LEFT JOIN gallery_images i ON p.id = i.gallery_type_id
                                GROUP BY p.id
                            ";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $images = explode(',', $row['images']); // Split images into an array
                                    $projectType = strtolower($row['gallery_type']); // Project type for filtering
                                    $heading = htmlspecialchars($row['heading']); // Heading for display
                            ?>
                        <!-- Gallery Item -->
                        <div class="gallery-item-two mix all <?php echo $projectType; ?> col-lg-4 col-md-6 col-sm-12">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="admin/gallery_uploads/<?php echo htmlspecialchars($images[0]); ?>"
                                        alt="<?php echo $projectType; ?>">
                                </figure>
                                <div class="overlay-box">
                                    <a href="admin/gallery_uploads/<?php echo htmlspecialchars($images[0]); ?>"
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
        <!-- JavaScript -->
       
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
                    link.classList.add('active'); // Highlight the active filter
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