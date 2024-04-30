<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Image handling
    $targetDir = "contacts_upload/"; // Adjusted folder name
    $targetFile = $targetDir . basename($_FILES["contact_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["contact_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["contact_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["contact_image"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["contact_image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Inserting contact content and image file name into database
    $contact_content = $_POST['contact_content'];
    $imageFileName = basename($_FILES["contact_image"]["name"]);

    $sql = "INSERT INTO contacts (content, image_file) VALUES (?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("ss", $contact_content, $imageFileName);

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit(); 
    } else {
        echo "Error adding contact: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
