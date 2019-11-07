<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    if (isset($_POST['theater1'])) {
        $theaterid = 1;
    } else if (isset($_POST['theater2'])) {
        $theaterid = 2;
    } else if (isset($_POST['theater3'])){
        $theaterid = 3;
    }

    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');

    $query = "UPDATE theater SET activate = 0;";
    $result = $db -> query($query);
    $query = "UPDATE theater SET activate = 1 WHERE theaterid=" .$theaterid. ";";
    $result = $db -> query($query);

    $query = "SELECT* FROM theater WHERE theaterid=" .$theaterid. ";";
    $result = $db -> query($query);
    $data = $result -> fetch_assoc();
    $result -> free();

    $query = "SELECT* FROM theatermovie WHERE theaterid=" .$theaterid. ";";
    $result = $db -> query($query);
    $movie = array();
    for ($i=0; $i<5; $i++) {
        $row = $result -> fetch_assoc();
        $movie[$i] = $row['movieid'];
        $moive_name[$i] = $row['title'];
    }
    $result -> free();

    $slot_table = array(array());
    for ($i=0; $i<5; $i++) {
        $query = "SELECT* FROM theaterslot WHERE theaterslot.movieid = ".$movie[$i].";";
        $j = 1;
        $result = $db -> query($query);
        while ($row = $result -> fetch_assoc()){
            $slot_table[$movie[$i]][$j] = $row['slot'];
            $slot_name[$movie[$i]][$j] = $row['slotid'];
            $j++;
        }    
        $result -> free();
    }

    $result->free();
    $db->close();
?>
</head>

<body>
<div id="wrapper">
    <header>
        <button class="login">login/logout</button>
        <img src="logo.png" class="logo"/>
        <script type = "text/javascript" src = "detail.js"></script>
    </header>
    
    <nav class="smallnav">
        <a href="index.html" class="link">HOME</a><a> > </a>
        <a href="theater.html" class="link">THEATER LISTING</a><a> > </a>
        <a><?php echo $data['theatername'];?></a>
    </nav>
  
  	<div id="cinema">
        <p><?php echo $data['theaterdescription'];?></p>
        <img src="theater.png"/>
        
        <nav class="topnav">
            <input type="button" name="btn0" id="btn0" value="11/09" class="active" onclick="showForm(0)">
            <input type="button" name="btn1" id="btn1" value="11/10" onclick="showForm(1)">
            <input type="button" name="btn2" id="btn2" value="11/10" onclick="showForm(2)">
            <input type="button" name="btn3" id="btn3" value="11/10" onclick="showForm(3)">
        </nav>

        <form method="POST" action="buy.php">
        <table class="timeslot_active" id="date1">
            <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <?php
                @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
                for ($i=0; $i<5; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$moive_name[$i].'</th>';
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$movie[$i]. " AND slotdate='11-09';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="t'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
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
                for ($i=0; $i<5; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$moive_name[$i].'</th>';
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$movie[$i]. " AND slotdate='11-10';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="t'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
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
                for ($i=0; $i<5; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$moive_name[$i].'</th>';
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$movie[$i]. " AND slotdate='11-11';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="t'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
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
                for ($i=0; $i<5; $i++){
                    echo '<tr>';
                    echo '<th class="time">'.$moive_name[$i].'</th>';
                    $query = "SELECT slot, slotid FROM theaterslot WHERE movieid=" .$movie[$i]. " AND slotdate='11-12';";
                    $result = $db -> query($query);
                    while ( $data_table = $result -> fetch_assoc()){
                        echo '<td class="border"><button name="t'.$data_table['slotid'].'">'.$data_table['slot'].'</button></td>';
                    } 
                    echo '</tr>';
                }
                $result->free();
                $db->close();
            ?>
        </table>
        </form>
    </div>
        
</div>
</body>

<footer>
    <small><i>Copyright &copy; 2019 DG03-F38</i></small>
    <br>
    <small><i><a href="DG03@F38.com">DG03@F38.com</a></i></small>
</footer>	
</html>


