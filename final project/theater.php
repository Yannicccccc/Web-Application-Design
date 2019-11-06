<!DOCTYPE html>
<html lang="en">
<head>
<title>Theater</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="wrapper">
    <header>
        <button class="login">login/logout</button>
        <img src="logo.png" class="logo"/>
  	</header>
  
  	<div id="intro">
        <nav class="topnav">
            <button onclick="window.location.href='index.html'">Home</button>
            <button onclick="window.location.href='movie.html'">Movie</button>
            <button onclick="window.location.href='theater.php'" class="active">Theater</button>
            <button onclick="window.location.href='promotion.html'">Promotion</button>
            <button onclick="window.location.href='corporate.html'">Corporate Events</button>
        </nav>

        <p>This is an introduction of the theatre. This is an introduction of the theatre. This is an introduction of the theatre. This is an introduction of the theatre. This is an introduction of the theatre. </p>
        <div id="googleMap"></div>
        <script>
            function myMap() {
                var mapProp= {
                  center:new google.maps.LatLng(1.290270, 103.851959),
                  zoom:9,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-L7L5IqsvZ8ycdU_0O7OJOyWCcLiQst0&callback=myMap"></script>
    </div>
    
    <div id="theaterlist">
        <ul>
            <li><a href="?link=1" name="theaterA">theater A</a></li>
            <li><a href="?link=2" name="theaterB">theater B</a></li>
            <li><a href="?link=3" name="theaterC">theater C</a></li>
        </ul>
    </div>

    <div id="theaterportal">
        <table>
            <tr>
                <td><a href="?link=1"><img src="theater.png"/></a></td>
                <td><a href="?link=2"><img src="theater.png"/></a></td>
                <td><a href="?link=3"><img src="theater.png"/></a></td>
                <td></td>
            </tr>
            <tr>
                <td>This is a description.</td>
                <td>This is a description.</td>
                <td>This is a description.</td>
                <td></td>
            </tr>
        </table>
    </div>

    <?php
        $link=$_GET['link'];
        if ($link == '1'){
            $choice = "theaterA";
        }
        else if ($link == '2'){
            $choice = "theaterB";
        }
        else if ($link == '3'){
            $choice = "theaterC";
        }

        @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
        if (mysqli_connect_errno()){
            echo 'Error: Could not connect to database.  Please try again later.';
            exit;
        }

        $query = "UPDATE theater SET activate = 1 WHERE theaterid = ".$choice.";";
        $result = $db->query($query);
        $data = $result->fetch_assoc();

        $result->free();
        $db->close();
    ?>
</div>
</body>

<footer>
    <small><i>Copyright &copy; 2019 DG03-F38</i></small>
    <br>
    <small><i><a href="DG03@F38.com">DG03@F38.com</a></i></small>
</footer>	
</html>


