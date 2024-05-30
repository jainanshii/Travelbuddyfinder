<?php
$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password);
if($conn){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $uusername = isset($_POST["uusername"]) ? $_POST["uusername"] : "";
        $upassword = isset($_POST["upassword"]) ? $_POST["upassword"] : "";
   $query = "SELECT id,username,password FROM `travel buddy`.`login table` WHERE `login table`.`username` = '$uusername';";
   $result =mysqli_query($conn, $query);
   if ($result) {
       if (mysqli_num_rows($result) > 0) {
           $row = mysqli_fetch_assoc($result);
           if ($upassword== $row['password']) {
               echo "Login successful!";
               header("Location: Home.php");
               exit();
           } else {
               echo "Incorrect password!";
           }
       } else {
           echo "Username not found!";
       }
   } else {
       echo "Error: " . mysqli_error($conn);
   }
   mysqli_close($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<style>
    body{
        background-color:beige;
        margin:0px;
    }
    .footer{
        background-color:black;
        width:auto;
        height:200px;
        text-align:center;
    }
    .footer p{
        color:white;
    }
</style>
    <title>Travel Buddy Finder</title>
</head>
<body>
    <header class="container">
        
       <nav class="flex left space-between">
        <div class="flex item-center"><ul>
        <li>HOME</li>

       </ul>
    </div>
    <div class="right">
        <ul class="flex item-center justify-center" style="padding-top:15px">
         <li><a href="login.php">Sign up</a></li>
         <li><a href="#log">Log in</a> </li>
        </ul>       
    </div>
    </nav> </header>
    <br><br><br>
   <div class="heading">
    <img class="img-head" src="https://www.picsofasia.com/wp-content/uploads/2019/10/cropped-DSCF1599-3.jpg">
    <div class="heading-text">
    Tired of Travelling Alone???
    Find a new buddy to travel with you...</div>
   </div> <br><br><br><hr>
   <div class="content">
   <i> Thousands of members are looking for a travel partner. New travel-mates added daily. Lots of opportunities to find exactly the right travel buddy for you. Choose the places you want to visit, write a quick note explaining the type of person you'd like to travel with or what you are intending to do while away. You'll then appear on the list. Other travellers can find you, get in contact and discuss plans.</i>
   </div>
   <hr>
   <br><br><br>
   <div class="half">
 <div class="sign-email">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="log" method="post">
        <label for="uusername">Username:</label>
        <input type="text" id="uusername" name="uusername" required>
        <label for="upassword">Password:</label>
        <input type="password" id="upassword" name="upassword" required>
        <button type="submit">Login</button>
</form></div>
<div class="review">
    <br><p>Travel Buddy Finder helps you with getting a perfect partner to accompany tour journey. Our platform connects like-minded travelers from around the world, making it easy to find your perfect travel buddy.
Our user-friendly interface allows you to easily connect with fellow travelers from around the globe, creating lasting memories and forging new friendships along the way.
</p>
<p>Create a profile, search for compatible matches, and start planning your next adventure together!</p></div></div>
<h1>Reviews:</h1><br><br>
    <section id="exp">     
        <div class="flex">
           <p> <img class="profile" src="https://images.saymedia-content.com/.image/ar_16:9%2Cc_fill%2Ccs_srgb%2Cq_auto:eco%2Cw_1200/MTk4MDQzMTI5NzY3NTM1ODA2/short-captions-for-profile-pictures.png">Ava Taylor</p>
            <p> This is very nice web app.You should try it.</span></p></div>
        <div class="flex">
            <p> <img class="profile" src="https://e1.pxfuel.com/desktop-wallpaper/903/679/desktop-wallpaper-97-aesthetic-best-profile-pic-for-instagram-for-boy-instagram-dp-boys.jpg">Max Chen</p><br>
            <p>By using this, i was able to find a very good friend to travel with</p></div>
        <div class="flex">
            <p> <img class="profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGb8PmEaRgeXshs4ycQC8wyYl8h6RffDbg-A&usqp=CAU">Olivia Green</p><br>
            <p><span>Thank You!!</span></p></div>
    </section>
    <br><br><br>
    <div class="review-by-me"><textarea  cols="100"  >Write your review...</textarea></div>
<br><br><br>
    <div class="footer"><br><br><br><br>
        <p>Travel Buddy Finder</p>
    </div>
    <script src="script.js"></script>
</body>
</html>