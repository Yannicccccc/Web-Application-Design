<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy Ticket</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    if (isset($_POST['buy1'])) {
        $movieid = 1;
    } else if (isset($_POST['buy2'])) {
        $movieid = 2;
    } else if (isset($_POST['buy3'])) {
        $movieid = 3;
    } else if (isset($_POST['buy4'])) {
        $movieid = 4;
    } else{
        $movieid = 5;
    }

    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    if (mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    $query = "SELECT* FROM movie WHERE movieid=" .$movieid. ";";
    $result = $db->query($query);
    $data = $result->fetch_assoc();

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
                <td><?php echo date("Y-M-D");?></td>
            </tr>
            <tr>
                <td>time slot</td>
            </tr>
            <tr>
                <td>Screening Hall</td>
            </tr>
        </table>
        
        <div>
            <form method="POST" action="show_post.php">
            <img class="display" src="Screen.png"/>
            <table class="hall" align="center">
                <tr>
                    <td id="seat1"><input type="image" src="seat.png" onclick="bookseat(1); return false;"></td>
                    <td id="seat1-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(1); return false;"></td>
                    <td id="seat2"><input type="image" src="seat.png" onclick="bookseat(2); return false;"></td>
                    <td id="seat2-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(2); return false;"></td>
                    <td id="seat3"><input type="image" src="seat.png" onclick="bookseat(3); return false;"></td>
                    <td id="seat3-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(3); return false;"></td>
                    <td id="seat4"><input type="image" src="seat.png" onclick="bookseat(4); return false;"></td>
                    <td id="seat4-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(4); return false;"></td>
                    <td></td>
                    <td id="seat5"><input type="image" src="seat.png" onclick="bookseat(5); return false;"></td>
                    <td id="seat5-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(5); return false;"></td>
                    <td id="seat6"><input type="image" src="seat.png" onclick="bookseat(6); return false;"></td>
                    <td id="seat6-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(6); return false;"></td>
                    <td id="seat7"><input type="image" src="seat.png" onclick="bookseat(7); return false;"></td>
                    <td id="seat7-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(7); return false;"></td>
                    <td id="seat8"><input type="image" src="seat.png" onclick="bookseat(8); return false;"></td>
                    <td id="seat8-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(8); return false;"></td>
                    <td id="seat9"><input type="image" src="seat.png" onclick="bookseat(9); return false;"></td>
                    <td id="seat9-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(9); return false;"></td>
                    <td id="seat10"><input type="image" src="seat.png" onclick="bookseat(10); return false;"></td>
                    <td id="seat10-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(10); return false;"></td>
                </tr>
                <tr>
                    <td id="seat11"><input type="image" src="seat.png" onclick="bookseat(11); return false;"></td>
                    <td id="seat11-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(11); return false;"></td>
                    <td id="seat12"><input type="image" src="seat.png" onclick="bookseat(12); return false;"></td>
                    <td id="seat12-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(12); return false;"></td>
                    <td id="seat13"><input type="image" src="seat.png" onclick="bookseat(13); return false;"></td>
                    <td id="seat13-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(13); return false;"></td>
                    <td id="seat14"><input type="image" src="seat.png" onclick="bookseat(14); return false;"></td>
                    <td id="seat14-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(14); return false;"></td>
                    <td></td>
                    <td id="seat15"><input type="image" src="seat.png" onclick="bookseat(15); return false;"></td>
                    <td id="seat15-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(15); return false;"></td>
                    <td id="seat16"><input type="image" src="seat.png" onclick="bookseat(16); return false;"></td>
                    <td id="seat16-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(16); return false;"></td>
                    <td id="seat17"><input type="image" src="seat.png" onclick="bookseat(17); return false;"></td>
                    <td id="seat17-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(17); return false;"></td>
                    <td id="seat18"><input type="image" src="seat.png" onclick="bookseat(18); return false;"></td>
                    <td id="seat18-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(18); return false;"></td>
                    <td id="seat19"><input type="image" src="seat.png" onclick="bookseat(19); return false;"></td>
                    <td id="seat19-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(19); return false;"></td>
                    <td id="seat20"><input type="image" src="seat.png" onclick="bookseat(20); return false;"></td>
                    <td id="seat20-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(20); return false;"></td>
                </tr>
                <tr>
                    <td id="seat21"><input type="image" src="seat.png" onclick="bookseat(21); return false;"></td>
                    <td id="seat21-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(21); return false;"></td>
                    <td id="seat22"><input type="image" src="seat.png" onclick="bookseat(22); return false;"></td>
                    <td id="seat22-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(22); return false;"></td>
                    <td id="seat23"><input type="image" src="seat.png" onclick="bookseat(23); return false;"></td>
                    <td id="seat23-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(23); return false;"></td>
                    <td id="seat24"><input type="image" src="seat.png" onclick="bookseat(24); return false;"></td>
                    <td id="seat24-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(24); return false;"></td>
                    <td></td>
                    <td id="seat25"><input type="image" src="seat.png" onclick="bookseat(25); return false;"></td>
                    <td id="seat25-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(25); return false;"></td>
                    <td id="seat26"><input type="image" src="seat.png" onclick="bookseat(26); return false;"></td>
                    <td id="seat26-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(26); return false;"></td>
                    <td id="seat27"><input type="image" src="seat.png" onclick="bookseat(27); return false;"></td>
                    <td id="seat27-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(27); return false;"></td>
                    <td id="seat28"><input type="image" src="seat.png" onclick="bookseat(28); return false;"></td>
                    <td id="seat28-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(28); return false;"></td>
                    <td id="seat29"><input type="image" src="seat.png" onclick="bookseat(29); return false;"></td>
                    <td id="seat29-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(29); return false;"></td>
                    <td id="seat30"><input type="image" src="seat.png" onclick="bookseat(30); return false;"></td>
                    <td id="seat30-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(30); return false;"></td>
                </tr>
                <tr>
                    <td id="seat41"><input type="image" src="seat.png" onclick="bookseat(41); return false;"></td>
                    <td id="seat41-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(41); return false;"></td>
                    <td id="seat42"><input type="image" src="seat.png" onclick="bookseat(42); return false;"></td>
                    <td id="seat42-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(42); return false;"></td>
                    <td id="seat43"><input type="image" src="seat.png" onclick="bookseat(43); return false;"></td>
                    <td id="seat43-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(43); return false;"></td>
                    <td id="seat44"><input type="image" src="seat.png" onclick="bookseat(44); return false;"></td>
                    <td id="seat44-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(44); return false;"></td>
                    <td></td>
                    <td id="seat45"><input type="image" src="seat.png" onclick="bookseat(45); return false;"></td>
                    <td id="seat45-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(45); return false;"></td>
                    <td id="seat46"><input type="image" src="seat.png" onclick="bookseat(46); return false;"></td>
                    <td id="seat46-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(46); return false;"></td>
                    <td id="seat47"><input type="image" src="seat.png" onclick="bookseat(47); return false;"></td>
                    <td id="seat47-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(47); return false;"></td>
                    <td id="seat48"><input type="image" src="seat.png" onclick="bookseat(48); return false;"></td>
                    <td id="seat48-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(48); return false;"></td>
                    <td id="seat49"><input type="image" src="seat.png" onclick="bookseat(49); return false;"></td>
                    <td id="seat49-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(49); return false;"></td>
                    <td id="seat50"><input type="image" src="seat.png" onclick="bookseat(50); return false;"></td>
                    <td id="seat50-1" class="hide"><input type="image" src="seat-selected.png" onclick="bookseat(50); return false;"></td>
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
                    <td><input type="text" id="seatnum" value="0" size="4" readonly></td>
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