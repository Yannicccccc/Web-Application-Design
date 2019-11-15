<!-- <?php

    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    if (mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }
    session_start();

    $slotid = $_SESSION['slotid']; 
    $userid = $_SESSION['valid_user'];

    $query = "SELECT title, slotdate, slot, theatername FROM currentbook WHERE name = '".$userid."' AND slotid = '".$slotid."'";
    $result = $db->query($query);
    $data = $result->fetch_assoc();
    $title = $data[0];
    $slotdate = $data[1];
    $slot = $data[2];
    $theatername = $data[3];

    if (isset($_POST['email_submit'])){
        $to = 'f38ee@localhost';
        $subject = 'Movie Booking';
        $message = 'Hello '.$userid.'!<br />';
        $message .= 'Thank you for booking with us at L.L Cinemas. Your booking details are as follows: <br />';
        $message .= 'Title of the movie: '.$title.'.<br />';
        $message .= 'Date of the movie: '.$slotdate.'.<br />';
        $message .= 'Time of the movie: '.$slot.'.<br />';
        $message .= 'Booked movie is being screened at: '.$theatername.'.<br />';
        $headers = 'From: f38ee@localhost' . "\r\n" .
        'Reply-To: f38ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        echo 'Email Sent.';
    }

?> -->