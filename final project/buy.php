<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy Ticket</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    if (isset($_POST['btn0'])) {
        $dateid = "11-09";
    } else if (isset($_POST['btn1'])) {
        $dateid = "11-10";
    } else if (isset($_POST['btn2'])) {
        $dateid = "11-11";
    } else if (isset($_POST['btn3'])) {
        $dateid = "11-12";
    }

    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');

    $query = "SELECT theaterid AS tid FROM theater WHERE activate = 1;";
    $result = $db->query($query);
    $theater = $result->fetch_assoc();

    for ($i=1; $i<=17; $i++) {
        $name = "" + $i;
        if (isset($_POST[$name])){
            $slot = $i;
            if ($i<=5) $movieid = ($theater['tid']-1)*5 + 1;
            else if ($i<=8) $movieid = ($theater['tid']-1)*5 + 2;
            else if ($i<=12) $movieid = ($theater['tid']-1)*5 + 3;
            else if ($i<=15) $movieid = ($theater['tid']-1)*5 + 4;
            else $movieid = ($theater['tid']-1)*5 + 5;
        }
    }
    $slotid = ($dateid-1)*51 + ($theater['tid']-1)*17 + $slot;

    for ($i=1; $i<=204; $i++) {
        $name = "m" + $i;
        if (isset($_POST[$name])) $slotid = $i;
    }

    $query = "SELECT slot FROM theaterslot AS slt WHERE slotid = ".$slotid.";";
    $result = $db->query($query);
    $time_slot = $result->fetch_assoc();

    $query = "SELECT seat FROM theaterslot AS vacancy WHERE slotid = ".$slotid.";";
    $result = $db->query($query);
    $seatplan = $result->fetch_assoc();

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
                <tr>
                    <td name="seat1" id="seat1" <?php if ($seatplan[1] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(1); return false;"></td>
                    <td name="seat1-1" id="seat1-1" <?php if ($seatplan[1] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(1); return false;"></td>
                    <td name="seat2" id="seat2" <?php if ($seatplan[2] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(2); return false;"></td>
                    <td name="seat2-1" id="seat2-1" <?php if ($seatplan[2] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(2); return false;"></td>
                    <td name="seat3" id="seat3" <?php if ($seatplan[3] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(3); return false;"></td>
                    <td name="seat3-1" id="seat3-1" <?php if ($seatplan[3] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(3); return false;"></td>
                    <td name="seat4" id="seat4" <?php if ($seatplan[4] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(4); return false;"></td>
                    <td name="seat4-1" id="seat4-1" <?php if ($seatplan[4] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(4); return false;"></td>
                    <td></td>
                    <td name="seat5" id="seat5" <?php if ($seatplan[5] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(5); return false;"></td>
                    <td name="seat5-1" id="seat5-1" <?php if ($seatplan[5] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(5); return false;"></td>
                    <td name="seat6" id="seat6" <?php if ($seatplan[6] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(6); return false;"></td>
                    <td name="seat6-1" id="seat6-1" <?php if ($seatplan[6] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(6); return false;"></td>
                    <td name="seat7" id="seat7" <?php if ($seatplan[7] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(7); return false;"></td>
                    <td name="seat7-1" id="seat7-1" <?php if ($seatplan[7] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(7); return false;"></td>
                    <td name="seat8" id="seat8" <?php if ($seatplan[8] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(8); return false;"></td>
                    <td name="seat8-1" id="seat8-1" <?php if ($seatplan[8] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(8); return false;"></td>
                    <td name="seat9" id="seat9" <?php if ($seatplan[9] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(9); return false;"></td>
                    <td name="seat9-1" id="seat9-1" <?php if ($seatplan[9] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(9); return false;"></td>
                    <td name="seat10" id="seat10" <?php if ($seatplan[10] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(10); return false;"></td>
                    <td name="seat10-1" id="seat10-1" <?php if ($seatplan[10] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(10); return false;"></td>
                </tr>
                <tr>
                    <td name="seat11" id="seat11" <?php if ($seatplan[11] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(11); return false;"></td>
                    <td name="seat11-1" id="seat11-1" <?php if ($seatplan[11] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(11); return false;"></td>
                    <td name="seat12" id="seat12" <?php if ($seatplan[12] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(12); return false;"></td>
                    <td name="seat12-1" id="seat12-1" <?php if ($seatplan[12] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(12); return false;"></td>
                    <td name="seat13" id="seat13" <?php if ($seatplan[13] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(13); return false;"></td>
                    <td name="seat13-1" id="seat13-1" <?php if ($seatplan[13] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(13); return false;"></td>
                    <td name="seat14" id="seat14" <?php if ($seatplan[14] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(14); return false;"></td>
                    <td name="seat14-1" id="seat14-1" <?php if ($seatplan[14] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(14); return false;"></td>
                    <td></td>
                    <td name="seat15" id="seat15" <?php if ($seatplan[15] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(15); return false;"></td>
                    <td name="seat15-1" id="seat15-1" <?php if ($seatplan[15] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(15); return false;"></td>
                    <td name="seat16" id="seat16" <?php if ($seatplan[16] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(16); return false;"></td>
                    <td name="seat16-1" id="seat16-1" <?php if ($seatplan[16] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(16); return false;"></td>
                    <td name="seat17" id="seat17" <?php if ($seatplan[17] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(17); return false;"></td>
                    <td name="seat17-1" id="seat17-1" <?php if ($seatplan[17] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(17); return false;"></td>
                    <td name="seat18" id="seat18" <?php if ($seatplan[18] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(18); return false;"></td>
                    <td name="seat18-1" id="seat18-1" <?php if ($seatplan[18] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(18); return false;"></td>
                    <td name="seat19" id="seat19" <?php if ($seatplan[19] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(19); return false;"></td>
                    <td name="seat19-1" id="seat19-1" <?php if ($seatplan[19] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(19); return false;"></td>
                    <td name="seat20" id="seat20" <?php if ($seatplan[20] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(20); return false;"></td>
                    <td name="seat20-1" id="seat20-1" <?php if ($seatplan[20] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(20); return false;"></td>
                </tr>
                <tr>
                    <td name="seat21" id="seat21" <?php if ($seatplan[21] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(21); return false;"></td>
                    <td name="seat21-1" id="seat21-1" <?php if ($seatplan[21] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(21); return false;"></td>
                    <td name="seat22" id="seat22" <?php if ($seatplan[22] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(22); return false;"></td>
                    <td name="seat22-1" id="seat22-1" <?php if ($seatplan[22] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(22); return false;"></td>
                    <td name="seat23" id="seat23" <?php if ($seatplan[23] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(23); return false;"></td>
                    <td name="seat23-1" id="seat23-1" <?php if ($seatplan[23] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(23); return false;"></td>
                    <td name="seat24" id="seat24" <?php if ($seatplan[24] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(24); return false;"></td>
                    <td name="seat24-1" id="seat24-1" <?php if ($seatplan[24] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(24); return false;"></td>
                    <td></td>
                    <td name="seat25" id="seat25" <?php if ($seatplan[25] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(25); return false;"></td>
                    <td name="seat25-1" id="seat25-1" <?php if ($seatplan[25] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(25); return false;"></td>
                    <td name="seat26" id="seat26" <?php if ($seatplan[26] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(26); return false;"></td>
                    <td name="seat26-1" id="seat26-1" <?php if ($seatplan[26] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(26); return false;"></td>
                    <td name="seat27" id="seat27" <?php if ($seatplan[27] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(27); return false;"></td>
                    <td name="seat27-1" id="seat27-1" <?php if ($seatplan[27] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(27); return false;"></td>
                    <td name="seat28" id="seat28" <?php if ($seatplan[28] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(28); return false;"></td>
                    <td name="seat28-1" id="seat28-1" <?php if ($seatplan[28] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(28); return false;"></td>
                    <td name="seat29" id="seat29" <?php if ($seatplan[29] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(29); return false;"></td>
                    <td name="seat29-1" id="seat29-1" <?php if ($seatplan[29] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(29); return false;"></td>
                    <td name="seat30" id="seat30" <?php if ($seatplan[30] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(30); return false;"></td>
                    <td name="seat30-1" id="seat30-1" <?php if ($seatplan[30] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(30); return false;"></td>
                </tr>
                <tr>
                    <td name="seat31" id="seat31" <?php if ($seatplan[31] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(31); return false;"></td>
                    <td name="seat31-1" id="seat31-1" <?php if ($seatplan[31] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(41); return false;"></td>
                    <td name="seat32" id="seat32" <?php if ($seatplan[32] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(32); return false;"></td>
                    <td name="seat32-1" id="seat32-1" <?php if ($seatplan[32] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(42); return false;"></td>
                    <td name="seat33" id="seat33" <?php if ($seatplan[33] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(33); return false;"></td>
                    <td name="seat33-1" id="seat33-1" <?php if ($seatplan[33] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(43); return false;"></td>
                    <td name="seat34" id="seat34" <?php if ($seatplan[34] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(34); return false;"></td>
                    <td name="seat34-1" id="seat34-1" <?php if ($seatplan[34] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(44); return false;"></td>
                    <td></td>
                    <td name="seat35" id="seat35" <?php if ($seatplan[35] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(35); return false;"></td>
                    <td name="seat35-1" id="seat35-1" <?php if ($seatplan[35] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(45); return false;"></td>
                    <td name="seat36" id="seat36" <?php if ($seatplan[36] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(36); return false;"></td>
                    <td name="seat36-1" id="seat36-1" <?php if ($seatplan[36] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(46); return false;"></td>
                    <td name="seat37" id="seat37" <?php if ($seatplan[37] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(37); return false;"></td>
                    <td name="seat37-1" id="seat37-1" <?php if ($seatplan[37] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(47); return false;"></td>
                    <td name="seat38" id="seat38" <?php if ($seatplan[38] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(38); return false;"></td>
                    <td name="seat38-1" id="seat38-1" <?php if ($seatplan[38] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(48); return false;"></td>
                    <td name="seat39" id="seat39" <?php if ($seatplan[39] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(39); return false;"></td>
                    <td name="seat39-1" id="seat39-1" <?php if ($seatplan[39] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(49); return false;"></td>
                    <td name="seat40" id="seat40" <?php if ($seatplan[40] == '1') echo 'class="hide"'; ?>><input type="image" src="seat.png" onclick="bookseat(40); return false;"></td>
                    <td name="seat40-1" id="seat40-1" <?php if ($seatplan[40] == '0') echo 'class="hide"'; ?>><input type="image" src="seat-selected.png" onclick="bookseat(50); return false;"></td>
                </tr>
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