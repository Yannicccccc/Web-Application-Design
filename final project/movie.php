<!DOCTYPE html>
<html lang="en">
<head>
<title>Movie</title>
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
                <button onclick="window.location.href='movie.php'" class="active">Movie</button>
                <button onclick="window.location.href='theater.php'">Theater</button>
                <button onclick="window.location.href='promotion.php'">Promotion</button>
                <button onclick="window.location.href='corporate.php'">Corporate Events</button>
            </nav>

            <h1>Movie</h1>
            <nav class="topnav">
                <button onclick="showForm(0)" class="topnav active" id="btn0">Now Showing</button>
                <button onclick="showForm(1)" class="topnav" id="btn1">Coming Soon</button>
            </nav>

            <div id="filter" class="sort">
                <p>Sort by:
                <select id="mySelect">
                <option id="none" value="none">none</option>
                <optgroup id="genre" label="Genre">
                    <option id="action" value="action">Action</option>
                    <option id="adventure" value="adventure">Adventure</option>
                    <option id="crime" value="crime">Crime</option>
                    <option id="drama" value="drama">Drama</option>
                    <option id="family" value="family">Family</option>
                    <option id="fantasy" value="fantasy">Fantasy</option>
                    <option id="sport" value="sport">Sport</option>
                    <option id="thriller" value="thriller">Thriller</option>
                </optgroup>
                <optgroup id="rating" label="Rating">
                    <option id="PG" value="PG">PG</option>
                    <option id="PG-13" value="PG-13">PG-13</option>
                    <option id="NC-16" value="NC-16">NC-16</option>
                </optgroup>
                </select>
                <button onclick="sort()">Search</button>
                <p id="demo"></p>
                </p>
            </div>
        </div>  

        <div class="movie_active" id="showing">
            <table>
                <tbody id="m1">
                <tr>
                    <td rowspan="4"><img src="Poster-AWitnessOutOfTheBlue.jpg"/></td>
                    <td>Title</td>
                    <td>A Witness Out Of The Blue</td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>4.5</td>
                </tr>
                <tr>
                    <td> </td>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                    <td rowspan="2">Detective Frank Lam (Louis Cheung) arrives at the scene with his commanding officer Yip Sir (Philip Keung) to find a dead man inside an apartment with a strange noise “Help! Help!” next to its body. Yip Sir is convinced 
                        <input type="submit" name="movie1" value="...more">
                    </td>
                    </form>
                </tr>
                <form method="POST" action="moviedetail.php" class="movie_container">
                <tr>
                    <td><button name="movie1">Buy</button></td>
                </tr>
                </form>
                </tbody>
                <tbody id="m2">
                <tr>
                    <td rowspan="4"><img src="Poster-Bigil.jpg"/></td>
                    <td>Title</td>
                    <td>Bigil</td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>4.2</td>
                </tr>
                <tr>
                    <td> </td>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                    <td rowspan="2">The film revolves around a football coach, who struggles to fulfill the dream of his late friend and seeks out revenge on the death of his best friend. 
                        <input type="submit" name="movie2" value="...more">
                    </td>
                    </form>
                </tr>
                <form method="POST" action="moviedetail.php" class="movie_container">
                <tr>
                    <td><button name="movie2">Buy</button></td>
                </tr>
                </form>
                </tbody>
                <tbody id="m3">
                <tr>
                    <td rowspan="4"><img src="Poster-MaleficentMistressOfEvil-V2.jpg"/></td>
                    <td>Title</td>
                    <td>Maleficient: Mistress Of Evil</td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>4.8</td>
                </tr>
                <tr>
                    <td> </td>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                    <td rowspan="2">A fantasy adventure that picks up several years after "Maleficent," in which audiences learned of the events that hardened the heart of Disney's most notorious villain and drove her to curse a baby Princess Aurora,  
                        <input type="submit" name="movie3" value="...more">
                    </td>
                    </form>
                </tr>
                <form method="POST" action="moviedetail.php" class="movie_container">
                <tr>
                    <td><button name="movie3">Buy</button></td>
                </tr>
                </form>
                </tbody>
                <tbody id="m4">
                <tr>
                    <td rowspan="4"><img src="Poster-TerminatorDarkFate-V2.jpg"/></td>
                    <td>Title</td>
                    <td>Terminator: Dark Fate</td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>4.5</td>
                </tr>
                <tr>
                    <td> </td>
                    <td rowspan="2">More than two decades after the events of Terminator 2: Judgment Day, Sarah Connor sets out to protect a young woman named Dani Ramos and her friends as a liquid metal Terminator, sent from the future   
                        <input type="submit" name="movie4" value="...more">
                    </td>
                </tr>
                <form method="POST" action="moviedetail.php" class="movie_container">
                <tr>
                    <td><button name="movie4">Buy</button></td>
                </tr>
                </form>
                </tbody>
                <tbody id="m5">
                <tr>
                    <td rowspan="4"><img src="Poster-TheKillTeam.jpg"/></td>
                    <td>Title</td>
                    <td>The Kill Team</td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>4.5</td>
                </tr>
                <tr>
                    <td> </td>
                    <form method="POST" action="moviedetail.php" class="movie_container">
                    <td rowspan="2">2017 Academy Award nominated director Dan Krauss adapts his acclaimed documentary THE KILL TEAM into a taut, provocative thriller reminiscent of such classics as THREE DAYS OF THE CONDOR, THE CONVERSATION, 
                        <input type="submit" name="movie5" value="...more">
                    </td>
                    </form>
                </tr>
                <form method="POST" action="moviedetail.php" class="movie_container">
                <tr>
                    <td><button name="movie5">Buy</button></td>
                </tr> 
                </form>
                </tbody>   
            </table>   
        </div>
            
        <div class="movie_popup" id="coming">
            <form method="POST" action="show_get.php" class="movie_container">
            <table>
                <tr>
                    <td rowspan="4"><img src="Poster-Countdown.jpg"/></td>
                    <td>Title</td>
                    <td>Countdown</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>2h 8mins</td>
                </tr>
                <tr>
                    <td> </td>
                    <td rowspan="2">When a nurse downloads an app that claims to predict the moment a person will die, it tells her she only has three days to live. With the clock ticking and a figure haunting her, she must find a way to save her life before ...
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="4"><img src="Poster-PainAndGlory.jpg"/></td>
                    <td>Title</td>
                    <td>Pain And Glory</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>2h 8mins</td>
                </tr>
                <tr>
                    <td> </td>
                    <td rowspan="2">PAIN AND GLORY tells of a series of reencounters experienced by Salvador Mallo, a film director in his physical decline. Some of them in the flesh, others remembered: his childhood in the 60s, when he emigrated ...
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="4"><img src="Poster-TheShining.jpg"/></td>
                    <td>Title</td>
                    <td>The Shining</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>2h 8mins</td>
                </tr>
                <tr>
                    <td> </td>
                    <td rowspan="2">All work and no play makes Oscar-winning actor Jack Nicholson’s Jack Torrance - the caretaker of an isolated resort - go way off the deep end, terrorizing his young son and wife.  Jack has come to the elegant, isolated ...  
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
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


