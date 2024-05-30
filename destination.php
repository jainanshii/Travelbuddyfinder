<?php
$server="localhost";
$username="root";
$password="";
$insert=false;
$conn=mysqli_connect($server,$username,$password);
if($conn){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $username=$_POST["username"];
   $fromd=$_POST["fromd"];
   $tod=$_POST["tod"];
   $date=$_POST["date"];
   $gender=$_POST["gender"];
   $sqli="INSERT INTO `travel buddy`.`desti` (`username`, `fromd`, `tod`, `date`, `gender`) VALUES ( '$username','$fromd','$tod', '$date', '$gender');";
   if($conn->query($sqli)){echo "success"; $insert=true;}
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <style>
        body{
            background-image: url("https://images.pexels.com/photos/3278215/pexels-photo-3278215.jpeg?cs=srgb&dl=pexels-oleksandr-p-3278215.jpg&fm=jpg");
        }
        .content{
            background-image: url("https://images.pexels.com/photos/3278215/pexels-photo-3278215.jpeg?cs=srgb&dl=pexels-oleksandr-p-3278215.jpg&fm=jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height:100%;
        }
        nav{
            background-color: black;
        }
        form{
           background-color: rgba(41, 41, 41, 0.286);
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 5px 5px 5px black;
        }
        form div{
            display: flex;
            flex-direction: row;
            align-items:center;
           
        }
        form div input{
            width:250px;
            height:30px;
            border: 2px solid black;
        }
        .in:hover{
            background-color: rgb(179, 213, 202);
        }
        .in:focus{
            background-color:rgb(201, 201, 252);
        }
        .submit{
            width:100px;
            height:50px;
            background-color: white;
        }
        .result-box1{
           display:flex;
           justify-content:center;
        }
        .result-box{
            width:600px;
            height:300px;
            border:2px solid black;
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:center;
           font-size:20px;
           background-color:rgba(0,0,0,0.5);
           color:black;
        }
        .profile-img{
            height:200px;
            width:120px;
            margin-right:50px;
            border:2px solid white;
        }
        hr{
            color:black;
        }
    </style>
</head>
<body>
    <header class="container">    
        <nav class="flex left space-between">
         <div class="flex item-center">
         <ul class="flex item-center justify-center"style="font-weight: bolder">     
         <li><a href="Home.php">HOME</a></li>
         <li><a href="destination.php">Finder</a></li>
         <li><a href="contact.php">Contact us</a></li>
         <li><a href="logout.php">Logout</a></li>
        </ul>
     </div>
     <div class="right">
        <ul class="flex item-center justify-center" style="padding-top:15px">
        <li><a href="logout.php">Log out</a></li>
        </ul>
     </nav>
     </header>
     <section class="content"><br><br>
     <h1>Please provide these information to check recommended buddy.</h1>
     <div> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <br><div class="username">
        <label for="username">USERNAME:</label>
        <input class="in" name="username" type="username"></div><br><br>
         <div class="from">
        <label for="fromd">FROM:</label>
        <input class="in" name="fromd" type="text"></div><br><br>
        <div class="to">
        <label for ="tod">TO:</label>
        <input class="in" name="tod" type="text"></div><br><br>
        <div class="date">
        <label for="date ">DATE:</label>
        <input class="in" name="date"type="date"></div><br><br>
        <div class="time">
        <label for="gender">Gender(F/M):</label>
        <input class="in" name="gender" type="text"></div><br><br>
        <button class="submit" type="submit">Search</button>
        <br></form></div></section><br><br><br>
     <div class="result-container">
        <?php 
        if($insert){
        if($conn){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $tod=$_POST["tod"];
            }}
        $S="SELECT lt.username, lt.name,lt.gender, lt.location, lt.bio,lt.profile_pic FROM `travel buddy`.`login table` AS lt JOIN `travel buddy`.`desti` AS d ON d.username = lt.username WHERE d.tod = '$tod';";
        $result = mysqli_query($conn, $S);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="result-box1">';
                echo '<div class="result-box">';
                echo '<div class="half1">';
                $profilePic = $row['profile_pic'] ? $row['profile_pic'] : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';
                echo "<img src='$profilePic' class='profile-img' alt='Profile Picture'>";
                echo "</div>";
                echo '<div class="half2">';
                echo "<h1> " . $row['username'] . "</h1>";
                echo "Name: " . $row['name'] . "<br>";
                echo "Gender: " . $row['gender'] . "<br>";
                echo "Location: " . $row['location'] . "<br>";
                echo "Bio: " . $row['bio'] . "<br>";
                echo "<br>";
                echo "<button>Request</button> "  . "<br>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }}
        else{
            echo "error";
        }}
            ?>
    </div>
</body>
</html>