<?php
session_start();
include '../db_con.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM  add_banner WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $message = "Banner deleted successfully";
        $status = "success";
    } else {
        $message = "Error: " . mysqli_error($con);
        $status = "error";
    }

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
            window.onload = function() {
                Swal.fire({
                    title: '$status',
                    text: '$message',
                    icon: '$status',
                }).then(function() {
                    window.location = 'banner_list.php';
                });
            }
        </script>";
} else {
    echo "No ID provided to delete.";
}
?>
