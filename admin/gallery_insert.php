<?php
// Include your database connection file
include('../db_con.php');

if (isset($_POST['submit'])) {
    // Start transaction
    $con->begin_transaction();

    try {
        // Retrieve form data
        $gallery_type = $_POST['gallery_type'];
        $heading = $_POST['heading'];
        $paragraph = $_POST['paragraph'];

        // Insert gallery data into the add_gallery table
        $sql = "INSERT INTO add_gallery (gallery_type, heading, paragraph) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $gallery_type, $heading, $paragraph);
        
        if (!$stmt->execute()) {
            throw new Exception("Error inserting gallery: " . $stmt->error);
        }

        // Get the last inserted gallery ID
        $product_id = $stmt->insert_id;

        // Handle multiple file uploads for images
        $target_dir = "gallery_uploads/";

        foreach ($_FILES['images']['name'] as $key => $image_name) {
            $target_file = $target_dir . basename($image_name);

            // Generate a unique image name using uniqid()
            $unique_image_name = uniqid() . "_" . basename($image_name);
            $target_file = $target_dir . $unique_image_name;

            // Move the uploaded file to the server
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                // Insert image data into gallery_images table
                $sql = "INSERT INTO gallery_images (gallery_type_id, image) VALUES (?, ?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("is", $product_id, $unique_image_name);
                
                if (!$stmt->execute()) {
                    throw new Exception("Error inserting image: " . $stmt->error);
                } else {
                    // Optionally, you can fetch the last inserted ID for the image
                    $image_id = $stmt->insert_id;  // Get the auto-incremented image ID
                    echo "Image $unique_image_name uploaded and inserted successfully with ID: $image_id<br>";
                }
            } else {
                throw new Exception("Error uploading image: $image_name");
            }
        }

        // Commit transaction
        $con->commit();
        // Redirect to the gallery list page
        header('Location: gallery_list.php');
        exit;  // Use exit after header to prevent further execution

    } catch (Exception $e) {
        // Rollback transaction on error
        $con->rollback();
        echo "Failed to insert gallery and images: " . $e->getMessage();
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
