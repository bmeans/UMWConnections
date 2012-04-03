<?php
session_start()
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UMW Connections</title>
<style type="text/css" media="screen">
@import url("css/layout.css");
</style>
</head>

<body>
<!--layout starts-->
<div id="layout">
<!--header starts-->
<div id="header">
<!--menu starts-->
<div id="menu"> <span class="logo"><a href="http://localhost/UMWconnections/UMWConnections/xhtml-css/index.html"><img src="images/logo.gif" alt="" /></a></span>
<p>Loneliness is a disease and we are the cure.</p>
<ul>
<li class="first"><a href="index.html">home</a></li>
<li><a href="browse.php" class="browse.php">browse profiles</a></li>
<li><a href="register.php">create account</a></li>
<li><a class="my_profile.php">my profile</a></li>
<li><a href="advanced_search.php">advanced search</a></li>
<li><a href="contact_us.php">contact Us</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div>
<!--menu ends-->
<div id="banner">
<div class="find_love">
<!--form container starts-->
</div>
</div>
<!--header begins-->
<!--header ends-->
<!--body container starts-->
<div id="body_container">
<!--left container starts-->
<div id="left_container">
<div style="padding:20px 15px 30px 15px;">
<h1 style="color:#2554C7;"><span></span></h1>
<div class="ourprojectrow">
<div> <img src="images/projectimg1.jpg" alt="" width="210" height="139" class="project-img" /> <br />
<?php
include "db_connect.php";


if (!isset($_SESSION['email'])){
echo "Please login to see your profile or click create account to make one.";
echo "<br>";
?>
<br>
<h3>Returning Members Login</h3>
<br>
<form method="post" action="login.php">
<label for="email">Email address:</label>
<input type="text" id="email" name="email" /><br/>
<label for="pw">Password:</label>
<input type="password" id="pw" name="pw" /></br>
<center><input type="submit" value="Login" name="submit" /></center>
</form>
</br>
<a href="register.php">Create Account</a>
<?php
}

else if($_SESSION['email'] == "admin")
{
$query = "SELECT * FROM Comments";
$result = mysqli_query($db, $query);
echo "<br>";
while($row = mysqli_fetch_array($result)){
$name = $row['name'];

echo "<br>";
echo "<br>";
echo "Name: ".$row['name']." ";
echo "<br>";
echo "Email: ".$row['email'];
echo "<br>";
echo "Comment/Question: ".$row['comments'];
echo "<br>";

}

if (mysqli_num_rows($result)==0){
echo "There are no comments or questions at this time.";
}

}
else{
$email = $_SESSION['email'];
$query = "SELECT * FROM Users WHERE email = '$email'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){


      
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['first_name'] = $row['first_name'];
$_SESSION['last_name'] = $row['last_name'];
$_SESSION['gender'] = $row['gender'];
$_SESSION['phone'] = $row['phone'];
$_SESSION['description'] = $row['description'];
$interested_in_id = $row['interested_in_id'];
$looking_for_id= $row['looking_for_id'];
$classification_id= $row['classification_id'];

$query = "SELECT interested_in_value FROM InterestedIn WHERE interested_in_id = '$interested_in_id'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){
$_SESSION['interested_in'] = $row['interested_in_value'];
}
else
{
$_SESSION['interested_in'] = "N/A";
}


$query = "SELECT looking_for_value FROM Looking_For WHERE looking_for_id = '$looking_for_id'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){
$_SESSION['looking_for'] = $row['looking_for_value'];
}
{
$_SESSION['looking_for'] = "N/A";
}

$query = "SELECT classification FROM Classifications WHERE classification_id = '$classification_id'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){
$_SESSION['classification'] = $row['classification'];
}

$query = "SELECT m.major from Users_Majors um NATURAL JOIN Majors m WHERE user_id =".$_SESSION['user_id'].";";
$result = mysqli_query($db, $query);
$_SESSION['major'] = "";
while ($row = mysqli_fetch_array($result)){
$_SESSION['major'] = $_SESSION['major'].$row['major'];
}

$query = "SELECT i.interest from Users_Interests ui NATURAL JOIN Interests i WHERE user_id =".$_SESSION['user_id'].";";
$result = mysqli_query($db, $query);
$_SESSION['interests'] = "";
while ($row = mysqli_fetch_array($result)){
$_SESSION['interests'] = $_SESSION['interests'].$row['interest']." ";
}
?>
<h6 class="inner" style="color:#2554C7;"> Your profile details: </h6>
<?php

echo "<br>";
echo "Name: ".$_SESSION['first_name']." ".$_SESSION['last_name'];
echo "<br>";
echo "Email: ".$_SESSION['email'];
echo "<br>";
echo "Gender: ".$_SESSION['gender'];
echo "<br>";
echo "Phone Number: ".$_SESSION['phone'];
echo "<br>";
echo "Major: ".$_SESSION['major'];
echo "<br>";
echo "Description of yourself: ".$_SESSION['description'];
echo "<br>";
echo "Interests: " .$_SESSION['interests'];
echo "<br>";
echo "What you're looking for: ".$_SESSION['looking_for'];
echo "<br>";
echo "Who you're looking for: ".$_SESSION['interested_in'];
?><form action="edit_profile.php" method="post">
<input type="submit" value="Edit Profile" />
</form><?php


}
}

