<?php include 'check_session.php' ?>
<?php
include('../db_con.php');

$sql = "SELECT COUNT(*) AS total_banners FROM add_banner"; 
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_banners = $row['total_banners'];
} else {
    $total_banners = 0;
}

$sql = "SELECT COUNT(*) AS total_query FROM contact"; 
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_query = $row['total_query'];
} else {
    $total_query = 0;
}

//blog
$sql = "SELECT COUNT(*) AS total_blog FROM blogs"; 
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_blog = $row['total_blog'];
} else {
    $total_blog = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vanasthali Group | Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php
            include('header.php');
        ?>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body" style="background:#93938a29">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="stat-widget-two card-body">
                            <!-- Card Content Section -->
                            <div class="stat-content d-flex align-items-center">
                                <!-- Icon and Text -->
                                <div class="stat-text d-flex align-items-center">
                                    <img width="20" height="20"
                                        src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/FD7E14/external-banner-infographic-and-chart-xnimrodx-lineal-xnimrodx-2.png"
                                        alt="Total Banner" class="mr-2" />
                                    <span>Total Banner</span>
                                </div>
                                <!-- Banner Total -->
                                <div class="stat-digit ml-auto">
                                    <?php echo $total_banners; ?>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-warning w-85" role="progressbar"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="stat-widget-two card-body">
                            <!-- Card Content Section -->
                            <div class="stat-content d-flex align-items-center">
                                <!-- Icon and Text -->
                                <div class="stat-text d-flex align-items-center">
                                <img width="20" height="20" src="https://img.icons8.com/sf-black/64/FD7E14/list.png" alt="list"/>
                                    <span>Total Query</span>
                                </div>
                                <!-- Banner Total -->
                                <div class="stat-digit ml-auto">
                                    <?php echo $total_query; ?>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-warning w-85" role="progressbar"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="stat-widget-two card-body">
                            <!-- Card Content Section -->
                            <div class="stat-content d-flex align-items-center">
                                <!-- Icon and Text -->
                                <div class="stat-text d-flex align-items-center">
                                    <img width="20" height="20"
                                        src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/FD7E14/external-banner-infographic-and-chart-xnimrodx-lineal-xnimrodx-2.png"
                                        alt="Total Banner" class="mr-2" />
                                    <span>Total Blogs</span>
                                </div>
                                <!-- Banner Total -->
                                <div class="stat-digit ml-auto">
                                    <?php echo $total_blog; ?>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-warning w-85" role="progressbar"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <?php
            include('footer.php');
        ?>