<?php
session_start()
?>

<html>
<?php
 include "db_connect.php";
 
 if (!isset($_SESSION['email'])){
  ?> <meta http-equiv = "REFRESH" content="0;url=index.html"> <?php
 }
 
 $email = $_SESSION['email'];
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $description = $_POST['description'];
 $major = $_POST['major'];
 $looking = $_POST['looking_for'];
 $interestedIn = $_POST['interested_in'];
 $interests = $_POST['interests'];
 $query = "UPDATE Users SET first_name='$first_name', last_name='$last_name', gender='$gender', phone='$phone', description='$description' where email='$email'";
 #$interestsQuery = "UPDATE Interests, Users, Users_Interests SET interest='$interests' where "
 #$majorQuery
 mysqli_query($db, $query);
 
 ?>
 
 <meta http-equiv="REFRESH" content="0;url=my_profile.php">
 
 </html>