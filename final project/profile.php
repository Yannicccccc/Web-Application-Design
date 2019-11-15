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
$result = $db->query($query);
$data = $result->fetch_assoc();
$profilepic = $data['profilepic'];
$profilepoints = $data['points'];

$query1 = "SELECT * from viewhist WHERE name = '".$_SESSION['valid_user']."' ";
// echo "<br>" .$query1. "<br>";
$result1 = $db->query($query1);
$pic = [];
$i = 0;
while ($data1 = $result1->fetch_assoc()) {
    $pic[$i] = $data1['pic'];
    $i++;
}

$query2 = "SELECT * from currentbook WHERE name = '".$_SESSION['valid_user']."' ";
$result2 = $db->query($query2);
$j = 0;
$bookpic = [];
$booktitle = [];
$bookdate = [];
$booktime = [];
$bookcinema = [];
$bookid = [];
while ($data2 = $result2->fetch_assoc()){
    $bookpic[$j] = $data2['pic'];
    $booktitle[$j] = $data2['title'];
    $bookdate[$j] = $data2['slotdate'];
    $booktime[$j] = $data2['slot'];
    $bookcinema[$j] = $data2['theatername'];
    $bookid[$j] = $data2['bookid'];
    $j++;
}

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
            <a href="index.php" class="link">HOME</a><a> > </a>
            <a href="profile.php" class="link">PROFILE</a>
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
            <form method="POST" action="cancel.php">
            <?php
                for($j=0;$j<count($bookpic);$j++){
                    echo '<div class="history">';
                    echo '<img src="'.$bookpic[$j].'" />';
                    echo '<div class="booking">';
                    echo $booktitle[$j];
                    echo '<br>';
                    echo $bookdate[$j];
                    echo ' : ';
                    echo $booktime[$j];
                    echo '<br>';
                    echo $bookcinema[$j];
                    echo '<br>';
                    echo '<br>';
                    echo '<input type="text" name="jvalue" value='.$bookid[$j].' style="display:none">';
                    echo '<input type="submit" name="cancel" value="Cancel booking"></div></div>';
                }
            ?>
            </form>
            <div id="clear"></div>
        </div>

        <div class="gap"></div>

        <div class="gap"><h4>VIEWING HISTORY</h4></div>

        <div class="tab3"></div>
        
        <div class="profilecontent3">
            
            <div class="gap"></div>

            <?php
                foreach($pic as $pics) {
                    echo '<div class="history2">';
                    echo '<img src="'.$pics.'" />';
                    echo '<form method="POST" action="moviedetail.php"><input type="submit" name="review" value="Write review"></form></div>';
                }
            ?>

            <div id="clear"></div>
        </div>

        <div class="gap"></div>

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



