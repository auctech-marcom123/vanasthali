<?php

include('../db_con.php');

if (isset($_POST['submit'])) {
   
    $project_type = $_POST['project_type'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    
    $sql = "INSERT INTO add_project (project_type, heading, paragraph) VALUES ('$project_type', '$heading', '$paragraph')";
    if ($con->query($sql)) {
        $product_id = $con->insert_id; 

      
        $target_dir = "project_uploads/";

        foreach ($_FILES['images']['name'] as $key => $image_name) {
            $unique_image_name = uniqid() . "_" . basename($image_name);  
            $target_file = $target_dir . $unique_image_name;

           
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
               
                $con->query("INSERT INTO project_images (project_type_id, image) VALUES ('$product_id', '$unique_image_name')");
            }
        }
        header('Location: project_list.php');
        exit;
    } else {
        echo "Error: " . $con->error;
    }
}

$con->close();
?>
