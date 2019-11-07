<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy Ticket</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');

    for ($i=1; $i<=204; $i++) {
        $name1 = "m".$i;
        $name2 = "t".$i;
        if (isset($_POST[$name1])) $slotid = $i;
        if (isset($_POST[$name2])) $slotid = $i;
    }

    $query = "SELECT title FROM theatermovie, theaterslot WHERE theatermovie.movieid = theaterslot.movieid AND slotid = ".$slotid.";";
    $result = $db->query($query);
    $movietitle = $result->fetch_assoc();

    $query = "SELECT * FROM movie WHERE title = '".$movietitle['title']."';";
    $result = $db->query($query);
    $data = $result->fetch_assoc();

    $query = "SELECT slot FROM theaterslot AS slt WHERE slotid = ".$slotid.";";
    $result = $db->query($query);
    $time_slot = $result->fetch_assoc();

    $query = "SELECT seat FROM theaterslot AS vacancy WHERE slotid = ".$slotid.";";
    $result = $db->query($query);
    $seatplan = $result->fetch_assoc();
    $vacancy = $seatplan['seat'];

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
  
  	<div id="content">
        <nav class="smallnav">
            <a href="index.html" class="link">HOME</a><a> > </a>
            <a href="movie.html" class="link">MOVIE LISTING</a><a> > </a>
            <a>BOOKING</a>
        </nav>

        <table class="description">
            <tr>
                <td rowspan="5"><img src="<?php echo $data['pic'];?>"/></td>
                <td><strong><?php echo $data['title'];?></strong></td>
            </tr>
            <tr>
                <td><?php echo $data['rate'];?></td>
            </tr>
            <tr>
                <td><?php echo $dateid;?></td>
            </tr>
            <tr>
                <td><?php echo $time_slot['slt'];?></td>
            </tr>
            <tr>
                <td>Screening Hall : 1</td>
            </tr>
        </table>
        
        <div>
            <form method="POST" action="updatevacancy.php">
            <img class="display" src="Screen.png"/>
            <table class="hall" align="center">
            <?php
                for ($i=0; $i<4; $i++){
                    echo '<tr>';
                    for ($j=0; $j<10; $j++){
                        $temp = $i*10 + $j;
                        if ($vacancy[$temp]=='1'){
                           echo '<td id="seat'.$temp.'" class="hide"><input type="image" src="seat.png" name=seat"'.$temp.'" onclick="bookseat('.$temp.'); return false;"></td>';
                           echo '<td id="seat'.$temp.'-1"><input type="image" src="seat-selected.png" name=seat"'.$temp.'" onclick="bookseat('.$temp.'); return false;"></td>'; 
                        }    
                        if ($vacancy[$temp]=='0'){
                            echo '<td id="seat'.$temp.'"><input type="image" src="seat.png" name=seat"'.$temp.'-1" onclick="bookseat('.$temp.'); return false;"></td>'; 
                            echo '<td id="seat'.$temp.'-1" class="hide"><input type="image" src="seat-selected.png" name=seat"'.$temp.'-1" onclick="bookseat('.$temp.'); return false;"></td>'; 
                        }
         
                    }
                    echo '<tr>';
                }
            ?>
            </table>
            <img class="display" src="rule.png"/>

            <div class="checkout">
                <table align="center">
                <tr>
                    <th>seats</th>
                    <th>quantity</th>
                    <th>price</th>
                </tr>
                <tr>
                    <td>regular</td>
                    <td><input type="text" name="seat" id="seatnum" value="0" size="4" readonly></td>
                    <td><input type="text" id="price" value="$9.5" size="8" readonly></td>
                </tr>
                <tfoot>
                <tr>
                    <td></td>
                    <td align="right">Total: </td>
                    <td><input type="text" id="tot" value="$0" size="8" readonly></td>
                </tr>
                </tfoot>
                </table>
            </div>
            <input type="text" name="slotid" value=<?php echo $slotid;?> style="display:none">
            <input class="btn" type="submit" value="Submit">
            </form>
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