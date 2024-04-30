<?php   include 'db.php'; ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shariznelle's  Portfolio</title>
    <link rel="stylesheet" href="mystyles.css">


</head>
<style>
    ul {
        margin-left:20px;
    }
</style>
<body>
 
<section id = "nav-section">



    <a class="nav-buttons" href="#" onclick="ShowProfile()" onfocus="ShowProfile()">Profile</a>

<a class = "nav-buttons" href = "#" onclick="ShowProjects()" onfocus="ShowProjects()">Projects</a>
<a class = "nav-buttons" href = "#" onclick="ShowSkills()" onfocus="ShowSkills()">Skills</a>
<a class = "nav-buttons" href = "#" onclick="ShowSocials()" onfocus="ShowSocials()">Socials</a>
<a class = "nav-buttons" href = "login.php" >Login</a>
<!------------------------------PROFILE-MODAL----------------------------------------->
<div id = "profModal" class = "profile-modal">
    <div class = "modal-header">
        <h2>Profile</h2>
        <a href = "#" onclick = "HideModal()" class = "close">x</a>
    </div>
  <div class = "modal-content">
  <?php
        
     

        
        $sql = "SELECT image, content FROM profile"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imageData = $row['image'];
            $content = $row['content'];

            
            echo '<img src="img/profile_image.jpg" alt="Profile Image" style="max-width: 200px;"><br>'; 

            
            echo '<p>' . $content . '</p>';
        } else {
            echo "No profile found.";
        }

        
        $conn->close();
        ?>
   
</div>
  
</div>
<!---------------------------------PROJECTS-MODAL--------------------------------------->
<div id = "projModal" class = "project-modal">
    <div class = "modal-header">
        <h2>Projects</h2>
        <a href = "#" onclick = "HideModal()" class = "close">x</a>
    </div>
  <div class = "modal-content">
   
</div>
  S.E. Project (Wishcart)
  Capstone (Archiving Docu Management)
  <?php include 'display_projects.php'; ?>
</div>
<!---------------------------------SKILLS-MODAL--------------------------------------->
<div id = "skModal" class = "skills-modal">
    <div class = "modal-header">
        <h2>Skills</h2>
        <a href = "#" onclick = "HideModal()" class = "close">x</a>
    </div>
  <div class = "modal-content skills" style = "display:flex; flex-direction:column; gap:20px;">
    <ul>
    Technical Expertise: Proficient in a wide range of technologies and platforms.</ul>
    <ul>Project Management: Skilled in leading and coordinating IT projects from conception to completion, ensuring timely delivery and alignment with business objectives.</ul>
        <ul> Problem Solving: Adept at identifying and resolving complex technical issues, utilizing analytical skills and innovative solutions to overcome challenges.</ul>
            <ul> Communication: Excellent communication skills with the ability to convey technical concepts to both technical and non-technical stakeholders.</ul>
            <?php include 'display_skills.php'; ?>
</div>
  
</div>
<!---------------------------------SOCIALS-MODAL--------------------------------------->
<div id = "socModal" class = "socials-modal">
    <div class = "modal-header">
        <h2>Socials</h2>
        <a href = "#" onclick = "HideModal()" class = "close">x</a>
    </div>
  <div class = "modal-content">
Feel free to reach me out through the following platforms
Facebook: a href= "https:
Instagram: a href= "https:
<?php include 'display_contacts.php'; ?>
</div>
  
</div>





<script>
    function HideModal() {
        var profileModal = document.getElementById("profModal");
        var projModal = document.getElementById("projModal");
        var skModal = document.getElementById("skModal");
        var socModal = document.getElementById("socModal");
        if (profileModal.style.display === "flex") {
            profileModal.style.display = "none";
    } else {
       
    }
    if (projModal.style.display === "flex") {
            projModal.style.display = "none";
    } else {
       
    }
    if (skModal.style.display === "flex") {
            skModal.style.display = "none";
    } else {
        
    }
    if (socModal.style.display === "flex") {
            socModal.style.display = "none";
    } else {
       
    }

    }
    function ShowProfile() {
    var profileModal = document.getElementById("profModal");
    if (profileModal.style.display === "none") {
        profileModal.style.display = "flex";
    } else {
        profileModal.style.display = "none";
    }
    }
    function ShowProjects() {
        var profileModal = document.getElementById("projModal");
        if (profileModal.style.display === "none") {
            profileModal.style.display = "flex";
        } else {
            profileModal.style.display = "none";
        }
    }
    function ShowSkills() {
        var profileModal = document.getElementById("skModal");
        if (profileModal.style.display === "none") {
            profileModal.style.display = "flex";
        } else {
            profileModal.style.display = "none";
        }
    }
    function ShowSocials() {
        var profileModal = document.getElementById("socModal");
        if (profileModal.style.display === "none") {
            profileModal.style.display = "flex";
        } else {
            profileModal.style.display = "none";
        }
    }
</script>
</section>

</body>
</html>