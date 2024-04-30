<?php

include 'db.php';


if (isset($_GET['id'])) {
    
    $contact_id = mysqli_real_escape_string($conn, $_GET['id']);

    
    $sql = "DELETE FROM contacts WHERE id = $contact_id";

    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: admin.php");
        exit(); 
    } else {
        echo "Error deleting contact: " . $conn->error;
    }
} else {
    echo "Contact ID not provided.";
}


$conn->close();
?>
