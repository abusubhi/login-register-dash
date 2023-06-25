<?php
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "auth");
// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// get the data from the form
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$rpassword = $_POST["rpassword"];



if ($_POST["password"] === $_POST["rpassword"]) {
  echo "yesssss";
}
else {
 echo "nooooo";
}


// insert the data into the database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "New user successfully created!";
} else {
  echo "Error creating user: " . mysqli_error($conn);
}


// close the connection
mysqli_close($conn);

header("Location: index.php");
	exit();
?>