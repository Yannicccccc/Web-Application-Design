<?php

//init connection
$db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
//check connection
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
 }

session_start();

$slotid = $_SESSION['slotid'];
$seatplan = $_SESSION['seatplan'];

$sql = "INSERT INTO purchase (name, slotid, seat) VALUES ('{$_SESSION['myusername']}', '$slotid', '$seatplan')";
$result = $db->query($sql);
$temp = $result->fetch_assoc();

$query0 = "SELECT movieid FROM theaterslot WHERE slotid = ".$slotid.";";
$result = $db->query($query0);
$movieid = $result->fetch_assoc();

$query1 = "SELECT title FROM theatermovie WHERE movieid = ".$movieid.";"
$result = $db->query($query1);
$title = $result->fetch_assoc();

$query2 = "SELECT slotdate FROM theaterslot WHERE slotid = ".$slotid.";";
$result = $db->query($query2);
$slotdate = $result->fetch_assoc();

$query3 = "SELECT slot FROM theaterslot WHERE slotid = ".$slotid.";";
$result = $db->query($query3);
$slot = $result->fetch_assoc();

$query4 = "SELECT theaterid FROM theatermovie WHERE movieid = ".$movieid.";"
$result = $db->query($query4);
$theaterid = $result->fetch_assoc();

$query5 = "SELECT theatername FROM theater WHERE theaterid = ".$theaterid.";"
$result = $db->query($query5);
$theatername = $result->fetch_assoc();

$sql1 = "INSERT INTO currentbook (name, slotid, movieid, title, slotdate, slot, theaterid, theatername) 
            VALUES ('{$_SESSION['myusername']}', '$slotid', '$movieid', '$title', '$slotdate', '$slot', '$theaterid', '$theatername')";
$result = $db->query($sql1);
$temp = $result->fetch_assoc();

$query6 = "SELECT pic FROM movie WHERE title = ".$title.";"
$result = $db->query($query6);
$pic = $result->fetch_assoc();

$sql2 = "INSERT INTO viewhist (name, title, pic) VALUES ('{$_SESSION['myusername']}', '$title', '$pic')";
$result = $db->query($sql2);
$temp = $result->fetch_assoc();

// echo $slotid;
// echo $seatplan;

header('Location:profile.php');
?>