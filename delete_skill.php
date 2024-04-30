<?php

include 'db.php';


if (isset($_GET['id'])) {
    
    $skill_id = mysqli_real_escape_string($conn, $_GET['id']);

    
    $sql = "DELETE FROM skills WHERE id = $skill_id";

    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: admin.php");
        exit(); 
    } else {
        echo "Error deleting skill: " . $conn->error;
    }
} else {
    echo "Skill ID not provided.";
}


$conn->close();
?>
