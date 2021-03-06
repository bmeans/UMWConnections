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
    <div id="menu"> <span class="logo"><a href="index.php""><img src="images/logo.gif" alt="" /></a></span>
      <p>Loneliness is a disease and we are the cure.</p>
      <ul>
        <li class="first"><a href="index.php">home</a></li>
        <li><a href="browse.php">browse profiles</a></li>
        <li><a href="my_profile.php">my profile</a></li>
        <li><a href="advanced_search.php">advanced search</a></li>
		<li><a href="messages.php">messages</a></li>
        <li><a href="contact_us.php">contact Us</a></li>
        <li><?php if (!isset($_SESSION['email'])){
        ?><a href="my_profile.php">login</a> <?php 
		} 
		else { 
		?><a href="logout.php">logout</a> <?php
		 } ?> </li>
      </ul>
    </div>
    <!--menu ends-->
    <div id="banner_inner">
      <div class="find_love">
        <!--form container starts-->
        <div class="form_container">
          
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
     <div style="padding:20px 15px 30px 35px;">
      <form name="input" action="update_profile.php" method="post">
       First Name: <input type="text" value="<?php echo $_SESSION['first_name'] ?>" name="first_name" /><br />
       Last Name: <input type="text" value="<?php echo $_SESSION['last_name'] ?>" name = "last_name" /><br />
       Gender: <input type="radio" name="gender" value="Male" <?php if($_SESSION['gender'] == "Male") { echo "checked"; } ?>  />Male    <input type="radio" name="gender" value="Female" <?php if($_SESSION['gender'] == "Female") { echo "checked"; } ?>/>Female<br />
       Major: <input type="text" value="<?php echo $_SESSION['major'] ?>" name="major" /><br />
       Year: 
       	<input type="radio" name="classification" value="Freshman" <?php if($_SESSION['classification'] == "Freshman") { echo "checked"; } ?> />Freshman  
       	<input type="radio" name="classification" value="Sophomore" <?php if($_SESSION['classification'] == "Sophomore") { echo "checked"; } ?>/>Sophomore  
       	<input type="radio" name="classification" value="Junior" <?php if($_SESSION['classification'] == "Junior") { echo "checked"; } ?>/>Junior  
       	<input type="radio" name="classification" value="Senior" <?php if($_SESSION['classification'] == "Senior") { echo "checked"; } ?>/>Senior  
       	<input type="radio" name="classification" value="Professor" <?php if($_SESSION['classification'] == "Professor") { echo "checked"; } ?>/>Professor<br />
       Phone Number: <input type="text" name="phone" value="<?php echo $_SESSION['phone'] ?>" maxlength="10"><small><I>Don't include dashes or spaces</I></small><br /><br />
       What are you looking for?<br />
       <input type="radio" name="looking_for" value="Date" <?php if($_SESSION['looking_for'] == "Date") { echo "checked"; } ?> />Dates<br />
       <input type="radio" name="looking_for" value="Relationship" <?php if($_SESSION['looking_for'] == "Relationship") { echo "checked"; } ?>/> A Relationship<br />
       <input type="radio" name="looking_for" value="Friendship" />Friendship<br />
       <input type="radio" name="looking_for" value="Study Group" />Study Groups<br />
       <input type="radio" name="looking_for" value="Sports" />People to play sports with<br /><br />
       Who are you looking for?<br />
       <input type="radio" name="interested_in" value="Male" <?php if($_SESSION['interested_in'] == "Male") { echo "checked"; } ?> />Men    <input type="radio" name="interested_in" value="Female" <?php if($_SESSION['interested_in'] == "Female") { echo "checked"; } ?>/>Women    <input type="radio" name="interested_in" value="No preference" <?php if($_SESSION['interested_in'] == "No preference") { echo "checked"; } ?>/>No Preference<br /><br />
       What do you have to say about yourself?<br />
       <textarea rows="5" cols="40" name="description"><?php echo $_SESSION['description'] ?></textarea><br /><br />
       What are your interests?<br />
       <textarea rows="5" cols="40" name="interests"><?php echo $_SESSION['interests'] ?></textarea><br />
       <input type="submit" value="Submit" />
       </form>
              
</small> </div>
    
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
              <div class="pro_photo"><a href="#"><img src="images/pic_1.gif" alt="" /></a></div>
              <div class="outer">
                <div class="pro_detail_box">
                  <div class="pro_top_curve">
                    <div class="pro_detail_content">
                      <div class="row">
                        <p class="left">Name :</p>
                        <p class="right">Jenifer</p>
                      </div>
                      <div class="row">
                        <p class="left">Age :</p>
                        <p class="right">23 Years</p>
                      </div>
                      <div class="row">
                        <p class="left">Location :</p>
                        <p class="right">South Korea</p>
                      </div>
                      <div class="row last">
                        <p class="left">Likes :</p>
                        <p class="right">Duis cursus tortor elit</p>
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
                        <p class="right">David Martin</p>
                      </div>
                      <div class="row">
                        <p class="left">Age :</p>
                        <p class="right">28 Years</p>
                      </div>
                      <div class="row">
                        <p class="left">Location :</p>
                        <p class="right">England</p>
                      </div>
                      <div class="row last">
                        <p class="left">Likes :</p>
                        <p class="right">Duis cursus tortor elit</p>
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
                        <p class="right">Duis cursus tortor elit</p>
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
              <div class="pro_photo"><a href="#"><img src="images/pic_4.gif" alt="" /></a></div>
              <div class="outer">
                <div class="pro_detail_box">
                  <div class="pro_top_curve">
                    <div class="pro_detail_content">
                      <div class="row">
                        <p class="left">Name :</p>
                        <p class="right">Jenifer</p>
                      </div>
                      <div class="row">
                        <p class="left">Age :</p>
                        <p class="right">23 Years</p>
                      </div>
                      <div class="row">
                        <p class="left">Location :</p>
                        <p class="right">Argentina</p>
                      </div>
                      <div class="row last">
                        <p class="left">Likes :</p>
                        <p class="right">Duis cursus tortor elit</p>
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
         Design by Stylish <a style="color:#FFF; text-decoration:underline;" href="http://www.stylishtemplate.com">Website Templates</a>.
      </ul>
    </div>
  </div>
  <!--footer ends-->
</div>
<!--layout ends-->
</body>
</html>