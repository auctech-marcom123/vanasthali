<?php
include 'check_session.php';
include '../db_con.php'; // Include the database connection

// Fetch blog details
$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

if ($user_id > 0) {
    $query = "SELECT * FROM blogs WHERE id = $user_id"; // Assuming `id` is the column for the blog's ID
    $res = mysqli_query($con, $query);
    
    // Fetching the blog details
    $blog = mysqli_fetch_array($res);

    // Check if any blog is found
    if (!$blog) {
        echo "Blog not found.";
        exit;
    }
} else {
    echo "Invalid user ID.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vanasthali Group | Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    label {
        color: #302f2f;
        font-weight: bold;
    }

    .form-control {
        background: #fff;
        border: 1px solid #cbc3c3;
        color: #454545;
        padding: 0.3rem 0.7rem;
    }
    .maxsize{
        margin-top:-2vh;
        font-size:12px;
    }
    .file{
        margin-top:-2vh !important;
    }
    </style>
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
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-6 col-xxl-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-black">Edit Blog</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="blog_update.php" enctype="multipart/form-data">
                                    <div class="form-row">
                                    <input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
                                        <div class="form-group col-md-6">
                                            <label>Blog URL NAME</label>
                                            <input type="text" name='blog_url' class="form-control"
                                                placeholder="Enter Blog URL Name" value="<?php echo str_replace('-',' ',$blog['blog_url'] ); ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Blog Heading</label>
                                            <input type="text" name="blog_heading" class="form-control"
                                                placeholder="Enter Blog Heading" value="<?php echo htmlspecialchars($blog['blog_heading']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Image Name</label>
                                            <input type="text" name="blog_point_two" class="form-control"
                                                placeholder="Enter Image Name" value="<?php echo htmlspecialchars($blog['blog_point_two']); ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Blog Title (SEO)</label>
                                            <textarea name="blog_desc_first" id="blog_desc_first" class="form-control" placeholder="Enter Blog Title"><?php echo htmlspecialchars($blog['blog_desc_first']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">                                       
                                        <div class="form-group col-md-6">
                                            <label>Blog Meta Description</label>
                                            <textarea name="blog_desc_second" id="blog_desc_second" class="form-control" placeholder="Enter Blog Meta Descri.."><?php echo htmlspecialchars($blog['blog_desc_second']); ?></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Blog Meta keywords</label>
                                            <textarea name="blog_point_one" id="blog_point_one" class="form-control" placeholder="Enter Blog Meta Keywords"><?php echo htmlspecialchars($blog['blog_point_one']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Image  <span class="text-primary">(Size:1894 × 840)</span></label>
                                            <p class="maxsize">(Maxsize: 158 KB)</p>
                                            <input type="file" name="images[]" class="form-control" id="images" multiple required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Choose Blog Multiple Images  <span class="text-primary">(Size:1894 × 840)</span></label>
                                            <p class="maxsize">(Maxsize: 158 KB)</p>
                                            <input type="file" name='logos[]' id="logos" class="form-control file" multiple>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Blog Details</label>
                                            <textarea name="blog_desc_two" id="blog_details" class="form-control" placeholder="Enter Blog Details..."><?php echo htmlspecialchars($blog['blog_desc_two']); ?></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Scripts
        ***********************************-->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<!-- Include Bootstrap and Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<style>
    .note-editor h1 {
        color: #000000 !important; /* Set your preferred color */
        font-weight: bold !important;
    }
    .note-editor h2 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h3 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h4 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h5 {
        color: #000000 !important;
        font-weight: bold !important;
    }
    .note-editor h6 {
        color: #000000 !important;
        font-weight: bold !important;
    }
</style>
<!-- Initialize Summernote -->
<script>
    $(document).ready(function() {
        $('#blog_details').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
</body>

</html>
