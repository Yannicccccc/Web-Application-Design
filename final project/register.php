<?php // register.php
//init connection
$db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
//check connection
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
 }
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password']) || empty ($_POST['password2']) || empty ($_POST['email']) ) {
	echo "All records to be filled in";
	exit;}
	}
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];

echo ("$username" . "<br />". "$password2" . "<br />". "$email" . "<br />");
if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}
// $password = md5($password);
// echo $password;
$sql = "INSERT INTO users (name, password, email) VALUES ('$username', '$password', '$email')";
echo "<br>". $sql. "<br>";
$result = $db->query($sql);

if (!$result) 
	echo "Your query failed.";
else
	echo "Welcome ". $username . ". You are now registered";
    
header('Location:login.html');
?>