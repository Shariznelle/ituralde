<?php

include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $skill_name = $_POST['skill_name'];

    
    $sql = "INSERT INTO skills (skill_name) VALUES (?)";

    
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("s", $skill_name);

    
    if ($stmt->execute()) {
        
        header("Location: admin.php");
        exit(); 
    } else {
        
        echo "Error adding skill: " . $conn->error;
    }

    
    $stmt->close();
}


$conn->close();
?>
