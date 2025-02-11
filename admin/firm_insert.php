<?php

include('../db_con.php');

if (isset($_POST['submit'])) {
   
    $firm_type = $_POST['firm_type'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    
    $sql = "INSERT INTO add_firm (firm_type, heading, paragraph) VALUES ('$firm_type', '$heading', '$paragraph')";
    if ($con->query($sql)) {
        $product_id = $con->insert_id; 

      
        $target_dir = "firm_uploads/";

        foreach ($_FILES['images']['name'] as $key => $image_name) {
            $unique_image_name = uniqid() . "_" . basename($image_name);  
            $target_file = $target_dir . $unique_image_name;

           
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
               
                $con->query("INSERT INTO firm_images (firm_type_id, image) VALUES ('$product_id', '$unique_image_name')");
            }
        }
        header('Location: firm_list.php');
        exit;
    } else {
        echo "Error: " . $con->error;
    }
}

$con->close();
?>
