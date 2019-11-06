<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    if (isset($_POST['theaterA'])) {
        $theaterid = 1;
    } else if (isset($_POST['theaterB'])) {
        $theaterid = 2;
    } else {
        $theaterid = 3;
    }

    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');

    $query = "UPDATE theater SET activate = 0;";
    $result = $db -> query($query);
    $result -> free();
    $query = "UPDATE theater SET activate = 1 WHERE theaterid=" .$theaterid. ";";
    $result = $db -> query($query);
    $result -> free();

    $query = "SELECT* FROM theater WHERE theaterid=" .$theaterid. ";";
    $result = $db -> query($query);
    $data = $result -> fetch_assoc();
    $result -> free();

    $query = "SELECT* FROM theaterslot, theatermovie WHERE theatermovie.movieid = theaterslot.movieid;";
    $movie = array();
    for ($i=0; $i<5; $i++) {
        $row = $result -> fetch_assoc();
        $movie[$i] = $row['movieid'];
    }
    $result -> free();

    $slot_table = array(array());
    for ($i=0; $i<5; $i++) {
        $query = "SELECT* FROM theaterslot WHERE theaterslot.movieid = ".$movie[$i].";";
        $j = 1;
        while ($row = $result -> fetch_assoc()){
            $slot_table[$movie[$i]][$j] = $row['slot'];
            $j++;
        }    
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
        <form method="POST" action="buy.php">
        <nav class="topnav">
            <input type="button" name="btn0" id="btn0" value="11/09" class="active" onclick="showForm(0)">
            <input type="button" name="btn1" id="btn1" value="11/10" onclick="showForm(1)">
            <input type="button" name="btn2" id="btn2" value="11/10" onclick="showForm(2)">
            <input type="button" name="btn3" id="btn3" value="11/10" onclick="showForm(3)">
        </nav>

        <table class="timeslot_active" id="date1">
            <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <tr>
                <th class="time">A Witness Out Of The Blue</td>
                <td class="border"><button name="1" ><?php echo $slot_table[1][1];?></button></td>
                <td class="border"><button name="2" ><?php echo $slot_table[1][2];?></button></td>
                <td class="border"><button name="3" ><?php echo $slot_table[1][3];?></button></td>
                <td class="border"><button name="4" ><?php echo $slot_table[1][4];?></button></td>
                <td class="border"><button name="5" ><?php echo $slot_table[1][5];?></button></td>
            </tr>
            <tr>
                <th class="time">Bigil</td>
                <td class="border"><button name="6" ><?php echo $slot_table[2][1];?></button></td>
                <td class="border"><button name="7" ><?php echo $slot_table[2][2];?></button></td>
                <td class="border"><button name="8" ><?php echo $slot_table[2][3];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Maleficient: Mistress Of Evil</td>
                <td class="border"><button name="9" ><?php echo $slot_table[3][1];?></button></td>
                <td class="border"><button name="10" ><?php echo $slot_table[3][2];?></button></td>
                <td class="border"><button name="11" ><?php echo $slot_table[3][3];?></button></td>
                <td class="border"><button name="12" ><?php echo $slot_table[3][4];?></button></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Terminator: Dark Fate</td>
                <td class="border"><button name="13" ><?php echo $slot_table[4][1];?></button></td>
                <td class="border"><button name="14" ><?php echo $slot_table[4][2];?></button></td>
                <td class="border"><button name="15" ><?php echo $slot_table[4][3];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="corner">The Kill Team</td>
                <td class="border"><button name="16" ><?php echo $slot_table[5][1];?></button></td>
                <td class="border"><button name="17" ><?php echo $slot_table[5][2];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
        </table>

        <table class="timeslot_popup" id="date2">
        <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <tr>
                <th class="time">A Witness Out Of The Blue</td>
                <td class="border"><button name="1" ><?php echo $slot_table[1][6];?></button></td>
                <td class="border"><button name="2" ><?php echo $slot_table[1][7];?></button></td>
                <td class="border"><button name="3" ><?php echo $slot_table[1][8];?></button></td>
                <td class="border"><button name="4" ><?php echo $slot_table[1][9];?></button></td>
                <td class="border"><button name="5" ><?php echo $slot_table[1][10];?></button></td>
            </tr>
            <tr>
                <th class="time">Bigil</td>
                <td class="border"><button name="6" ><?php echo $slot_table[2][4];?></button></td>
                <td class="border"><button name="7" ><?php echo $slot_table[2][5];?></button></td>
                <td class="border"><button name="8" ><?php echo $slot_table[2][6];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Maleficient: Mistress Of Evil</td>
                <td class="border"><button name="9" ><?php echo $slot_table[3][5];?></button></td>
                <td class="border"><button name="10" ><?php echo $slot_table[3][6];?></button></td>
                <td class="border"><button name="11" ><?php echo $slot_table[3][7];?></button></td>
                <td class="border"><button name="12" ><?php echo $slot_table[3][8];?></button></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Terminator: Dark Fate</td>
                <td class="border"><button name="13" ><?php echo $slot_table[4][4];?></button></td>
                <td class="border"><button name="14" ><?php echo $slot_table[4][5];?></button></td>
                <td class="border"><button name="15" ><?php echo $slot_table[4][6];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="corner">The Kill Team</td>
                <td class="border"><button name="16" ><?php echo $slot_table[5][3];?></button></td>
                <td class="border"><button name="17" ><?php echo $slot_table[5][4];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
        </table>

        <table class="timeslot_popup" id="date3">
        <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <tr>
                <th class="time">A Witness Out Of The Blue</td>
                <td class="border"><button name="1" ><?php echo $slot_table[1][11];?></button></td>
                <td class="border"><button name="2" ><?php echo $slot_table[1][12];?></button></td>
                <td class="border"><button name="3" ><?php echo $slot_table[1][13];?></button></td>
                <td class="border"><button name="4" ><?php echo $slot_table[1][14];?></button></td>
                <td class="border"><button name="5" ><?php echo $slot_table[1][15];?></button></td>
            </tr>
            <tr>
                <th class="time">Bigil</td>
                <td class="border"><button name="6" ><?php echo $slot_table[2][7];?></button></td>
                <td class="border"><button name="7" ><?php echo $slot_table[2][8];?></button></td>
                <td class="border"><button name="8" ><?php echo $slot_table[2][9];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Maleficient: Mistress Of Evil</td>
                <td class="border"><button name="9" ><?php echo $slot_table[3][9];?></button></td>
                <td class="border"><button name="10" ><?php echo $slot_table[3][10];?></button></td>
                <td class="border"><button name="11" ><?php echo $slot_table[3][11];?></button></td>
                <td class="border"><button name="12" ><?php echo $slot_table[3][12];?></button></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Terminator: Dark Fate</td>
                <td class="border"><button name="13" ><?php echo $slot_table[4][7];?></button></td>
                <td class="border"><button name="14" ><?php echo $slot_table[4][8];?></button></td>
                <td class="border"><button name="15" ><?php echo $slot_table[4][9];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="corner">The Kill Team</td>
                <td class="border"><button name="16" ><?php echo $slot_table[5][5];?></button></td>
                <td class="border"><button name="17" ><?php echo $slot_table[5][6];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
        </table>

        <table class="timeslot_popup" id="date4">
        <tr>
                <th class="header">THEATER</th>
                <th class="header" colspan="5">TIMING</th>
            </tr>
            <tr>
                <th class="time">A Witness Out Of The Blue</td>
                <td class="border"><button name="1" ><?php echo $slot_table[1][16];?></button></td>
                <td class="border"><button name="2" ><?php echo $slot_table[1][17];?></button></td>
                <td class="border"><button name="3" ><?php echo $slot_table[1][18];?></button></td>
                <td class="border"><button name="4" ><?php echo $slot_table[1][19];?></button></td>
                <td class="border"><button name="5" ><?php echo $slot_table[1][20];?></button></td>
            </tr>
            <tr>
                <th class="time">Bigil</td>
                <td class="border"><button name="6" ><?php echo $slot_table[2][10];?></button></td>
                <td class="border"><button name="7" ><?php echo $slot_table[2][11];?></button></td>
                <td class="border"><button name="8" ><?php echo $slot_table[2][12];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Maleficient: Mistress Of Evil</td>
                <td class="border"><button name="9" ><?php echo $slot_table[3][13];?></button></td>
                <td class="border"><button name="10" ><?php echo $slot_table[3][14];?></button></td>
                <td class="border"><button name="11" ><?php echo $slot_table[3][15];?></button></td>
                <td class="border"><button name="12" ><?php echo $slot_table[3][16];?></button></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="time">Terminator: Dark Fate</td>
                <td class="border"><button name="13" ><?php echo $slot_table[4][10];?></button></td>
                <td class="border"><button name="14" ><?php echo $slot_table[4][11];?></button></td>
                <td class="border"><button name="15" ><?php echo $slot_table[4][12];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
            <tr>
                <th class="corner">The Kill Team</td>
                <td class="border"><button name="16" ><?php echo $slot_table[5][7];?></button></td>
                <td class="border"><button name="17" ><?php echo $slot_table[5][8];?></button></td>
                <td class="border"></td>
                <td class="border"></td>
                <td class="border"></td>
            </tr>
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


