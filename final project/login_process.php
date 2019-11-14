<?php // register.php
//init connection
$db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
//check connection
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
 }

session_start();

if (isset($_POST['logemail']) && isset($_POST['logpassword']))
{
    // if the user has just tried to log in
    $userid = $_POST['logemail'];
    $logpassword = $_POST['logpassword'];

    // echo ("$userid" . "<br />". "$logpassword" . "<br />");

    // $password = md5($password);
    $query = "SELECT * from users WHERE email = '".$userid."' AND password = '".$logpassword."'";
    
    // echo "<br>" .$query. "<br>";
    $result = $db->query($query);
    
    while ($row = $result->fetch_assoc()) {
        $_SESSION['valid_user'] = $row['name'];
    }
}
if (isset($_SESSION['valid_user'])) {
    echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
    echo '<a href="profile.php">Profile</a><br />';
    echo '<a href="logout.php">Log out</a><br />';
}
else {
    if (isset($userid)) {
    // if they've tried and failed to log in
        echo 'Could not log you in.<br />';
    }
    else {
        // they have not tried to log in yet or have logged out
        echo 'You are not logged in.<br />';
    }
}

header('Location:profile.php');
?>