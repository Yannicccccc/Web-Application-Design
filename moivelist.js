//movie list tab switching
function showForm(num){
  document.getElementById("showing").style.display = "none";
  document.getElementById("coming").style.display = "none";
  var btn0 = document.getElementById("btn0");
  var btn1 = document.getElementById("btn1");

  if (num==0) {
      document.getElementById("showing").style.display = "block";
      btn0.className = "topnav active";
      btn1.className = "topnav";
  }    
  if (num==1) {
      document.getElementById("coming").style.display = "block";
      btn0.className = "topnav";
      btn1.className = "topnav active";
  }
}

//index.html functions
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