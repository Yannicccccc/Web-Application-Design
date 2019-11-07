//filter
function sort(){
  if (document.getElementById("none").selected == true) {
      document.getElementById("m1").style.display = "block";
      document.getElementById("m2").style.display = "block";  
      document.getElementById("m3").style.display = "block";
      document.getElementById("m4").style.display = "block";  
      document.getElementById("m5").style.display = "block"; 
  }
  if (document.getElementById("action").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "block";  
      document.getElementById("m3").style.display = "none";
      document.getElementById("m4").style.display = "block";  
      document.getElementById("m5").style.display = "block"; 
  }
  if (document.getElementById("adventure").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "none";  
      document.getElementById("m3").style.display = "block";
      document.getElementById("m4").style.display = "block";  
      document.getElementById("m5").style.display = "none";  
  }
  if (document.getElementById("crime").selected == true) {
      document.getElementById("m1").style.display = "block";
      document.getElementById("m2").style.display = "none";
      document.getElementById("m3").style.display = "none"; 
      document.getElementById("m4").style.display = "none";
      document.getElementById("m5").style.display = "none";   
  }
  if (document.getElementById("drama").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "none";
      document.getElementById("m3").style.display = "none"; 
      document.getElementById("m4").style.display = "none";
      document.getElementById("m5").style.display = "block";   
  }
  if (document.getElementById("family").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "none";
      document.getElementById("m3").style.display = "block"; 
      document.getElementById("m4").style.display = "none";
      document.getElementById("m5").style.display = "none";   
  }
  if (document.getElementById("fantasy").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "none";
      document.getElementById("m3").style.display = "block"; 
      document.getElementById("m4").style.display = "none";
      document.getElementById("m5").style.display = "none";   
  }
  if (document.getElementById("sport").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "block";
      document.getElementById("m3").style.display = "none"; 
      document.getElementById("m4").style.display = "none";
      document.getElementById("m5").style.display = "none";   
  }
  if (document.getElementById("thriller").selected == true) {
      document.getElementById("m1").style.display = "none";
      document.getElementById("m2").style.display = "none";
      document.getElementById("m3").style.display = "none"; 
      document.getElementById("m4").style.display = "none";
      document.getElementById("m5").style.display = "block";   
  }
}


//movie list tab switching
function showForm(num){
    document.getElementById("showing").style.display = "none";
    document.getElementById("coming").style.display = "none";
    var btn0 = document.getElementById("btn0");
    var btn1 = document.getElementById("btn1");

    if (num==0) {
        document.getElementById("filter").style.display = "block";
        document.getElementById("showing").style.display = "block";
        btn0.className = "topnav active";
        btn1.className = "topnav";
    }    
    if (num==1) {
        document.getElementById("filter").style.display = "none";
        document.getElementById("coming").style.display = "block";
        btn0.className = "topnav";
        btn1.className = "topnav active";
    }
}

//index.php functions
//For index slideshow
var slideIndex = 1;

var myTimer;

var slideshowContainer;

window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
    slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
    slideshowContainer.addEventListener('mouseenter', pause)
    slideshowContainer.addEventListener('mouseleave', resume)
})

function plusSlides(n){
  clearInterval(myTimer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
   showSlides(slideIndex += 1); 
  } 
  if (n === -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  }
}

function currentSlide(n){
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

pause = () => {
  clearInterval(myTimer);
}

resume = () =>{
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(slideIndex)}, 4000);
}

//for switching between tabs
function showForm1(num){
  document.getElementById("showing").style.display = "none";
  document.getElementById("coming").style.display = "none";
  document.getElementById("top").style.display = "none";
  var btn0 = document.getElementById("btn0");
  var btn1 = document.getElementById("btn1");
  var btn2 = document.getElementById("btn2");

  if (num==0) {
      document.getElementById("showing").style.display = "block";
      btn0.className = "topnav active";
      btn1.className = "topnav";
      btn2.className = "topnav";
  }    
  if (num==1) {
      document.getElementById("coming").style.display = "block";
      btn0.className = "topnav";
      btn1.className = "topnav active";
      btn2.className = "topnav";
  }
  if (num==2) {
    document.getElementById("top").style.display = "block";
    btn0.className = "topnav";
    btn1.className = "topnav";
    btn2.className = "topnav active";
}
}

