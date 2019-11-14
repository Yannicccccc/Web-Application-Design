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
                <button onclick="window.location.href='index.php'" class="active">Home</button>
                <button onclick="window.location.href='movie.php'">Movie</button>
                <button onclick="window.location.href='theater.php'">Theater</button>
                <button onclick="window.location.href='promotion.php'">Promotion</button>
                <button onclick="window.location.href='corporate.php'">Corporate Events</button>
            </nav>

            <br>
            <div class="slideshow">
                <div class="slides">
                    <img src="WidePoster-AWitnessOutOfTheBlue.jpg">
                </div>
                <div class="slides">
                    <img src="WidePoster-Bigil.jpg">
                </div>
                <div class="slides">
                    <img src="WidePoster-MaleficentMistressOfEvil-V2.jpg">
                </div>
                <div class="slides">
                    <img src="WidePoster-TerminatorDarkFate-V2.jpg">
                </div>
                <div class="slides">
                    <img src="WidePoster-TheKillTeam.jpg">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
            <br>

            <nav class="topnav">
                <button onclick="showForm1(0)" class="topnav active" id="btn0">Now Showing</button>
                <button onclick="showForm1(1)" class="topnav" id="btn1">Coming Soon</button>
                <button onclick="showForm1(2)" class="topnav" id="btn2">Top Movies</button>
            </nav>
        
            <form action="moviedetail.php" class="sort" method="POST">
                <p>Select movie:
                <select name="select" id="select" name="select">
                <option value="" disabled selected>Select movie</option>
                <option value="1" name="movie1">A Witness Out Of Blue</option>
                <option value="2" name="movie2">Bigil</option>
                <option value="3" name="movie3">Maleficient: Mistress Of Evil</option>
                <option value="4" name="movie4">Terminator: Dark Fate</option>
                <option value="5" name="movie5">The Kill Team</option>
                </select>
                Select theatre:
                <select>
                    <option value="" disabled selected>Select theatre</option>
                    <option disabled>Theatre 1</option>
                    <option disabled>Theatre 2</option>
                    <option disabled>Theatre 3</option>
                    <option disabled>Theatre 4</option>
                    <option disabled>Theatre 5</option>
                </select>
                Select date:
                <select>
                    <option disabled selected>Select date</option>
                    <option disabled>Sat, 9 Nov 2019</option>
                    <option disabled>Sun, 10 Nov 2019</option>
                    <option disabled>Mon, 11 Nov 2019</option>
                    <option disabled>Tue, 12 Nov 2019</option>
                </select>

                <input type="submit" value="Submit">
                </p>
            </form>
        </div>  

        <div class="movie_index1" id="showing">
            <div class="row">
                <div class="column">
                <div class="content">
                    <img src="Poster-AWitnessOutOfTheBlue.jpg">
                    <h3>A Witness Out Of The Blue</h3>
                    <p>Rating: 4.5</p>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                        <tr>
                            <td><input type="submit" name="movie1" value="Buy Ticket"></input></td>
                        </tr>
                    </form>
                </div>
                </div>
                <div class="column">
                <div class="content">
                    <img src="Poster-Bigil.jpg">
                    <h3>Bigil</h3>
                    <p>Rating: 4.2</p>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                        <tr>
                            <td><input type="submit" name="movie2" value="Buy Ticket"></input></td>
                        </tr>
                    </form>
                </div>
                </div>
                <div class="column">
                <div class="content">
                    <img src="Poster-MaleficentMistressOfEvil-V2.jpg">
                    <h3>Maleficent Mistress Of Evil</h3>
                    <p>Rating: 4.8</p>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                        <tr>
                            <td><input type="submit" name="movie3" value="Buy Ticket"></input></td>
                        </tr>
                    </form>
                </div>
                </div>
                <div class="column">
                <div class="content">
                    <img src="Poster-TerminatorDarkFate-V2.jpg">
                    <h3>Terminator Dark Fate</h3>
                    <p>Rating: 4.5</p>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                        <tr>
                            <td><input type="submit" name="movie4" value="Buy Ticket"></input></td>
                        </tr>
                    </form>
                </div>
                </div>
                <div class="column">
                <div class="content">
                    <img src="Poster-TheKillTeam.jpg">
                    <h3>The Kill Team</h3>
                    <p>Rating: 4.5</p>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                        <tr>
                            <td><input type="submit" name="movie5" value="Buy Ticket"></input></td>
                        </tr>
                    </form>
                </div>
                </div>
            </div>
        </div>
            
        <div class="movie_index2" id="coming">
            <form method="POST" action="show_get.php" class="movie_container">
                <div class="row">
                    <div class="column">
                    <div class="content">
                        <img src="Poster-Countdown.jpg">
                        <h3>Count down</h3>
                        <p>Rating: To be advised</p>
                    </div>
                    </div>
                    <div class="column">
                    <div class="content">
                        <img src="Poster-PainAndGlory.jpg">
                        <h3>Pain And Glory</h3>
                        <p>Rating: To be advised</p>
                    </div>
                    </div>
                    <div class="column">
                    <div class="content">
                        <img src="Poster-TheShining.jpg">
                        <h3>The Shining</h3>
                        <p>Rating: To be advised</p>
                    </div>
                    </div>
                    
                </div>
            </form>
        </div>

        <div class="movie_index3" id="top">
            <form method="POST" action="show_get.php" class="movie_container">
                <div class="row">
                    <div class="column">
                    <div class="content">
                        <img src="Poster-MaleficentMistressOfEvil-V2.jpg">
                        <h3>Maleficent Mistress Of Evil</h3>
                        <p>Rating: 4.8</p>
                        <form method="POST" action="buy.php" class="movie_container">
                            <tr>
                                <td><button name="buy3">Buy Ticket</button></td>
                            </tr>
                        </form>
                    </div>
                    </div>
                    <div class="column">
                    <div class="content">
                        <img src="Poster-TerminatorDarkFate-V2.jpg">
                        <h3>Terminator Dark Fate</h3>
                        <p>Rating: 4.5</p>
                        <form method="POST" action="buy.php" class="movie_container">
                            <tr>
                                <td><button name="buy4">Buy Ticket</button></td>
                            </tr>
                        </form>
                    </div>
                    </div>
                </div>
            </form>
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


