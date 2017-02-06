
function w3_open_nav(x) {
if (document.getElementById("nav_" + x).style.display == "block") {
    document.getElementById("").style.display = "block";
    w3_close_nav(x);
} else {
    w3_close_nav("collection");
    w3_close_nav("projects");
    w3_close_nav("about");
    //   w3_close_nav("testimonials");
    w3_close_nav("luespot_about");
   // w3_close_nav("search");
    document.getElementById("nav_" + x).style.display = "block";
    if (document.getElementById("navbtn_" + x)) {
        document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
        document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
    }
}
}
function w3_close_nav(x) {
document.getElementById("nav_" + x).style.display = "none";
if (document.getElementById("navbtn_" + x)) {
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
}
}

(function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('dt').innerHTML =
    "Date: " + today.toDateString() + " Time: " + h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
})();
function checkTime(i) {
    if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
    return i;
}
(function () {
    d = new Date();
    document.getElementById("dy").innerHTML = d.getFullYear();
})();
