<?php
include('../db_con.php');

if (isset($_POST['submit'])) {
    // Get input values
    $project_id = $_POST['project_id'];
    $firm_type = $_POST['firm_type'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    // Update project details
    $stmt = $con->prepare("UPDATE add_firm SET firm_type = ?, heading = ?, paragraph = ? WHERE id = ?");
    $stmt->bind_param("sssi", $firm_type, $heading, $paragraph, $project_id);
    
    if ($stmt->execute()) {
        // Handle image upload
        if (isset($_FILES['images']) && count($_FILES['images']['name']) > 0) {
            $target_dir = "firm_uploads/";

            // Delete existing images
            $result = $con->query("SELECT image FROM firm_images WHERE firm_type_id = $project_id");
            while ($row = $result->fetch_assoc()) {
                $file_path = $target_dir . $row['image'];
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
            $con->query("DELETE FROM firm_images WHERE firm_type_id = $project_id");

            // Upload new images
            foreach ($_FILES['images']['name'] as $key => $image_name) {
                $unique_image_name = uniqid() . "_" . basename($image_name);
                $target_file = $target_dir . $unique_image_name;

                if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                    $stmt = $con->prepare("INSERT INTO firm_images (firm_type_id, image) VALUES (?, ?)");
                    $stmt->bind_param("is", $project_id, $unique_image_name);
                    $stmt->execute();
                }
            }
        }

        // Redirect to project list
        header('Location: firm_list.php');
        exit;
    } else {
        echo "Error updating project: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
