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
        <script type = "text/javascript" src = "moivelist.js"></script>
  	</header>
  
  	<div id="content">
        <div>
            <nav class="topnav">
                <button onclick="window.location.href='index.php'">Home</button>
                <button onclick="window.location.href='movie.php'">Movie</button>
                <button onclick="window.location.href='theater.php'">Theater</button>
                <button onclick="window.location.href='promotion.php'" class="active">Promotion</button>
                <button onclick="window.location.href='corporate.php'">Corporate Events</button>
            </nav>

            <br>
            <div class="slideshow">
                <div class="slides">
                    <img src="ad1.jpg">
                </div>
                <div class="slides">
                    <img src="ad2.jpg">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
            </div>
            <br>

            <nav class="topnav">
                <button onclick="showForm2(0)" class="topnav active" id="btn0">All</button>
                <button onclick="showForm2(1)" class="topnav" id="btn1">Current Promotions</button>
                <button onclick="showForm2(2)" class="topnav" id="btn2">Merchandise</button>
                <button onclick="showForm2(3)" class="topnav" id="btn3">F&B</button>
            </nav>
        
        </div>  

        <div class="movie_index1" id="showing">
            <div class="row">
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo1.jpg">
                    <h3>The Show Book</h3>
                    <p>A notebook with irresistible movie rewards! Grab The Show Book now!</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo2.jpg">
                    <h3>Senior Citizens Concession Rate</h3>
                    <p>Senior Citizens enjoy $5 movie tickets Mon- Fri before 6pm.</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo3.jpg">
                    <h3>DBS/POSB Movie Privilege</h3>
                    <p>DBS/ POSB credit/ debit card and Paylah! members enjoy discounted movie tickets.</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo4.jpg">
                    <h3>UnionPay Singapore 1-for-1 Movie Privileges</h3>
                    <p>Enjoy 1-For-1 Shaw Theatres 2D movie tickets and $1 -Off Large Popcorn Combo Set with Singapore Issued UnionPay Cards.</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo5.jpg">
                    <h3>Kids Watch for Free! EVERYDAY!</h3>
                    <p>Buy 2 standard tickets and your kid gets to watch for Free!</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo6.jpg">
                    <h3>UFC Refresh Watermelon Water</h3>
                    <p>Enjoy this UFC Refresh Watermelon Water at all counters.</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo7.jpg">
                    <h3>Häagen-Dazs Frozen Yogurt</h3>
                    <p>Indulge in Häagen-Dazs refreshing frozen yogurt ice cream!</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo8.jpg">
                    <h3>Sweet Treats</h3>
                    <p>White Chocolate Raspberry Cake for $8 nett (usual price: $13)</p>
                </div>
                </div>
            </div>
        </div>
            
        <div class="movie_index2" id="coming">
            <form method="POST" action="show_get.php" class="movie_container">
                <div class="row">
                    <div class="column">
                        <div class="content" id="promo">
                            <img src="promo2.jpg">
                            <h3>Senior Citizens Concession Rate</h3>
                            <p>Senior Citizens enjoy $5 movie tickets Mon- Fri before 6pm.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content" id="promo">
                            <img src="promo3.jpg">
                            <h3>DBS/POSB Movie Privilege</h3>
                            <p>DBS/ POSB credit/ debit card and Paylah! members enjoy discounted movie tickets.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content" id="promo">
                            <img src="promo4.jpg">
                            <h3>UnionPay Singapore 1-for-1 Movie Privileges</h3>
                            <p>Enjoy 1-For-1 Shaw Theatres 2D movie tickets and $1 -Off Large Popcorn Combo Set with Singapore Issued UnionPay Cards.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content" id="promo">
                            <img src="promo5.jpg">
                            <h3>Kids Watch for Free! EVERYDAY!</h3>
                            <p>Buy 2 standard tickets and your kid gets to watch for Free!</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="movie_index3" id="top">
            <form method="POST" action="show_get.php" class="movie_container">
                <div class="row">
                    <div class="column">
                        <div class="content" id="promo">
                            <img src="promo1.jpg">
                            <h3>The Show Book</h3>
                            <p>A notebook with irresistible movie rewards! Grab The Show Book now!</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="movie_index4" id="extra">
            <div class="row">
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo6.jpg">
                    <h3>UFC Refresh Watermelon Water</h3>
                    <p>Enjoy this UFC Refresh Watermelon Water at all counters.</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo7.jpg">
                    <h3>Häagen-Dazs Frozen Yogurt</h3>
                    <p>Indulge in Häagen-Dazs refreshing frozen yogurt ice cream!</p>
                </div>
                </div>
                <div class="column">
                <div class="content" id="promo">
                    <img src="promo8.jpg">
                    <h3>Sweet Treats</h3>
                    <p>White Chocolate Raspberry Cake for $8 nett (usual price: $13)</p>
                </div>
                </div>
            </div>
        </div>
        
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


