<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    
	<title>Work</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="w3/w3.css" rel="stylesheet" />
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
     .header-text{ font-family: Brush Script MT, cursive;}
     .jmb { color: black; font-size: 50px; text-shadow: 2px 2px 5px dodgerblue; font-family: 'Bell MT'; }
     .textSlogan { font-size: 16px; font-style: italic; }
     .searchdiv { max-width: 400px; margin: auto; text-align: left; font-size: 16px; }
     .w3-dropnav { display: none; padding-bottom: 40px; }
     .w3-dropnav h3 { padding-top: 20px; }
     .w3-dropnav .w3-col { height: 260px;}
     .w3-theme { color: #fff !important; background-color: #000 !important;}

     .homeShortcut { text-align: left;}
     .dropMargin { margin-top: -3px;}
    </style>
</head>

<body>
  
  <!-- Container  -->
  <div class="container">
      <!-- Panel -->
     <div class="panel panel-default w3-card-12">
         <!-- Panel Header -->
         <div class="panel-heading navbar-fixed-top">
         <?php include_once("Navbar.htm") ?>
         <?php include_once("Projects.htm") ?>
         <?php include_once("Col.htm") ?>
         <?php include_once("lu.htm") ?>
         <?php include_once("about.htm") ?>
         </div>
     </div>
     <div id="myPage" class="panel-body w3-card-16">
        <div class="container-fluid">
            <div class="w3-padding-64">&nbsp;</div>
            <div class="container-fluid w3-jumbo w3-animate-zoom  w3-margin-top
                 w3-center">
                <!-- header txt -->
                <div class="container-fluid w3-hide-small"> <h1 class="jmb" id="homeText"><strong>
                    <span class="fa fa-code w3-xxxlarge">
                    </span> Work <span class="fa fa-code w3-xxxlarge">
                    </span> </strong></h1></div>
            </div><br />
               <!-- Container -->
            <div class="w3-container w3-card-12 w3-border-top w3-border-light-grey">
                
                <p class="w3-center w3-margin-top ">
                This is a selection of my  work.
                I've been involved in many different types of projects - <br />
                 from tactical microsites to fully content managed websites.<br />
                   Whatever your requirements, I'm sure I can help.
                </p>
                <div class="container-fluid"><hr /></div>
                <br />
                <div class="container-fluid w3-center">
                    <div class="w3-image">
                     <p><strong>Client : Noel Adams</strong></p>
                     <img src="image/hm.png" style="width: 50%;" />
                    </div>
                    <div class="w3-border-bottom w3-border-blue">&nbsp;</div>
                    <br />
                    <div class="w3-image">
                     <p><strong>Client : Thembeka</strong></p>
                     <img src="image/Sphalaphala.png" style="width: 50%;" />
                    </div>
                    <div class="w3-border-bottom w3-border-blue">&nbsp;</div>
                    <br />
                    
                    <div class="w3-image">
                     <p><strong>Client : S'bani</strong></p>
                     <img src="image/pickn.png" style="width: 50%;" />
                    </div>
                    <div class="w3-border-bottom w3-border-blue">&nbsp;</div>
                    <br />
                    
                </div>
            </div>
            
        </div>
     </div>
     <?php include_once("footer.htm") ?>
  </div>
    <?php include_once("ContactUs.php") ?>
  <script>
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
    </script>
    <script>
    (function startTime() {
        var today = new Date("MMM DD YYYY");
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
</script>
</body>
</html>
