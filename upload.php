<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $imageData = file_get_contents($_FILES['image']['tmp_name']);

    
    $content = $_POST['content'];

    
    $imageDirectory = "img/"; 

    
    $imageName = "profile_image.jpg";

    
    if (file_put_contents($imageDirectory . $imageName, $imageData)) {
        
        $stmt = $conn->prepare("UPDATE profile SET image=?, content=?");

        
        $stmt->bind_param("ss", $imagePath, $content);

        
        $imagePath = $imageDirectory . $imageName;

        
        if ($stmt->execute()) {
            echo "Data updated successfully.";
        } else {
            echo "Error updating data: " . $conn->error;
        }

        
        $stmt->close();
    } else {
        echo "Error storing image.";
    }
}


$conn->close();
?>
