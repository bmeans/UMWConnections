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
      <p>Loneliness is a disease, we are the cure.</p>
      <ul>
        <li class="first"><a href="index.php">home</a></li>
        <li><a href="browse.php">browse profiles</a></li>
		<?php if(!isset($_SESSION['email'])) { ?>
		<li><a href="register.php">create account</a></li> <?php } ?>
        <li><a href="my_profile.php">my profile</a></li>
        <li><a href="advanced_search.php">advanced search</a></li>
		<li><a href="messages.php">messages</a></li>
        <li><a class="current">contact us</a></li>
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
        
    </div>
  </div>
  <!--header ends-->
  <!--body container starts-->
  <div id="body_container">
    <!--left container starts-->
    <div id="left_container">
      <div style="padding:20px 15px 30px 15px;">
      <h1>Contact <span>Us</span></h1>
      <div> <strong> <br />
        Please send us your questions and comments! </strong><br />
	</div>
      <div> <br />
        <h6 class="inner">Contact Form:</h6>
        <br />
        <form action="comment_complete.php" method="post">
          <table width="80%">
            
            <tr>
              <td align="left" valign="top" class="body" id="Contact"><strong>Full Name:</strong></td>
              <td align="left" valign="top"><input name="name" type="text" size="40" /></td>
            </tr>
            <tr>
              <td align="left" valign="top" class="body" id="Email"><strong> Email: </strong></td>
              <td align="left" valign="top"><input name="email" type="text" size="40" /></td>
            </tr>
            <tr>
              <td align="left" valign="top" class="body" id="Comments"><strong> Questions / Comments: </strong></td>
              <td align="left" valign="top"><textarea name="comments" cols="32" rows="6"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" class="button" value="Send Now" /></td>
            </tr>
          </table>
        </form>
      </div>
      <div> <br />
       <!-- <h6 class="inner">Contact Information: </h6>
        <img src="images/photo-contact.jpg" alt="" width="152" height="100" class="project-img" /><br />
        <br />
        <br />
        100 Lorem Ipsum Dolor Sit<br />
        88-99 Sit Amet, Lorem<br />
        USA<br />
        <br />
        <p> <span><img src="images/ico-phone.png" alt="Phone" width="20" height="16" hspace="2" /> Phone:</span> (888) 123 456 789<br />
          <span><img src="images/ico-fax.png" alt="Fax" width="20" height="16" hspace="2" /> Fax:</span> (888) 987 654 321<br />
          <span><img src="images/ico-website.png" alt="WWW Link" width="20" height="16" hspace="2" /> Website:</span> <a href="#">www.mycompany.com</a><br />
          <span><img src="images/ico-email.png" alt="Email" width="20" height="16" hspace="2" /> Email:</span> <a href="mailto:info@mycompany.com">info@mycompany.com</a><br />
          <span><img src="images/ico-twitter.png" alt="Twitter Follow" width="20" height="16" hspace="3" /> <a href="#">Follow</a> on Twitter</span><br />
        </p> --!>
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
