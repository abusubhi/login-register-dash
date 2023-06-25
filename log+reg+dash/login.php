<?php 




$name= "localhost";
$sname= "root";
$password = "";
$db_name = "auth";

$conn = mysqli_connect($name, $sname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
echo "connection success";




$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT email , password FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // User found
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
  $username = $row['username'];
  // Set session variables
  session_start();
  $_SESSION['user_id'] = $user_id;
  $_SESSION['username'] = $username;
  // Redirect to home page
  header('Location: home.php');
} else {
  // User not found
  echo "Invalid email or password.";
}


session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: index.php?error=email Name is required");
	    
	}elseif(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else
	
{
	header("Location: student.php");
	exit();
}
}

