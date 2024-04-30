<?php
include 'db.php';


$sql = "SELECT * FROM skills";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["skill_name"] . "</p>";
      
    }
} else {
    echo "No skills found.";
}

$conn->close();
?>
