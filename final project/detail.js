function showForm(num){
    document.getElementById("date1").style.display = "none";
    document.getElementById("date2").style.display = "none";
    document.getElementById("date3").style.display = "none";
    document.getElementById("date4").style.display = "none";
    
    var btn0 = document.getElementById("btn0");
    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");

    if (num==0) {
        document.getElementById("date1").style.display = "block";
        btn0.className = "topnav active";
        btn1.className = "topnav";
        btn2.className = "topnav";
        btn3.className = "topnav";
    }    
    if (num==1) {
        document.getElementById("date2").style.display = "block";
        btn0.className = "topnav";
        btn1.className = "topnav active";
        btn2.className = "topnav";
        btn3.className = "topnav";
    }
    if (num==2) {
        document.getElementById("date3").style.display = "block";
        btn0.className = "topnav";
        btn1.className = "topnav";
        btn2.className = "topnav active";
        btn3.className = "topnav";
    }    
    if (num==3) {
        document.getElementById("date4").style.display = "block";
        btn0.className = "topnav";
        btn1.className = "topnav";
        btn2.className = "topnav";
        btn3.className = "topnav active";
    }
}

function bookseat(num){
    var str = "seat" + num;
    var str1 = "seat" + num + "-1";
    if(document.getElementById(str).className==""){
        document.getElementById(str).className = "hide";
        document.getElementById(str1).className = "";
        document.getElementById("seatnum").value = parseInt(document.getElementById("seatnum").value) + 1;
        document.getElementById("tot").value = "$" + parseInt(document.getElementById("seatnum").value) * 9.5;
    } 
    else {
        document.getElementById(str).className = "";
        document.getElementById(str1).className = "hide";
        document.getElementById("seatnum").value = parseInt(document.getElementById("seatnum").value) - 1;
        document.getElementById("tot").value = "$" + parseInt(document.getElementById("seatnum").value) * 9.5;
    }    
}