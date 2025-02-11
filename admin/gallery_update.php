<?php
// Include your database connection file
include('../db_con.php');

if (isset($_POST['submit'])) {
    // Start a transaction
    $con->begin_transaction();

    try {
        // Retrieve form data
        $gallery_id = $_POST['gallery_id'];
        $gallery_type = $_POST['gallery_type'];
        $heading = $_POST['heading'];
        $paragraph = $_POST['paragraph'];

        // Ensure the gallery_id is valid
        if (empty($gallery_id)) {
            throw new Exception("Gallery ID is required.");
        }

        // Update the gallery details in the add_gallery table
        $sql = "UPDATE add_gallery SET gallery_type = ?, heading = ?, paragraph = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssi", $gallery_type, $heading, $paragraph, $gallery_id);

        if (!$stmt->execute()) {
            throw new Exception("Error updating gallery: " . $stmt->error);
        }

        // Handle image upload if new images are provided
        if (isset($_FILES['images']['name']) && count($_FILES['images']['name']) > 0) {
            $target_dir = "gallery_uploads/";

            // Check if the gallery already has images
            $image_sql = "SELECT image FROM gallery_images WHERE gallery_type_id = ?";
            $image_stmt = $con->prepare($image_sql);
            $image_stmt->bind_param("i", $gallery_id);
            $image_stmt->execute();
            $image_result = $image_stmt->get_result();
            
            // If old images exist, delete them from the server
            while ($row = $image_result->fetch_assoc()) {
                $existing_image_path = $target_dir . $row['image'];
                if (file_exists($existing_image_path)) {
                    unlink($existing_image_path);  // Delete the old image
                }
            }

            // Now delete old images from the database as well (if necessary)
            $delete_images_sql = "DELETE FROM gallery_images WHERE gallery_type_id = ?";
            $delete_images_stmt = $con->prepare($delete_images_sql);
            $delete_images_stmt->bind_param("i", $gallery_id);
            $delete_images_stmt->execute();

            // Loop through each uploaded file to handle new image(s)
            foreach ($_FILES['images']['name'] as $key => $image_name) {
                $unique_image_name = uniqid('gallery_', true) . "_" . basename($image_name); // Unique ID + Original Filename
                
                $target_file = $target_dir . $unique_image_name;
                
                // Ensure the file is an image (optional)
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                    throw new Exception("Only JPG, JPEG, PNG & GIF files are allowed.");
                }

                // Move the uploaded file to the server
                if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                    // Insert the new image into the gallery_images table
                    $sql = "INSERT INTO gallery_images (gallery_type_id, image) VALUES (?, ?)";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("is", $gallery_id, $unique_image_name);

                    if (!$stmt->execute()) {
                        throw new Exception("Error inserting image: " . $stmt->error);
                    }
                } else {
                    throw new Exception("Error uploading image: " . $image_name);
                }
            }
        }

        // Commit the transaction
        $con->commit();
        
        // Redirect to the gallery list page after successful update
        header('Location: gallery_list.php');
        exit;

    } catch (Exception $e) {
        // Rollback the transaction in case of error
        $con->rollback();
        echo "Failed to update gallery: " . $e->getMessage();
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
