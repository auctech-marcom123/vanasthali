<?php
include('../db_con.php');

if (isset($_POST['submit'])) {
    // Get input values
    $project_id = $_POST['project_id'];
    $project_type = $_POST['project_type'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    // Update project details
    $stmt = $con->prepare("UPDATE add_project SET project_type = ?, heading = ?, paragraph = ? WHERE id = ?");
    $stmt->bind_param("sssi", $project_type, $heading, $paragraph, $project_id);
    
    if ($stmt->execute()) {
        // Handle image upload
        if (isset($_FILES['images']) && count($_FILES['images']['name']) > 0) {
            $target_dir = "project_uploads/";

            // Delete existing images
            $result = $con->query("SELECT image FROM project_images WHERE project_type_id = $project_id");
            while ($row = $result->fetch_assoc()) {
                $file_path = $target_dir . $row['image'];
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
            $con->query("DELETE FROM project_images WHERE project_type_id = $project_id");

            // Upload new images
            foreach ($_FILES['images']['name'] as $key => $image_name) {
                $unique_image_name = uniqid() . "_" . basename($image_name);
                $target_file = $target_dir . $unique_image_name;

                if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                    $stmt = $con->prepare("INSERT INTO project_images (project_type_id, image) VALUES (?, ?)");
                    $stmt->bind_param("is", $project_id, $unique_image_name);
                    $stmt->execute();
                }
            }
        }

        // Redirect to project list
        header('Location: project_list.php');
        exit;
    } else {
        echo "Error updating project: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
