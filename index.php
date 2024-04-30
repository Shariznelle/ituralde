<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shariznelle's Portfolio</title>
    <link rel="stylesheet" href="mystyles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
          background:var(--color2);
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            padding: 50px 20px;
            text-align: center;
        }
        footer {
  
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
     
        footer div {
            margin-bottom: 10px;
        }
        body {
            overflow-x: hidden;
        }

        .profile img{
            height:500px;
            width:500px;
            border-radius:100%;
        }
       .profile-cont {
           display: flex;
           gap:300px;
        }
        .sect-2-cont {
            display: flex;
            gap:200px;
        }
        .sect-2-cont > * {
            border:1px var(--color3) solid;
            background:var(--color2);
            padding:20px;
            border-radius:20px;
            height:400px;
            width:400px;

        }
        #section-4 
        {
         background:var(--color2);

        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Shariznelle's Portfolio!</h1>
        <p>Scroll down to explore my work.</p>
        <nav>
            <a href="#section-1">Home</a>
            <a href="#section-1">About</a>
            <a href="#section-2">Portfolio</a>
            <a href="#section-3">Projects</a>
            <a href="#section-4">Connect</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
   
    <section id="section-1">
    <?php

include 'db.php';

// Retrieve the profile information
$stmt = $conn->prepare("SELECT image, content FROM profile LIMIT 1");
$stmt->execute();
$stmt->bind_result($imagePath, $content);
$stmt->fetch();
$stmt->close();

$conn->close();
?>
<div class ="profile-cont">
<div class = "profile">
  
    
            <img src="img/profile_image.jpg" alt="Profile Image">
     
    </div>
    <div>
        <h2>About Me</h2>
        <p><?php echo $content; ?></p>
    </div>
    </div>
    </section>
    
    <section id="section-2">
        <div class = "sect-2-cont">
<div class = "projects">
    <h2>My Projects</h2><br>
    <?php
include 'db.php';

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["content"] . "</p>";
        
        // Check if image file exists
        $imagePath = "uploads/" . $row["image_file"];
        if (file_exists($imagePath)) {
            echo "<img src='$imagePath' alt='Project Image' style='max-width: 200px; border-radius:20px;'>";
        } else {
            echo "Image not found.";
        }
    }
} else {
    echo "No projects found.";
}

$conn->close();
?>

</div>
   
    
    <div class ="skills">

    <h2>My Skills</h2><br>
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
</div>
</div>
    
    <section id="section-4">

    <h2>Connect with me!</h2>
    <?php
include 'db.php';


$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "<a href =>" . $row["content"] . "</a>";
       
    }
} else {
    echo "No contacts found.";
}

$conn->close();
?>

    </section>
    


    <footer>
        <div>
            <a href="#section-1">Home</a>
            <a href="#section-2">About</a>
            <a href="#section-3">Portfolio</a>
            <a href="#section-4">Projects</a>
            <a href="#section-5">Connect</a>
        </div>
        <div>
            Shariznelle's Portfolio
        </div>
        <div>
            © 2024 Shariznelle. All Rights Reserved.
        </div>
    </footer>
</body>
</html>
