<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie Detail</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php

    if (isset($_POST['movie1'])) {
        $movieid = 1;
    } else if (isset($_POST['movie2'])) {
        $movieid = 2;
    } else if (isset($_POST['movie3'])) {
        $movieid = 3;
    } else if (isset($_POST['movie4'])) {
        $movieid = 4;
    } else if (isset($_POST['movie5'])) {
        $movieid = 5;
    } else if (isset($_POST['select'])) {
        if ($_POST['select'] = 1){
            $movieid = 1;
        }
        if ($_POST['select'] = 2){
            $movieid = 2;
        }
        if ($_POST['select'] = 3){
            $movieid = 3;
        }
        if ($_POST['select'] = 4){
            $movieid = 4;
        }
        if ($_POST['select'] = 5){
            $movieid = 5;
        }
    }
    // echo $movieid;

    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    $query = "SELECT * FROM movie WHERE movieid=" .$movieid. ";";
    $result = $db -> query($query);
    $data = $result -> fetch_assoc();

    session_start();
    if (isset($_SESSION['valid_user'])){
        $login = "logout";
        $loglink = "logout.php";
    }
    else {
        $login = "login";
        $loglink = "login.html";
    }
?>
</head>

<body>
<div id="wrapper">
    <header>
        <button class="login" onclick="window.location.href='<?= $loglink ?>'"><?= $login ?></button>
        <?php
            if(isset($_SESSION['valid_user'])){
        ?>
        <button class="login" onclick="window.location.href='profile.php'">Profile</button>
        <?php
            }
        ?>
        <img src="logo.png" class="logo"/>
        <script type = "text/javascript" src = "detail.js"></script>
  	</header>
  
  	<div id="content">
        <nav class="smallnav">
            <a href="index.php" class="link">HOME</a><a> > </a>
            <a href="movie.php" class="link">MOVIE LISTING</a><a> > </a>
            <a>MOVIE DETAIL</a>
        </nav>

        <table class="detail">
            <tr>
                <td rowspan="7"><img src="<?php echo $data['pic'];?>"/></td>
                <td><strong><?php echo $data['title'];?><strong></td>
                <td rowspan="4">
                    MAIN CAST: <?php echo $data['main_cast'];?>
                    <br>SUBTITLES: <?php echo $data['sub'];?>    
                    <br>DIRECTOR: <?php echo $data['director'];?>
                    <br>GENRE: <?php echo $data['genre'];?>
                    <br>LANGUAGE: <?php echo $data['lan'];?>
                    <br>RELEASE DATE: <?php echo $data['release_date'];?>
                </td>
            </tr>
            <tr>
                <td><?php echo $data['rate'];?></td>
            </tr>
            <tr>
                <td>Rating: <?php echo $data['score'];?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $data['synopsis'];?></td>
            </tr>
            <tr></tr>
        </table>
        
        <br>
        <form method="POST" action="buy.php">
        <nav class="topnav">
            <input type="button" onclick="showForm(0)" name="btn0" id="btn0" class="active" value="11-09">
            <input type="button" onclick="showForm(1)" name="btn1" id="btn1" value="11-10">
            <input type="button" onclick="showForm(2)" name="btn2" id="btn2" value="11-11">
            <input type="button" onclick="showForm(3)" name="btn3" id="btn3" value="11-12">
        </nav>

        <table class="timeslot_active" id="date1">
            <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <?php
                @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
                $theatername = array("theater A", "theater B", "theater C");
                for ($i=0; $i<3; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$theatername[$i].'</th>';
                    $temp = $movieid + $i*5;
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$temp. " AND slotdate='11-09';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="m'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
                    } 
                    echo '</tr>';
                }
                $result->free();
                $db->close();
            ?>
        </table>

        <table class="timeslot_popup" id="date2">
            <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <?php
                @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
                $theatername = array("theater A", "theater B", "theater C");
                for ($i=0; $i<3; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$theatername[$i].'</th>';
                    $temp = $movieid + $i*5;
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$temp. " AND slotdate='11-10';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="m'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
                    } 
                    echo '</tr>';
                }
                $result->free();
                $db->close();
            ?>
        </table>

        <table class="timeslot_popup" id="date3">
            <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <?php
                @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
                $theatername = array("theater A", "theater B", "theater C");
                for ($i=0; $i<3; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$theatername[$i].'</th>';
                    $temp = $movieid + $i*5;
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$temp. " AND slotdate='11-11';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="m'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
                    } 
                    echo '</tr>';
                }
                $result->free();
                $db->close();
            ?>
        </table>

        <table class="timeslot_popup" id="date4">
            <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <?php
                @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
                $theatername = array("theater A", "theater B", "theater C");
                for ($i=0; $i<3; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$theatername[$i].'</th>';
                    $temp = $movieid + $i*5;
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$temp. " AND slotdate='11-12';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="m'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
                    } 
                    echo '</tr>';
                }
                $result->free();
                $db->close();
            ?>
        </table>
        </form>

        <br><br>
        <table class="comment">
            <tr>
                <th class="header" colspan="2">Comments</th>
            </tr>
            <tr>
                <td rowspan="2"><img src="user.png"/></td>
                <td>Rating: 4.5</td>
            </tr>
            <tr>
                <td class="border" rowspan="2">Writers write descriptive paragraphs because their purpose is to describe something. Their point is that something is beautiful or disgusting or strangely intriguing. Writers write persuasive and argument paragraphs because their purpose is to persuade or convince someone. Their point is that their reader should see things a particular way and possibly take action on that new way of seeing things.</td>
            </tr>
            <tr>
                <td class="border">user id</td>
            </tr>
            <tr>
                <td rowspan="2"><img src="user.png"/></td>
                <td>Rating: 4.5</td>
            </tr>
            <tr>
                <td class="border" rowspan="2">Writers write descriptive paragraphs because their purpose is to describe something. Their point is that something is beautiful or disgusting or strangely intriguing. Writers write persuasive and argument paragraphs because their purpose is to persuade or convince someone. Their point is that their reader should see things a particular way and possibly take action on that new way of seeing things.</td>
            </tr>
            <tr>
                <td class="border">user id</td>
            </tr>
        </table>
        <br><br>
	</div>	
  
</div>
</body>

<footer>
    <small><i>Copyright &copy; 2019 DG03-F38</i></small>
    <br>
    <small><i><a href="DG03@F38.com">DG03@F38.com</a></i></small>
</footer>	
</html>


