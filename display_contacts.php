<?php
include 'db.php';

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Contact Information: " . $row["content"] . "</p>";
        
        // Check if image file exists
        $imagePath = "contacts_upload/" . $row["image_file"];
        if (file_exists($imagePath)) {
            echo "<img src='$imagePath' alt='Contact Image' style='max-width: 300px;'>";
        } else {
            echo "Image not found.";
        }
    }
} else {
    echo "No contacts found.";
}

$conn->close();
?>
