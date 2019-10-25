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