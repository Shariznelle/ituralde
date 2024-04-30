<?php

include 'db.php';


if (isset($_GET['id'])) {
    
    $project_id = mysqli_real_escape_string($conn, $_GET['id']);

    
    $sql = "DELETE FROM projects WHERE id = $project_id";

    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: admin.php");
        exit(); 
    } else {
        echo "Error deleting project: " . $conn->error;
    }
} else {
    echo "Project ID not provided.";
}


$conn->close();
?>
