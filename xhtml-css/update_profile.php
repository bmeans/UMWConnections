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
 $query = "UPDATE Users SET first_name='$first_name' last_name='$last_name' gender='$gender' phone='$phone' where email='$email'";
 mysqli_query($db, $query);
 
 ?>
 
 <meta http-equiv="REFRESH" content="0;url=my_profile.php">
 
 </html>