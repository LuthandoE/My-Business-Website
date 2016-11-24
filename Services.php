<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    
	<title>Services</title>
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
               w3-padding-bottom  w3-center">
               <!-- header txt -->
               <div class="container-fluid w3-hide-small"> <h1 class="jmb" id="homeText"><strong>
                    <span class="fa fa-code w3-xxxlarge">
                    </span> Services <span class="fa fa-code w3-xxxlarge">
                    </span> </strong></h1></div>
                
            </div>
            
            <!-- Container -->
            <div class="w3-container ">
                <hr />
                <p class="w3-center">I develop stunning professional websites
                    for both businesses and for individuals <br /> and everything I create is done
                    with the business objectives of your project in mind.
                    
                    </p>
                <hr />
           
                  <div class="w3-row-padding">
                  <!-- Third -->
                  <div class="w3-third w3-padding-left ">
                      <div class="w3-card-2 w3-white w3-border-bottom w3-border-blue " style="height:270px">
                      <header class="w3-black w3-card-16 w3-border-bottom w3-border-white">
                      <h3 class="w3-padding w3-center ">Web Design</h3></header>
                      <p class="w3-margin">
                         User Experience (UX) is the lasting 
                         feeling a user will have after visiting your site.
                          
                         So this is my first priority as a developer.   
                         I'll work with Photoshop and Illustrator to create static visuals of
                          your site and get them to a point where you're happy...!
                      

                      </p>
                      
                  </div></div>
                  <!-- Third -->
                  <div class="w3-third w3-padding-left ">
                    <div class="w3-card-2 w3-white w3-border-bottom w3-border-blue " style="height:270px">
                      <header class="w3-black w3-card-16 w3-border-bottom w3-border-white"><h3 class="w3-padding w3-center">
                      Web Development</h3></header>
                      <p class="w3-padding">
                         When you're happy with the designs,
                         I'll work on your project using the most suitable technology.
                         I hand-code using Responsive HTML5, CSS, jQuery 
                         and PHP. I'm also a big advocate of
                          responsive design - that's catering for people viewing your site on smartphones and tablets.

                        

                      </p>
                  </div>
                  </div>
                  <!-- Third -->
                  <div class="w3-third w3-padding-left ">
                      <div class="w3-card-2 w3-white w3-border-bottom w3-border-blue " style="height:270px">
                      <header class="w3-black w3-card-16 w3-border-bottom w3-border-white"><h3 class="w3-padding w3-center">
                      Promotion</h3></header>
                      <p class="w3-padding">
                         It's no good having a fantastic website if no one knows out there.
                         I'll work on your SEO to optimise your site to be as search engine-friendly as possible.

                         I can help you run a successful pay-per-click advertising 
                         campaign using Google Adwords.
                      </p>
                  </div>
                  </div>
                  </div>
            </div>
        </div>
     </div>
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
</script>
</body>
</html>
