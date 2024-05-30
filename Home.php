<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
      background-image:url("https://media.istockphoto.com/id/1392494719/photo/woman-with-pink-suitcase-and-passport-with-boarding-pass-standing-on-passengers-ladder-of.jpg?s=612x612&w=0&k=20&c=MVUZvIdaUmvRKdG-B5EEGGkIVFj51jss-b6IkxqY3fg=");
    }

    #container {
      display: flex;
    }

    #sidebar {
      width: 200px;
      height: 100vh;
      background-color: #333;
      color: #fff;
      padding: 20px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #content {
      flex: 1;
      padding: 20px;
    }

    #profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    #sidebar a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      margin: 5px 0;
      text-align: center;
    }

    #sidebar a:hover {
      background-color: #555;
    }
    img{
        width:400px;
        height:500px;
    
    }
    img:hover{
        width:600px;
        height:600px;
    }
  </style>
</head>
<body>
  <div id="container">
    <div id="sidebar">
        <br><br><br>
      <a href="#">Profile</a>
      <a href="Home.php">Home</a>
      <a href="destination.php ">Destination</a>
      <a href="contact.php">Contact Us</a>
      <a href="logout.php">Log Out</a>
    </div>
    <div id="content">
       <h1>Welcome to Travel Buddy Finder</h1>
      <p>Find your buddy based on your preference.</p>
      <br><br><br><br>
      <div class="gallery">
    <h1>Gallery:</h1><br><br>
    <img src="https://images.pexels.com/photos/731217/pexels-photo-731217.jpeg?cs=srgb&dl=pexels-sheila-731217.jpg&fm=jpg">
    <img src="https://i.pinimg.com/550x/70/79/a6/7079a6498a01e68e75ec0b8476caead1.jpg">
    <img src="https://lp-cms-production.imgix.net/2022-12/sylwia-bartyzel-eU4pipU_8HA.jpg">
    <img src="https://www.forbes.com/advisor/wp-content/uploads/2021/03/traveling-based-on-fare-deals.jpg">
    <img src="https://media.istockphoto.com/id/1363398400/photo/woman-traveler-in-europa-alhambra-in-spain.jpg?s=612x612&w=0&k=20&c=Z14eQ_IJywp7COkEQvAhxhiOagmqupQaO_RuRg5kEzM=">
    <img src="https://cdn.pixabay.com/photo/2016/10/18/08/13/travel-1749508_640.jpg">
    <img src="https://static.toiimg.com/thumb/msid-101013153,width-748,height-499,resizemode=4,imgsize-96330/.jpg">
    <img src="https://hips.hearstapps.com/hmg-prod/images/large-group-of-happy-friends-in-mountains-area-royalty-free-image-1653422631.jpg?crop=0.668xw:1.00xh;0.0609xw,0&resize=1200:*">
</div>  </div></div>
</body>
</html>
