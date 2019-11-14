<!DOCTYPE html>
<html lang="en">
<head>
<title>L.L Cinemas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    if (mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }
    session_start();
    if (isset($_SESSION['valid_user'])){
        $login = "logout";
        $loglink = "logout.php";
    }
    else {
        $login = "login/logout";
        $loglink = "login.html";
    }
?>
</head>

<body>
<div id="wrapper">
    <header>
        <button class="login" onclick="window.location.href='<?= $loglink ?>'"><?= $login ?></button>
        <img src="logo.png" class="logo"/>
        <script type = "text/javascript" src = "moivelist.js"></script>
  	</header>
  
  	<div id="content">
        <div>
            <nav class="topnav">
                <button onclick="window.location.href='index.php'">Home</button>
                <button onclick="window.location.href='movie.php'">Movie</button>
                <button onclick="window.location.href='theater.php'">Theater</button>
                <button onclick="window.location.href='promotion.php'">Promotion</button>
                <button onclick="window.location.href='corporate.php'" class="active">Corporate Events</button>
            </nav>

            <br>
        </div>  

        <ul class="list-inline">
            <li class="event">
                <a>Event Booking</a>
            </li>
        </ul>

        <div>
            <h2>Booking Request Details</h2>
        </div>

        <form method="POST" action="#">
        <div class="event_row">
            <div id="first">
                <p>Event Date* :</p>
                <p>Please indicate the date or month for which you would like to hold your event.</p>
            </div>
            <div id="second">
                <input type="text" class="eventform" placeholder="" onfocus="(this.type='date')" onblur="(this.type='text')"> 
            </div>
            <div id="clear"></div>
        </div>
        
        <div class="event_row">
            <div id="first">
                <p>Event Start Time :</p>
                <p>Please provide us with the time for which you would like to hold your event.</p>
            </div>
            <div id="second">
                <select class="eventform">
                    <option value="0">Select one</option>
                    <option value="1">Before 12pm</option>
                    <option value="2">Between 12pm and 6pm</option>
                    <option value="3">After 6pm</option>
                </select>
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Preferred Cinema* :</p>
            </div>
            <div id="second">
                <select class="eventform">
                    <option value="0">Select one</option>
                    <option value="1">Theatre 1</option>
                    <option value="2">Theatre 2</option>
                    <option value="3">Theatre 3</option>
                </select>
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p></p>
            </div>
            <div id="second">
                <select class="eventform">
                    <option value="0">Select one</option>
                    <option value="1">Theatre 1</option>
                    <option value="2">Theatre 2</option>
                    <option value="3">Theatre 3</option>
                </select>
            </div>
            <div id="clear"></div>
        </div>
        
        <div class="event_row">
            <div id="first">
                <p>Movie Title :</p>
                <p>Please indicate the title if you have a specific movie in mind.</p>
            </div>
            <div id="second">
                <select class="eventform">
                    <option value="0">Select one</option>
                    <option value="1">A Witness Out Of Blue</option>
                    <option value="2">Bigil</option>
                    <option value="3">Maleficient: Mistress Of Evil</option>
                    <option value="4">Terminator: Dark Fate</option>
                    <option value="5">The Kill Team</option>
                </select>
            </div>
            <div id="clear"></div>
        </div>
  
        <div class="event_row">
            <div id="first">
                <p>Number of Guests* :</p>
                <p>Minimum number is 100.</p>
            </div>
            <div id="second">
                <input type="text" class="eventform" placeholder="" onfocus="(this.type='number')" onblur="(this.type='text')" min="100"> 
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Additional Requirements / Comments :</p>
                <p>If you have any special requirements, arrangements or requests you would like us to make during the event, please feel free to let us know.</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div>
            <h2>Contact Details</h2>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Salutations :</p>
            </div>
            <div id="second">
                <select class="eventform">
                    <option value="0">Select one</option>
                    <option value="1" name="Mr.">Mr.</option>
                    <option value="2" name="Mrs.">Mrs.</option>
                    <option value="3" name="Ms.">Ms.</option>
                </select>
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Name :</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Email :</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Contact number :</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Company name :</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Company address :</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Company postal code :</p>
            </div>
            <div id="second">
                <input type="text" class="eventform">
            </div>
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>Our sales representative will contact you soon to assist you with your booking.</p>
            </div>
            
            <div id="clear"></div>
        </div>

        <div class="event_row">
            <div id="first">
                <p>* Denotes mandatory fields.</p>
            </div>
            <div id="second">
                <input type="submit" class="eventsubmit">
                <input type="reset" class="eventsubmit">
            </div>
            <div id="clear"></div>
        </div>        


        </form>
        <br>
	</div>	
</div>
</body>
<br>
<footer>
    <small><i>Copyright &copy; 2019 DG03-F38</i></small>
    <br>
    <small><i><a href="DG03@F38.com">DG03@F38.com</a></i></small>
</footer>	
</html>


