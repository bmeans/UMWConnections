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
 $interestIDSearch = mysqli_query($db, "SELECT interest_id from Interests where interest='$interests'");
 $interestRow = mysqli_fetch_array($interestIDSearch);
 if ($interestRow['interest_id'] == NULL){
     mysqli_query($db, "INSERT INTO Users_Interests (interest) VALUES ('$interests')");
     $interestIDSearch = mysqli_query($db, "SELECT interest_id from Interests where interest='$interests'");
     $interestRow = mysqli_fetch_array($interestIDSearch);
 }
 $userID = $interestRow['interest_id'];
 $interestsQuery = "UPDATE Users, Users_Interests SET Users_Interests='$userID' where Users.email='$email' and Users.user_id=Users_Interests.user_id";
 #$majorQuery
 mysqli_query($db, $query);
 mysqli_query($db, $interestsQuery);
 
 ?>
 
 <meta http-equiv="REFRESH" content="0;url=my_profile.php">
 
 </html>