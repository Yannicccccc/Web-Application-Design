<?php
    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    if (mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }
    
    $query = "SELECT seat FROM theaterslot WHERE slotid = '".$id."' ";
    echo $query;
    $result = $db->query($query);
    $temp = $result->fetch_assoc();

    for ($i=0; $i<40; $i++){
        $name = "seat".$i;
        $id = $_POST['slotid'];
        if (isset($_POST[$name])) {
            $temp['seat'][$i]='1';
        }
    }

    $query = "UPDATE theaterslot SET seat = '".$temp['seat']."' ";
    $result = $db->query($query);
    header("Location: index.php");
?>