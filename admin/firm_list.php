<?php include 'check_session.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vanasthali Group | Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .table {
                width: 100%;
                margin-bottom: 1rem;
                color:rgb(108 108 112);
                font-weight: 500;
            }
    label {
    display: none;
    margin-bottom: 0.5rem;
}
</style>
</head>

<body>

    <?php
            include('header.php');
        ?>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body" style="background:#93938a29">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Firm List</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table header-border table-responsive-sm table-bordered"
                                    style="width: 100%; border-collapse: collapse; border: 1px solid gray;">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Type</th>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../db_con.php';
                                
                                        $sel_que = "SELECT * FROM add_firm"; // Fetch all projects
                                        $res = mysqli_query($con, $sel_que);
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($res)) {
                                
                                            // Fetch project image
                                            $image_query = "SELECT * FROM firm_images WHERE firm_type_id = '$row[id]' LIMIT 1";
                                            $image_result = mysqli_query($con, $image_query);
                                            $image_row = mysqli_fetch_array($image_result);
                                            $image_path = isset($image_row['image']) ? $image_row['image'] : 'default-image.jpg'; // Default image if no image found
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><img src="firm_uploads/<?php echo $image_path; ?>" alt="Image" class="img-thumbnail" style="max-width: 80px; height: auto;"></td>
                                            <td><?php echo $row['firm_type']; ?></td>
                                            <td><?php echo $row['heading']; ?></td>
                                            <td>
                                                <a type="submit" class="btn btn-primary shadow btn-xs sharp me-1"
                                                    href="firm_edit.php?user_id=<?php echo $row['id']; ?>" style="color:white;">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form method="POST" action="firm_dlt.php" style="display:inline;">
                                                    <input type="hidden" name="user_id" value="<?php echo $row['id'];?>">
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp"name="delete" onclick="return confirm('Are you sure?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
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
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank" class="text-warning">Auctech
                    Marcom</a> 2024</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>



    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>

</html>