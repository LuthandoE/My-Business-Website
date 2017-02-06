<?php 
    require_once("config.php");
    require_once("News.php");
    require_once("indObj.php"); 
?>

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
     
     .bk{background-color:#202020;}
     a {text-decoration: none !important;}
     .bh { border-right-style: ridge; border-color: #303030}
     .ok{height: 464px;}
     .frst {height: 300px;}
     .frst img{ height: 100%; width: 100%;}
  
    </style>
</head>

<body>
  
  
  <!-- Container  -->
  <div class="container ">
      <!-- Panel -->
     <div class="panel panel-default w3-card-12">
         <!-- Panel Header -->
         <div class="panel-heading navbar-fixed-top">
        <!--Navigation Bar Begins  -->
        <?php include_once("Navbar.htm") ?>
        
        <!--Navigation Bar Ends-->
        <!--Nav Projects -->
        <?php include_once("Projects.htm") ?>
        <?php include_once("Col.htm") ?>
        <!--Nav background -->
        <?php include_once("lu.htm") ?>
        <!--Nav bio -->
        <?php include_once("about.htm") ?>
        </div>
     
  <br /><br />
  <div id="myPage" class="panel-body w3-card-16">
  <div class="w3-padding-32 ">&nbsp;</div>
           
  <br /><br />
            <!-- Container -->
  <div id="section2" class="container-fluid w3-border-bottom">
  <div class="row w3-margin-top ">
     <h3 class="w3-blue w3-round-large w3-padding"><strong>Business :</strong> </h3>
    <div class="col-md-4"> 
          <?php 
            while($row = mysqli_fetch_array($resBusinessTop)){
            ?><div class="w3-card-2 frst ">
            <div class="w3-padding"><img src="image/<?php echo $row['image'];  ?>" width="100%" class="" alt="WTF" /></div>
            <div class="w3-container w3-padding-top">
           <p class="w3-margin-top"> <a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"><strong>
           <?php echo $row['headline']; ?> </strong></a></p>
            <?php echo $row['category_name']; ?>
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>  
            
            
            </div>
            <?php  } ?>
            </div>
     </div>
    
     <div class="col-md-4 ">
        <table class="table w3-card-2 ok" >
             <tr>
           
           <?php 
            while($row = mysqli_fetch_array($resBusiness)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
              <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
  
     </div>
     <div class="col-md-4">
        <table class="table w3-card-2 ok" >
        <tr> 
           <?php 
            while($row = mysqli_fetch_array($anoBusiness)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     
  </div>
  
</div>


<div id="section2" class="container-fluid w3-border-bottom">
  <div class="row w3-margin-top ">
    <h3 class="w3-blue w3-round-large w3-padding"><strong>Programming:</strong> </h3>
     <div class="col-md-4"> 
          <?php 
            while($row = mysqli_fetch_array($resProgrammingTop)){
            ?><div class="w3-card-2 frst">
            <div class="w3-padding"><img src="image/<?php echo $row['image'];  ?>" width="100%" class="" alt="WTF" /></div>
            <div class="w3-container w3-padding-top">
            <a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"><strong><?php echo $row['headline']; ?> </strong></a><br />
            <?php echo $row['category_name']; ?>
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>  
            
            
            </div>
            <?php  } ?>
            </div>
     </div>
    
     <div class="col-md-4 ">
        <table class="table w3-card-2 ok" >
             <tr>
           
           <?php 
            while($row = mysqli_fetch_array($resProgramming)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
              <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
  
     </div>
     <div class="col-md-4">
        <table class="table w3-card-2 ok" >
        <tr> 
           <?php 
            while($row = mysqli_fetch_array($resProg)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     
  </div>
  
</div>
<div id="section2" class="container-fluid w3-border-bottom">
  <div class="row w3-margin-top ">
     <h3 class="w3-blue w3-round-large w3-padding"><strong>My Stories:</strong> </h3>
     <div class="col-md-4"> 
          <?php 
            while($row = mysqli_fetch_array($resMystoriesTop)){
            ?><div class="w3-card-2 frst">
            <div class="w3-padding"><img src="image/<?php echo $row['image'];  ?>" width="100%" class="" alt="WTF" /></div>
            <div class="w3-container w3-padding-top">
            <a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"><strong><?php echo $row['headline']; ?> </strong></a><br />
            <?php echo $row['category_name']; ?>
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>  
            
            </div>
            <?php  } ?>
            </div>
     </div>
    
     <div class="col-md-4 ">
        <table class="table w3-card-2 ok" >
             <tr>
           
           <?php 
            while($row = mysqli_fetch_array($resMystories)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
              <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
  
     </div>
     <div class="col-md-4">
        <table class="table w3-card-2 ok" >
        <tr> 
           <?php 
            while($row = mysqli_fetch_array($anoMystories)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     
  </div>
  
</div>
</div>
</div></div>
  
  <?php include_once("ContactUs.php") ?>
  <script src="js/NavTime.js"></script>
</body>
</html>
