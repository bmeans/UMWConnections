<?php
	session_start();
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
      <p>Fusce tristique, nisl vel gravida venenatis, risus magna eleifend pede, id bibendum mauris metus et erat.</p>
      <ul>
        <li class="first"><a href="index.html">home</a></li>
        <li><a href="about_us.html">about us</a></li>
        <li><a href="register.php">create account</a></li>
        <li><a href="my_profile.php">my profile</a></li>
        <li><a href="advanced_search.php">advanced search</a></li>
        <li><a href="support.html">support</a></li>
        <li><a href="contact_us.php">contact Us</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
    <!--menu ends-->
    <!--<div id="banner_inner">
      
        <!--form container starts-->
        
        
     
      <!--form container ends-->
    
  </div>
  
  <!--header ends-->
  <!--body container starts-->
  <div id="body_container">
    <!--left container starts-->
    <div id="left_container">
      <div style="padding:20px 15px 30px 15px;">
      <h1><span>Search Results </span></h1>
      <div>
      <!--<strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin  sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, risus neque venenatis arcu, a semper massa mi eget ipsum. </strong> <br />
        -->
        <br />
        <?php
			include "db_connect.php";
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['pw'] = $_POST['pw'];
			$_SESSION['lname'] = $_POST['lname'];
			$_SESSION['fname'] = $_POST['fname'];
			$email = $_POST['email'];
			$pw = $_POST['pw'];
			$last_name = $_POST['lname'];
			$first_name = $_POST['fname'];
			
			echo $_SESSION['email'];
			$reg_query= "INSERT INTO Login(email, pw) Values('$email',SHA('$pw'))";
			$query = "INSERT INTO Users (email, last_name, first_name) Values('$email','$last_name','$first_name')";
			$result= mysqli_query($db, $reg_query);	//sends a query to the current active database
			$result2 = mysqli_query($db, $query);
	?>
		
	
	<!--	<meta http-equiv="REFRESH" content="0;url=my_profile.php"> -->
	</HEAD>

		
        <br />
      <div class="clear"></div>
      <div class="clear"></div>
      </div>
      </div>
      </div>
      <!--
      <div class="servicecolumnzone">
        <div class="servicecolumn1">
          <div>
            <h5 class="inner"> Service 1</h5>
            <img src="images/ico1.png" alt="" class="abouticon" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, </div>
          <div class="clear"></div>
        </div>
        <div class="servicecolumn2">
          <div>
            <h5 class="inner">Service 2</h5>
            <img src="images/ico2.png" alt="" width="65" height="65" class="abouticon" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="servicecolumn1">
          <div>
            <h5 class="inner">Service 3 </h5>
            <img src="images/ico3.png" alt="" width="65" height="65" class="abouticon" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, </div>
          <div class="clear"></div>
        </div>
        <div class="servicecolumn2">
          <div>
            <h5 class="inner">Service 4 </h5>
            <img src="images/ico4.png" alt="" width="65" height="65" class="abouticon" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="servicecolumn1">
          <div>
            <h5 class="inner">Service 5 </h5>
            <img src="images/ico5.png" alt="" width="65" height="65" class="abouticon" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, </div>
          <div class="clear"></div>
        </div>
        <div class="servicecolumn2">
          <div>
            <h5 class="inner">Service 6 </h5>
            <img src="images/ico6.png" alt="" width="65" height="65" class="abouticon" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div style="padding-top:10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed  odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum  varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin  sed odio et ante adipiscing lobortis. Lorem ipsum dolor sit amet,  consectetuer adipiscing elit. Proin sed odio et ante adipiscing  lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis  arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing  lobortis.</div>
    </div>
      <div class="clear"></div>
    </div>
    -->
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
                        <p class="right">Watching anime, skyping with pretty ladies</p>
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