?>

<div class="clear"></div>
</div>
<br />
<!--
<div style="font-weight:bold;"><img src="images/arrow.png" alt="" width="16" height="16" border="0" /> <a href="#" class="projects">View this project</a>
<div class="clear"></div>
</div>
</div>
<div class="ourprojectrow">
<h6 class="inner">Project Two </h6>
<div> <img src="images/projectimg2.jpg" alt="" width="210" height="139" class="project-img" /> <br />
<br />
<br />
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis. <br />
<div class="clear"></div>
</div>
<br />
<div style="font-weight:bold;"><img src="images/arrow.png" alt="" width="16" height="16" border="0" /> <a href="#" class="projects">View this project</a>
<div class="clear"></div>
</div>
</div>
<div class="ourprojectrow">
<h6 class="inner">Project Three </h6>
<div> <img src="images/projectimg3.jpg" alt="" width="210" height="139" class="project-img" /> <br />
<br />
<br />
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis.<br />
<div class="clear"></div>
</div>
<br />
<div style="font-weight:bold;"><img src="images/arrow.png" alt="" width="16" height="16" border="0" /> <a href="#" class="projects">View this project</a>
<div class="clear"></div>
</div>
-->
</div>
</div>
<div class="clear"></div>
</div>

<!--left container ends-->
<!--right container starts-->
<div id="right_container">
<!--recently profiles starts-->
<h5>Recently Added Profiles</h5>
<div id="profile_container">
<div class="profile_box">
<div class="top_curve">
<div class="profile_content">
<div class="pro_photo"><a href="#"><img src="images/pic_1.png" alt="" /></a></div>
<div class="outer">
<div class="pro_detail_box">
<div class="pro_top_curve">
<div class="pro_detail_content">
<div class="row">
<p class="left">Name :</p>
<p class="right">Nelly</p>
</div>
<div class="row">
<p class="left">Age :</p>
<p class="right">20 Years</p>
</div>
<div class="row">
<p class="left">Location :</p>
<p class="right">Orange County</p>
</div>
<div class="row last">
<p class="left">Likes :</p>
<p class="right">sleeping</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="profile_box">
<div class="top_curve">
<div class="profile_content">
<div class="pro_photo"><a href="#"><img src="images/pic_2.gif" alt="" /></a></div>
<div class="outer">
<div class="pro_detail_box">
<div class="pro_top_curve">
<div class="pro_detail_content">
<div class="row">
<p class="left">Name :</p>
<p class="right">Aaron</p>
</div>
<div class="row">
<p class="left">Age :</p>
<p class="right">21 Years</p>
</div>
<div class="row">
<p class="left">Location :</p>
<p class="right">Fredvegas</p>
</div>
<div class="row last">
<p class="left">Likes :</p>
<p class="right">programming, costume parties</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="profile_box">
<div class="top_curve">
<div class="profile_content">
<div class="pro_photo"><a href="#"><img src="images/pic_3.gif" alt="" /></a></div>
<div class="outer">
<div class="pro_detail_box">
<div class="pro_top_curve">
<div class="pro_detail_content">
<div class="row">
<p class="left">Name :</p>
<p class="right">Shakira</p>
</div>
<div class="row">
<p class="left">Age :</p>
<p class="right">25 Years</p>
</div>
<div class="row">
<p class="left">Location :</p>
<p class="right">Argentina</p>
</div>
<div class="row last">
<p class="left">Likes :</p>
<p class="right">eating</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="profile_box last">
<div class="top_curve">
<div class="profile_content">
<div class="pro_photo"><a href="#"><img src="images/pic_4.png" alt="" /></a></div>
<div class="outer">
<div class="pro_detail_box">
<div class="pro_top_curve">
<div class="pro_detail_content">
<div class="row">
<p class="left">Name :</p>
<p class="right">Keith</p>
</div>
<div class="row">
<p class="left">Age :</p>
<p class="right">32 Years</p>
</div>
<div class="row">
<p class="left">Location :</p>
<p class="right">Argentina</p>
</div>
<div class="row last">
<p class="left">Likes :</p>
<p class="right">Watching anime, skyping pretty ladies</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--recently profiles starts-->
</div>
<!--right container ends-->
</div>
<!--body container ends-->
<!--footer starts-->
<div id="footer"> <span class="footer_logo"><a href="#"><img src="images/single_2_mingle.gif" alt="" /></a></span>
<div class="footer_link">
<ul style="color:#FFF;">
Copyright (c) Sitename.com. All rights reserved. Design by Stylish <a style="color:#FFF; text-decoration:underline;" href="http://www.stylishtemplate.com">Website Templates</a>.
</ul>
</div>
</div>
<!--footer ends-->
</div>
<!--layout ends-->
</body>
</html>