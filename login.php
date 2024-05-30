<?php
$server="localhost";
$username="root";
$password="";
$insert=true;
$conn=mysqli_connect($server,$username,$password);
if($conn){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $username=$_POST["username"];
   $name=$_POST["name"];
   $email=$_POST["email"];
   $password=$_POST["password"];
   $profile_pic=$_POST["profile_pic"];
   $bio=$_POST["bio"];
   $gender=$_POST["gender"];
   $location=$_POST["location"];
   $Travel_interest=$_POST["Travel_interest"];
   $sqli="INSERT INTO `travel buddy`.`login table` ( `username`, `name`, `email`, `password`, `profile_pic`,`gender`, `bio`, `location`, `Travel_interest`, `reg_data`) VALUES ( '$username','$name','$email', '$password', '$profile_pic', '$gender','$bio', '$location','$Travel_interest', current_timestamp());";
   if($conn->query($sqli)){
    header("Home.php");
    }
   else{
    $insert=false;
   }}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url("https://www.candorblog.com/wp-content/uploads/2017/05/travel-022.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.5); /* Black with 50% transparency */
            padding: 20px;
            border-radius: 10px; /* Optional: Add rounded corners */
            color: white; /* Set text color to white or a contrasting color */
        }

        form {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        input {
            height: 50px;
            width: 300px;
            margin-bottom: 10px;
        }

        label {
            font-size: 20px;
        }
        .box1,.box2{
            display:flex;
            flex-direction:column;
            margin-right:100px;
        }
        button {
            height: 50px;
            background-color: #4caf50; 
            color: white; 
            border: none;
            cursor: pointer;
        }
        .error-heading{
            color:red;
            animation: blink 1s infinite;
            display:block;
            width:500px;
            height:auto;
            background-color:rgba(0,0,0,0.5);
        }
        @keyframes blink {
      0%, 49.9%, 100% {
        opacity: 1;
      }
      50%, 99.9% {
        opacity: 0;
      }
    }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Complete your Profile:</h2>
    <?php
        if($insert==false)
         echo "<h1 class='error-heading'>"." Error occured!! Please choose another username"."</h1>";
        ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="box1">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="profile_pic">Profile Pic:</label>
        <input type="file" id="profile_pic" name="profile_pic"></div>
        <div class="box2">
        <label for="gender">Gender(M/F):</label>
        <input type="text" id="gender" name="gender" required>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
         <label for="Travel_interest">Travel interest:</label>
        <input type="text" id="Travel_interest" name="Travel_interest">
        <textarea id="bio" name="bio">BIO:</textarea></div>
        <button type="submit">Login</button>
    </form></div>
</body>
</html>
