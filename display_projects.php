<?php
include 'db.php';


$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["content"] . "</p>";
    }
} else {
    echo "No projects found.";
}

$conn->close();
?>
