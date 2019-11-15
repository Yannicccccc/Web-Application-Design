<?php
    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');

    $id = $_POST['slotid'];
    $seat = $_POST['seatvacancy'];

    // $query = "UPDATE theaterslot SET seat = '".$seat."' WHERE slotid = '".$id"'";
    $query = "UPDATE theaterslot SET seat = '".$seat."' WHERE slotid = ".$id;
    $db->query($query);
    // $result = $db->query($query);
    // $temp = $result->fetch_assoc();

    session_start();
    $userid = $_SESSION['valid_user'];
    //add transaction
    $slotid = $id;
    $seatplan = $seat;

    $sql = "INSERT INTO purchase (name, slotid, seat) VALUES ('$userid', '$slotid', '$seatplan')";
    $db->query($sql);


    $query0 = "SELECT movieid FROM theaterslot WHERE slotid = ".$slotid.";";
    $result = $db->query($query0);
    $movie = $result->fetch_assoc();
    $movieid = $movie['movieid'] % 5;

    $query1 = "SELECT title FROM theatermovie WHERE movieid = ".$movieid.";";
    $result = $db->query($query1);
    $title1 = $result->fetch_assoc();
    $title = $title1['title'];

    $query2 = "SELECT slotdate FROM theaterslot WHERE slotid = '".$slotid."'";
    $result = $db->query($query2);
    $slotdate1 = $result->fetch_assoc();
    $slotdate = $slotdate1['slotdate'];

    $query3 = "SELECT slot FROM theaterslot WHERE slotid = ".$slotid.";";
    $result = $db->query($query3);
    $slot1 = $result->fetch_assoc();
    $slot = $slot1['slot']; 

    $query4 = "SELECT theaterid FROM theatermovie WHERE movieid = ".$movieid.";";
    $result = $db->query($query4);
    $theaterid1 = $result->fetch_assoc();
    $theaterid = $theaterid1['theaterid'];

    $query5 = "SELECT theatername FROM theater WHERE theaterid = ".$theaterid.";";
    $result = $db->query($query5);
    $theatername1 = $result->fetch_assoc();
    $theatername = $theatername1['theatername'];

    $query6 = "SELECT pic FROM movie WHERE movieid = ".$movieid.";";
    $result = $db->query($query6);
    $pic1 = $result->fetch_assoc();
    $pic = $pic1['pic'];

    $sql1 = "INSERT INTO currentbook (name, pic, slotid, movieid, title, slotdate, slot, theaterid, theatername) 
                VALUES ('$userid', '$pic', '$slotid', '$movieid', '$title', '$slotdate', '$slot', '$theaterid', '$theatername')";
    $db->query($sql1);            


    $sql2 = "INSERT INTO viewhist (name, title, pic) VALUES ('$userid', '$title', '$pic')";
    $db->query($sql2);

    //add points
    $sql = "UPDATE users SET points = points+1 WHERE name = '".$userid."'";
    $db->query($sql); 

    //add email
    $query7 = "SELECT title, slotdate, slot, theatername FROM currentbook WHERE name = '".$userid."' AND slotid = '".$slotid."'";
    $result = $db->query($query7);
    $data = $result->fetch_assoc();
    $title = $data['title'];
    $slotdate = $data['slotdate'];
    $slot = $data['slot'];
    $theatername = $data['theatername'];

    if (isset($_POST['slotid'])){
        $to = 'f38ee@localhost';
        $subject = 'Movie Booking';
        $message = '
        Hello '.$userid.'!
        Thank you for booking with us at L.L Cinemas. Your booking details are:
        Title of the movie: '.$title.'.
        Date of the movie: '.$slotdate.'.
        Time of the movie: '.$slot.'.
        Booked movie is being screened at: '.$theatername.'.';

        $headers = 'From: f38ee@localhost' . "\r\n" .
        'Reply-To: f38ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

    }


    $db->close();
    header("Location:movie.php");
?>