//for switching between tabs on promo
function showForm2(num){
  document.getElementById("showing").style.display = "none";
  document.getElementById("coming").style.display = "none";
  document.getElementById("top").style.display = "none";
  document.getElementById("extra").style.display = "none";
  var btn0 = document.getElementById("btn0");
  var btn1 = document.getElementById("btn1");
  var btn2 = document.getElementById("btn2");
  var btn3 = document.getElementById("btn3");

  if (num==0) {
      document.getElementById("showing").style.display = "block";
      btn0.className = "topnav active";
      btn1.className = "topnav";
      btn2.className = "topnav";
      btn3.className = "topnav";
  }    
  if (num==1) {
      document.getElementById("coming").style.display = "block";
      btn0.className = "topnav";
      btn1.className = "topnav active";
      btn2.className = "topnav";
      btn3.className = "topnav";
  }
  if (num==2) {
    document.getElementById("top").style.display = "block";
    btn0.className = "topnav";
    btn1.className = "topnav";
    btn2.className = "topnav active";
    btn3.className = "topnav";
  }
  if (num==3) {
    document.getElementById("extra").style.display = "block";
    btn0.className = "topnav";
    btn1.className = "topnav";
    btn2.className = "topnav";
    btn3.className = "topnav active";
  }  
}

//for switching between login and signup
function openForm(num) {
  document.getElementById("login").style.display = "none";
  document.getElementById("signup").style.display = "none";
  var btn0 = document.getElementById("btn0");
  var btn1 = document.getElementById("btn1");
  if (num==0){
    document.getElementById("login").style.display = "block";
    btn0.className = "tablinks active";
    btn1.className = "tablinks";
  }
  if (num==1){
    document.getElementById("signup").style.display = "block";
    btn0.className = "tablinks";
    btn1.className = "tablinks active";
  }
}

//for registration to confim both passwords are the same
function confirmpass() {
  init_pass = document.getElementById("reg_pass");
  con_pass = document.getElementById("reg_pass_confirm");
  if (init_pass.value == con_pass.value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'password matching';
  } 
  else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'password not matching';
      }
}

//to prevent form from submitting if the passwords do not match (registration)
function registercheck() {
  check = document.getElementById('message').innerHTML;
  if (check == 'password not matching'){
    alert("Passwords do not match.");
    event.preventDefault();
  }
  else {
    console.log("passed")
  }
}

//to calculate member level
function calcmem(){
  var lvl = 0;
  
  if (mypoints >= 0 && mypoints <= 9){
    lvl = 1;
  }
  else if (mypoints >= 10 && mypoints <= 19){
    lvl = 2;
  }
  else if (mypoints >= 20 && mypoints <= 29){
    lvl = 3;
  }
  else if (mypoints >= 30 && mypoints <= 39){
    lvl = 4;
  }
  else if (mypoints >= 40 && mypoints <= 49){
    lvl = 5;
  }
  else if (mypoints >= 50){
    lvl = 6;
  }
  else {
    lvl = "none";
  }
  document.getElementById('level').innerHTML = lvl;
}

//to calculate number of points to next level
function calcnext(){
  var pointsreach = 0;

  if (mypoints<10){
    pointsreach = 10 - mypoints;
  }
  else if (mypoints<20 && mypoints>=10){
    pointsreach = 20 - mypoints;
  }
  else if (mypoints<30 && mypoints>=20){
    pointsreach = 30 - mypoints;
  }
  else if (mypoints<40 && mypoints>=30){
    pointsreach = 40 - mypoints;
  }
  else if (mypoints<50 && mypoints>=40){
    pointsreach = 50 - mypoints;
  }
  else if (mypoints >=50){
    pointsreach = "You are at the highest level possible.";
  }
  else {
    pointsreach = "Error.";
  }
  document.getElementById('nextlevel').innerHTML = pointsreach;
}

//to show the privilages based on number of points
function showpriv(){
  var priv = "";
  var lvl1 = "One free movie on your birthday month.";
  var lvl2 = "One free drink per movie on your birthday month.";
  var lvl3 = "One free sides per movie on your birthday month.";
  var lvl4 = "One free drink and sides per movie.";
  var lvl5 = "One free ticket every month.";
  var lvl6 = "One free ticket every month, with one free drink and sides per movie.";

  if (mypoints >= 0 && mypoints <= 9){
    priv = lvl1;
  }
  else if (mypoints >= 10 && mypoints <= 19){
    priv = lvl2;
  }
  else if (mypoints >= 20 && mypoints <= 29){
    priv = lvl3;
  }
  else if (mypoints >= 30 && mypoints <= 39){
    priv = lvl4;
  }
  else if (mypoints >= 40 && mypoints <= 49){
    priv = lvl5;
  }
  else if (mypoints >= 50){
    priv = lvl6;
  }
  else {
    priv = "none";
  }
  document.getElementById('privi').innerHTML = priv;
}