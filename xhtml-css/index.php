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
    <div id="menu"> <span class="logo"><a href="index.php"><img src="images/logo.gif" alt="" /></a></span>
      <p>Loneliness is a disease and we are the cure</p>
      <ul>
        <li class="first"><a class="current">home</a></li>
        <li><a href="browse.php">browse profiles</a></li>
        <li><a href="register.php">create account</a></li>
        <li><a href="my_profile.php">my profile</a></li>
        <li><a href="advanced_search.php">advanced search</a></li>
        <li><a href="contact_us.php">contact Us</a></li>
		<li><a href="messages.php">messages</a></li>
		<li><?php if (!isset($_SESSION['email'])){
        ?><a href="my_profile.php">login</a> <?php 
		} 
		else { 
		?><a href="logout.php">logout</a> <?php
		 } ?> </li>
      </ul>
    </div>
    <!--menu ends-->
    <div id="banner">
      <div class="find_love">
        <h2><img src="images/find_your_love.gif" alt="" /></h2>
        <!--form container starts-->
        <div class="form_container">
          <form method="post" action="results.php">
            <fieldset>
            <div class="search_row">
              <div class="search_column_1">
                <label>I am a</label>
              </div>
              <div class="search_column_2">
                <select name="gender" class="gender">
                  <option>Male</option>
				  <option>Female</option>
                </select>
                <label class="seeking">Seeking a</label>
                <select name="gender2" class="gender2">
                  <option>Female</option>
				  <option>Male</option>
				  <option>No preference</option>
                </select>
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                <label>Looking for </label>
              </div>
              <div class="search_column_2">
                <select name="lookingFor" class="date">
                <option>Date</option>
				<option>Relationship</option>
				<option>Study Group</option>
				<option>Sports</option>
				<option>Friendship</option>
				
				</select>
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                <label>Looking for </label>
              </div>
              <div class="search_column_2">
                <select name="lookingFor2" class="studentYear">
                  <option>Freshman</option>
				  <option>Sophomore</option>
				  <option>Junior</option>
				  <option>Senior</option>
				  <option>Professor</option>
				  <option>No Preference</option>
                </select>
               
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                <label>First Name</label>
              </div>
              <div class="search_column_2">
                <input type="text" name="firstName" value="" />
              </div>
            </div>
			<div class="search_row">
              <div class="search_column_1">
                <label>Last Name</label>
              </div>
              <div class="search_column_2">
                <input type="text" name="lastName" value="" />
              </div>
            </div>
            <div class="search_row last">
              <div class="search_column_1">&nbsp;</div>
              <div class="search_column_2">
                <input type="image" src="images/find_btn.gif" class="search_btn"/>
              </div>
            </div>
            </fieldset>
          </form>
        </div>
      </div>
      <!--form container ends-->
    </div>
  </div>
  <!--header ends-->
  <!--body container starts-->
  <div id="body_container">
    <!--left container starts-->
    <div id="left_container">
      <h1>Welcome to <span>UMW Connections</span></h1>
     <div class="detail_containt">
        <h2>Get Connected Now!</h2>
        <p>Are you tired of dating the guy who lives 4 hours away?  Tired of sitting in your room every Thursday night while all the upperclassmen are barhopping?  Are you a new freshmen looking to meet some students in your major?  Or are you just looking for some new friends? We're here to help you get connected!  Our site features search results with students who have the same interests and expectations as you! Free to all UMW students! </p>
        <p class="last">UMW Connections allows you to post your profile online so you may find what you're looking for.  Find other students and staff who are looking for dates, relationships, study groups, hang outs, or those looking to play a sports game!
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br></p>
        
		<!--<a href="#"><img src="images/more_btn.gif" alt="" /></a> --> </div>
      <!-- bottom container starts-->
      <div class="bottom_container">
        <!--login container starts-->
        <div class="dating_tips">	
          <h3><b>Returning Members Login</b></h3>
			<form method="post" action="login.php">
		
				<label for="email">Email address:</label>
				<input type="text" id="email" name="email" /><br/>
				<label for="pw">Password:</label>
				<input type="password" id="pw" name="pw" /></br>
				
				<center><input type="submit" value="Login" name="submit" /></center>
			</form>
			<a href="register.php">Create Account</a>
		</div>
        <!--login container ends-->
        <!--success_story starts-->
        <div class="success_story">
          <h5>Taylor &amp; Brendan &amp; Sally</h5>
          <p>Thanks to UMW Connections, these three students met at the Underground and have been inseparable ever since!</p>
        </div>
        <!--success_story ends-->
        <!--more success_story starts-->
        <div class="more_success_story">
          <p>Send us your success story! <a href="contact_us.php">contact us</a> </p>
        </div><span class="clear"></span>
        <!--more success_story ends-->
      </div>
      <!-- bottom container ends-->
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
                        <p class="right">Programming, Costume Parties</p>
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
                        <p class="right">24 3/4 Years</p>
                      </div>
                      <div class="row">
                        <p class="left">Location :</p>
                        <p class="right">Holly Woods</p>
                      </div>
                      <div class="row last">
                        <p class="left">Likes :</p>
                        <p class="right">Eating</p>
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
                        <p class="right">Watching Anime and Skyping pretty ladies</p>
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
  <!--body container starts-->
  <!--footer starts-->
  <div id="footer"> <span class="footer_logo"><a href="#"><img src="images/single_2_mingle.gif" alt="" /></a></span>
    <div class="footer_link">
       <ul style="color:#FFF;">
        Design by Stylish <a style="color:#FFF; text-decoration:underline;" href="http://www.stylishtemplate.com">Website Templates</a>.
      </ul>
    </div>
  </div>
  <!--footer ends-->
</div>
<!--layout ends-->
</body>
</html>
