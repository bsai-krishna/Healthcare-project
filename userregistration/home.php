<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

?>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: white;
  background-repeat: no-repeat;
  background-size: cover;
}


.header {
    padding: 80px;
    text-align: center;
    background: #1abc9c;
    color: white;
    height: 50%;
    width: 100%;
    background-image: url(doctor.jpeg);
    width: 1400px;
    height: 290px;
    background-repeat: no-repeat;
    background-size: cover;
}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}



.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #51CCBF;
  color: black;
}


.navbar a.active {
  background-color: #51CCBF;
  color: white;
}


.images {
    
    background: #1abc9c;
    color: white;
}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}


@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
 </div>

<div class="navbar">
  <a href="home.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="http://localhost/PHP-Doctor-Appointment-System/"><i class="fa fa-fw fa-calendar"></i>Book a Doc</a>
  <a href="buy.html"><i class="fa fa-fw fa-cart-plus"></i>Buy</a>
  <a href="findmydoc.html"><i class="fa fa-fw fa-search"></i>Find My Doc</a>
  <a href="index.html"><i class="fa fa-fw fa-comments"></i>Chat</a>
  <a href="https://docs.google.com/forms/d/e/1FAIpQLSfptMhzWme7tcgyRwp7sqI_eCH_Xg7CWpeSjxA371t_7ZZCjg/viewform?usp=sf_link"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="https://meet.google.com/zwp-spvy-xzv"><i class="fa fa-fw fa-video-camera"></i>Meet</a>
  <a href="logout.php" class="right"><i class="fa fa-fw fa-user"></i>Logout</a>
</div>

<div class="images">
<a href="http://localhost/userregistration/buy.html"><img src="sk.png" style="padding:30px 30px;float:left;width:50%;height:50%;"></a>
<a href="http://localhost/PHP-Doctor-Appointment-System/"><img src="sk1.png" style="padding:30px 30px;float:right;width:50%;height:50%;"></a>
<a href="https://meet.google.com/zwp-spvy-xzv"><img src="sk6.png" style="padding:30px 30px;float:left;width:50%;height:50%;"></a>
<a href="findmydoc.html"><img src="loc.png" style="padding:30px 30px;float:right;width:50%;height:50%;"></a>
<a href="index.html"><img src="ak.png" style="padding:30px 30px;float:left;width:50%;height:50%;"></a>

<a href="findmydoc.html"><img src="contact.png" style="padding:30px 30px;float:right;width:50%;height:50%;"></a>
<img src="footer.jpg" style="float:left;width:100%;height:15%;">
</div>


</body>
</html>
