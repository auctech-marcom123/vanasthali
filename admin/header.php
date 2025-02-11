<style>
    .quixnav .metismenu > li:hover > a, .quixnav .metismenu > li:focus > a, .quixnav .metismenu > li.mm-active > a {
    background-color:rgb(0, 0, 0);
    color: orange;
}
.quixnav .metismenu > li > a {
    color: orange;
}
.quixnav .metismenu ul a:hover, .quixnav .metismenu ul a:focus, .quixnav .metismenu ul a.mm-active {
    text-decoration: none;
    color: orangered;
}
</style>
<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->


<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header"n style="background:black">
        <a href="index.php" class="brand-logo">
            <img class="logo-abbr" src="./images/favicon-1.png" alt="" style="max-width:120px;">
            <!-- <img class="logo-compact" src="./images/logo-text.png" alt="">
            <img class="brand-title" src="./images/logo-text.png" alt=""> -->
        </a>

        <div class="nav-control text-danger">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">
                            <!-- <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                <i class="mdi mdi-magnify"></i>
                            </span> -->
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img class="logo-abbr" src="./images/favicon-1.png" alt="" style="max-width:120px;">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a href="./app-profile.html" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">Profile </span>
                                </a>
                                <a href="./email-inbox.html" class="dropdown-item">
                                    <i class="icon-envelope-open"></i>
                                    <span class="ml-2">Inbox </span> -->
                                </a>
                                <a href="./logout.php" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="quixnav" style="background:black;">
        <div class="quixnav-scroll">
            <ul class="metismenu text-danger" id="menu">
                <li class="mt-2"><a href="dashboard.php" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FD7E14/dashboard.png" alt="dashboard"/> <span
                            class="nav-text fw-bold">Dashboard</span></a>
                </li>
                <li class="mt-2"><a class="has-arrow" href="javascript:void()" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/FD7E14/external-banner-infographic-and-chart-xnimrodx-lineal-xnimrodx-2.png" alt="external-banner-infographic-and-chart-xnimrodx-lineal-xnimrodx-2"/> <span class="nav-text ml-2"> Banner</span></a>
                    <ul aria-expanded="false">
                        <li> <a href="./add_banner.php"> Add Banner</a></li>
                        <li> <a href="./banner_list.php"> Banner List</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/glyph-neue/64/FD7E14/picture--v1.png" alt="picture--v1"/> <span class="nav-text ml-2">Gallery</span></a>
                    <ul aria-expanded="false">
                        <li><a href="./add_gallery.php">Add Gallery</a></li>
                        <li><a href="./gallery_list.php">Gallery List</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/glyph-neue/64/FD7E14/requirements.png" alt="requirements"/> <span class="nav-text ml-2">Project</span></a>
                    <ul aria-expanded="false">
                        <li><a href="./add_project.php">Add New Panchvati</a></li>
                        <li><a href="./project_list.php">Panchvati List</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FD7E14/group-of-projects.png" alt="group-of-projects"/><span class="nav-text ml-2">Firm</span></a>
                    <ul aria-expanded="false">
                        <li><a href="./add_firm.php">Add Firm</a></li>
                        <li><a href="./firm_list.php">Firm List</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FD7E14/google-blog-search.png" alt="google-blog-search"/> <span class="nav-text ml-2">Blog</span></a>
                    <ul aria-expanded="false">
                        <li><a href="./add_blog.php">Add Blog</a></li>
                        <li><a href="./blog_list.php">Blog List</a></li>
                    </ul>
                </li>
                <li class="mt-2"><a href="./contact_list.php" aria-expanded="false"><img width="20" height="20" src="https://img.icons8.com/sf-black/64/FD7E14/list.png" alt="list"/>> <span
                            class="nav-text fw-bold">Contact List</span></a>
                </li>
            </ul>
        </div>
    </div>