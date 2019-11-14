<?php
    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    $id = $_POST['slotid'];
    $seat = $_POST['seatvacancy'];

    $query = "UPDATE theaterslot SET seat = '".$seat."' WHERE slotid = ".$id;
    $db->query($query);
    $db->close();
    header("Location:movie.php");
?>