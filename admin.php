<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyles.css">
    <title>Ituralde's CMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        
        }
        .sidebar {
            width: 300px;
            background:#96B6C5;
            padding: 60px;
            box-sizing: border-box;
            color:white;
            display:flex;
            flex-direction:column;
            gap:70px;
        }
        .content h1 {
            font-size:40px;
            color:#96B6C5;
        }
        .sidebar h2 {
            font-size:30px;
        }
        .sidebar ul {
            display:flex;
            flex-direction:column;
            gap:30px;
            font-size:20px;
        }
        .sidebar li a{
text-decoration: none;
color:white;

        }
        .content {
            flex: 1;
            padding: 60px;
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        textarea, input[type="text"], input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            resize: none;
        }
        button {
            padding: 20px 50px;
            background-color:#96B6C5;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size:15px;
            border:1px #96B6C5 solid;
            transition:.2s;
        }
        .highlight {
            color:#96B6C5;
        }
        button:hover {
            background-color: white;
            color: #96B6C5;
        }
        .content div {
            margin-top:50px;
           
        }
 .main-admin {display: flex;}

header{
          background:#80a0ae;
           padding:40px 60px;
           color:white;
           font-size:20px;
        }

    </style>
</head>

<body>
<header>
        Welcome, Ms. Ituralde!
    </header>
    <div class = "main-admin">
    <div class="sidebar">
        <h2>My CMS
        </h2>
        <ul>
            <li><a href="#section1">About Me</a></li>
            <li><a href="#section2">Skills</a></li>
            <li><a href="#section3">Socials</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Edit Portfolio</h1>
        <div id="section1">
        <h2>Edit <span class = "highlight">About Me</span></h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*"><br><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>


    <form action="add_project.php" method="post" enctype="multipart/form-data">
    <input type="text" name="project_content" placeholder="Enter project content">
    <input type="file" name="project_image" accept="image/*">
    <button type="submit">Add Project</button>
</form>


        </div>
        <div id="section2">
            <h2>Edit <span class = "highlight">Skills</span></h2>
            <form action="add_skill.php" method="post">
        <input type="text" name="skill_name" placeholder="Enter skill name">
        <button type="submit">Add Skill</button>
    </form>

    <!-- Display existing skills -->
    <div id="skill-list">
   
    </div>
        </div>
        <div id="section3">
            <h2>Edit <span class = "highlight">Contacts</span></h2>
            <form action="add_contact.php" method="post" enctype="multipart/form-data">
    <textarea name="contact_content" placeholder="Enter contact information (name, email, phone, message)" rows="4" cols="50"></textarea><br>
    <input type="file" name="contact_image" accept="image/*"><br> <!-- Image input field -->
    <button type="submit">Add Contact</button>
</form>


    <!-- Display existing contacts -->
    <div id="contact-list">
  
    </div>
        </div>
        <div id="message"></div>
    </div>
    </div>
    <script>
        
        function saveContent(id) {
            var content = document.getElementById(id).value;
            localStorage.setItem(id, content);
            showMessage("Content saved successfully.");
        }

        
        function showMessage(message) {
            var messageDiv = document.getElementById("message");
            messageDiv.innerText = message;
            setTimeout(function() {
                messageDiv.innerText = "";
            }, 3000); 
        }

        
        window.onload = function() {
            for (var i = 1; i <= 3; i++) {
                var id = "content" + i;
                var savedContent = localStorage.getItem(id);
                if(savedContent) {
                    document.getElementById(id).value = savedContent;
                }
            }
        }
    </script>
</body>
</html>
