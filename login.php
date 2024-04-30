
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyles.css">
    <title>Login</title>
</head>
<style>
    input {
        padding:15px;
        font-size:20px;
        outline:none;
        border-radius:10px;
        border:1px  black solid;
     color:black;
     background:white !important;
    }
    form button {
        padding:20px 22px;
        width:100%;
       
        border:1px  black solid;
        font-size:20px;
        cursor:pointer;
        border-radius:10px;
transition:.2s;

color:white;
        background:#96B6C5;
    }
    form button:hover {
        background:white;
        color:black;
    }
    form {
        padding:100px;
        background: #F1F0E8;
        box-shadow:10px 10px 20px rgba(0,0,0,.1);
        position: relative;
    }
 .row {
    display:flex;
    flex-direction: column;
    
 }
 .row label {
    margin-bottom:10px;
 }
 #login-section h2 {
    font-size:100px;
    color:rgb(245, 245, 245);
 }
 .close {
    position: absolute;
    font-size:40px;
    color:#96B6C5;

    font-weight:bold;
    text-decoration: none;
    inset:0;
  left:auto;
  right:20px;
 }
</style>
<body>
    <section id = "login-section">
    <h2>Login</h2>
    <form method="post" action="login-control.php"> <!-- Added opening <form> tag and set action to login-control.php -->
    <a class = "close" href = "index.php">x</a>    
    <div class = "row">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        </div>
        <div class = "row">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        </div>
        <button type="submit">Login</button>
    </form>
    </section>
</body>
</html>
