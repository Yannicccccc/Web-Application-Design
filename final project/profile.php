<?php
//init connection
$db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
//check connection
if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
}
session_start();

$query = "SELECT * from users WHERE name = '".$_SESSION['valid_user']."' ";
// echo "<br>" .$query. "<br>";

$result = $db->query($query);
$data = $result->fetch_assoc();
$profilepic = $data['profilepic'];
// echo $profilepic;
$profilepoints = $data['points'];
echo $profilepoints;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie Detail</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body onload="calcmem() & calcnext() & showpriv();" onchange="calcmem() & calcnext() & showpriv();">
<div id="wrapper">
    <header>
        <button class="login" onclick="window.location.href='logout.php'"">logout</button>
        <img src="logo.png" class="logo"/>
        <script type = "text/javascript">
            var mypoints = <?php echo $profilepoints;?>;
        </script>
        <script type = "text/javascript" src = "moivelist.js"></script>
  	</header>
  
  	<div id="content">
        <nav class="smallnav">
            <a href="index.html" class="link">HOME</a><a> > </a>
            <a href="movie.html" class="link">PROFILE</a>
        </nav>

        <div class="gap"></div>

        <div class="tab1"></div>
        
        <div class="profilecontent1">
            <h3><?php echo 'Welcome '.$_SESSION['valid_user'].' <br />' ?></h3>
            <?php echo '<img src="'.$profilepic.'" class="round">'?>
            <div class="points">
                <p>Membership level: <span id="level"></span> points</p>
                <p>To Next level: <span id="nextlevel"></span> points</p>
                <p>My points: <?php echo $profilepoints?></p>
            </div>
            <div class="points">
                <div class="smalllabel">My privilage:</div>
                <div class="smallbox"><span id="privi"></span></div>
            </div>
            <div class="gap"></div>
            <div id="clear"></div>
        </div>

        <div class="gap"></div>

        <div class="gap"><h4>CURRENT BOOKING</h4></div>

        <div class="tab2"></div>

        <div class="profilecontent2">
            <div class="gap"></div>

            <div class="history">
                <img src="Poster-MaleficentMistressOfEvil-V2.jpg">
                <div class="booking">
                    Movie Title<br>
                    Date : Time slot<br>
                    Cinema<br>
                    <form method="POST" action="moviedetail.php">
                        <input type="submit" name="cancel" value="Cancel booking"><br>
                        <input type="submit" name="reschedule" value="Reschedule booking">
                    </form>
                </div>
            </div>
            
            <div class="history">
                <img src="Poster-TerminatorDarkFate-V2.jpg">
                <div class="booking">
                    Movie Title<br>
                    Date : Time slot<br>
                    Cinema<br>
                    <form method="POST" action="moviedetail.php">
                        <input type="submit" name="cancel" value="Cancel booking"><br>
                        <input type="submit" name="reschedule" value="Reschedule booking">
                    </form>
                </div>
            
            </div>
            
            <div id="clear"></div>
        </div>

        <div class="gap"></div>

        <div class="gap"><h4>VIEWING HISTORY</h4></div>

        <div class="tab3"></div>
        
        <div class="profilecontent3">
            
            <div class="gap"></div>

            <div class="history2">
                <img src="Poster-MaleficentMistressOfEvil-V2.jpg">
                <form method="POST" action="moviedetail.php">
                    <input type="submit" name="review" value="Write review">
                </form>
            </div>

            <div class="history2">
                <img src="Poster-TerminatorDarkFate-V2.jpg">
                <form method="POST" action="moviedetail.php">
                    <input type="submit" name="review" value="Write review">
                </form>
            </div>

            <div id="clear"></div>
        </div>

        <div class="gap"></div>

        <div class="gap"><h4>MY VOUCHERS</h4></div>

        <div class="tab4"></div>

        <div class="profilecontent4">
            <h3><?php echo 'You have booked these vouchers, '.$_SESSION['valid_user'].' <br />' ?></h3>
            
            <div id="clear"></div>
        </div>

        <div class="gap"></div>
        <!-- <p><?php echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />'?></p> -->
    </div>
</div>
        
  
</div>
</body>

<footer>
    <small><i>Copyright &copy; 2019 DG03-F38</i></small>
    <br>
    <small><i><a href="DG03@F38.com">DG03@F38.com</a></i></small>
</footer>	
</html>



