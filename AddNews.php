<?php

  require_once("adNewsCd.php"); 
?>
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
<body class="w3-light-grey">
<?php include_once('Navbar.htm'); ?>
<div class="container-fluid">
   <div class="w3-row-padding w3-margin-top w3-light-grey " >
        <!-- 1st half -->
        <div class="w3-half">
            <div class="w3-padding w3-white w3-round-large w3-card-2">
            <h2 class="w3-center w3-light-grey w3-padding w3-margin w3-round-xlarge">
               <span class="fa fa-edit"> Share with the world!</span>
            </h2>
            <form method="post" enctype="multipart/form-data">
            <div class="w3-group">
                <label class="w3-label w3-text-blue-grey"><b>Headline:</b></label>
                <input class="w3-input w3-border w3-light-grey w3-round" required="" name="headline"  type="text"/> 
            </div>
            
            <div class="w3-group">      
                <label class="w3-label w3-text-blue-grey"><b>Category:</b></label>
                <select class="w3-select w3-section" name="category">
                Select an Option
                <option value="" disabled="" selected="">Choose your option</option>
                <?php echo $c; ?>
                
                </select>
           </div>
           
           <div class="w3-group">      
                <label class="w3-label w3-text-blue-grey"><b>Image</b></label>
                <input class="w3-input w3-border w3-light-grey w3-round" name="image" required="" type="file"/>
           </div>
            </div>
        </div>
        
        
        <!-- 2nd Half -->
        <div class="w3-half">
            <div class="w3-padding w3-white w3-round-large w3-card-2">
            
            <div class="w3-group">
              <label class="w3-label w3-text-blue-grey"><b>Summary</b></label>
              <textarea name="summary" maxlength="120" required="" class="form-control" rows="3" wrap="hard" id="comment"></textarea>
            </div>
            <div class="w3-group">   
                <label class="w3-label w3-text-blue-grey"><b>Write here:</b></label>
                <textarea name="message" required="" class="form-control" required="" rows="8" wrap="hard" id="comment"></textarea>
                <span class="error">* <?php // echo $Errarticle; ?></span>
            <div class="w3-right w3-padding"><button class="w3-btn w3-black" type="submit" name="post">Publish</button></div>
            </div> 
            </form>
            </div>
        </div>
        
    </div>
  </div>
  <script src="js/NavTime.js"></script>
</body>
</html>