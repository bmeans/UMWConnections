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
    <div id="menu"> <span class="logo"><a href="#"><img src="images/logo.gif" alt="" /></a></span>
      <p>Fusce tristique, nisl vel gravida venenatis, risus magna eleifend pede, id bibendum mauris metus et erat.</p>
      <ul>
        <li class="first"><a href="index.html">home</a></li>
        <li><a href="about_us.html">about us</a></li>
        <li><a href="register.php">create account</a></li>
        <li><a href="my_profile.php">my profile</a></li>
        <li><a href="advanced_search.php">advanced search</a></li>
        <li><a href="contact_us.php">contact Us</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
    <!--menu ends-->
    <div id="banner_inner">
      <div class="find_love">
        <h2><img src="images/find_your_love.gif" alt="" /></h2>
        <!--form container starts-->
        <div class="form_container">
          <form action="" method="get">
            <fieldset>
            <div class="search_row">
              <div class="search_column_1">
                <label>I am a</label>
              </div>
              <div class="search_column_2">
                <select class="gender">
                  <option>Male</option>
                </select>
                <label class="seeking">Seeking a</label>
                <select class="gender">
                  <option>Female</option>
                </select>
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                <label>Looking for a</label>
              </div>
              <div class="search_column_2">
                <select class="date">
                  <option>Date</option>
                </select>
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                <label>I was born</label>
              </div>
              <div class="search_column_2">
                <select class="dob">
                  <option>Month</option>
                </select>
                <select class="dob">
                  <option>Date</option>
                </select>
                <select class="dob">
                  <option>Year</option>
                </select>
              </div>
            </div>
            <div class="search_row">
              <div class="search_column_1">
                <label>By Profile ID</label>
              </div>
              <div class="search_column_2">
                <input type="text" name="" value="" />
                <label class="check">With Photo</label>
                <input type="checkbox" name="" value="" class="checkbox"/>
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
     <div style="padding:20px 15px 30px 35px;">
      <form name="input" action="editProfileUpdate.php" method="post">
       First Name: <input type="text" value="<?php echo $_SESSION['first_name'] ?>" name="first_name" /><br />
       Last Name: <input type="text" value="<?php echo $_SESSION['last_name'] ?>" name = "last_name" /><br />
       Gender: <input type="radio" name="gender" value="male" />Male    <input type="radio" name="gender" value"female" />Female<br />
       Major: <input type="text" value="<?php echo $_SESSION['major'] ?>" name="major" /><br />
       Phone Number: <textarea rows="1" cols="10"><?php echo $_SESSION['phone'] ?></textarea><small><I>Don't include dashes or spaces</I></small><br /><br />
       What are you looking for?<br />
       <input type="checkbox" name="looking_for" value="date" />Dates<br />
       <input type="checkbox" name="looking_for" value="relationship" /> A Relationship<br />
       <input type="checkbox" name="looking_for" value="friendship" />Friendship<br />
       <input type="checkbox" name="looking_for" value="study_group" />Study Groups<br />
       <input type="checkbox" name="looking_for" value="sports" />People to play sports with<br /><br />
       Who are you looking for?<br />
       <input type="radio" name="interested_in" value="male" />Men    <input type="radio" name="interested_in" value="female" />Women    <input type="radio" name="interested_in" value="no_preference" />No Preference<br /><br />
       What do you have to say about yourself?<br />
       <textarea rows="5" cols="40"><?php echo $_SESSION['description'] ?></textarea><br /><br />
       What are your interests?<br />
       <textarea rows="5" cols="40"><?php echo $_SESSION['interests'] ?></textarea><br />
       <input type="submit" value="Submit" />
       </form>
       
       
       
Templates">DreamTemplate</a></small> </div>
    </div>
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
        Copyright (c) Sitename.com. All rights reserved. Design by Stylish <a style="color:#FFF; text-decoration:underline;" href="http://www.stylishtemplate.com">Website Templates</a>.
      </ul>
    </div>
  </div>
  <!--footer ends-->
</div>
<!--layout ends-->
</body>
</html>