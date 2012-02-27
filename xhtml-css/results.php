
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
<?php
include "db_connect.php";
$gender=$_POST['gender2'];
$lookingFor=$_POST['lookingFor'];
$year=$_POST['lookingFor2'];
$name=$_POST['name'];

#$query = "SELECT * FROM Users WHERE gender = '$gender2' AND lookingFor = '$lookingFor' AND year = '$lookingFor2'";
$query = "SELECT * FROM Users WHERE year = '$year'";
$result = mysqli_query($db, $query);

while($row = mysqli_fetch_array($result)){
echo "Name: ".$row['firstname'];
}
?>



