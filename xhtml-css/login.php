<?php
	session_start();
		include "db_connect.php";
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$query = "SELECT * FROM Login WHERE email = '$email' AND pw = SHA('$pw')";
		$result = mysqli_query($db, $query);
		if ($row = mysqli_fetch_array($result)){
			$_SESSION['email'] = $row['email'];
			?><html> <meta http-equiv = "REFRESH" content="0;url=my_profile.php"> </html><?php
			// $query = "SELECT * FROM Login WHERE email = '$email'";
// 			$result = mysqli_query($db, $query);
// 			if ($row = mysqli_fetch_array($result))
// 				{
// 					$query = "SELECT * FROM Users WHERE email = '$email'";
// 					$result = mysqli_query($db, $query);
// 					if ($row = mysqli_fetch_array($result))
// 						$_SESSION['first_name'] = $row['first_name'];
// 						$_SESSION['last_name'] = $row['last_name'];
// 						$_SESSION['gender'] = $row['gender'];
// 						$_SESSION['phone'] = $row['phone'];
// 						$_SESSION['interests'] = $row['interests'];
// 						$_SESSION['description'] = $row['description'];
// 						$_SESSION['lookingFor'] = $row['lookingFor'];
// 						$_SESSION['major'] = $row['major'];
// 					echo "<p>".$_SESSION['email']."</p>";
// 				}
		}
		else{
			echo "<p> Account not found </p>";
			?><html><meta http-equiv = "REFRESH" content="5;url=index.php"></html><?php
		}
	
	?>
