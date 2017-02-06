<?php

   require_once("config.php");
   require_once("News.php");
   
    $news = new myblog();
    $getNews = $news->getNewsID($_GET['id']);
    
    $topNews = $news->getTopNews($news->getID($_GET['id']));
?>
<html>
<head>
  <title>Help Student Out</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="w3/w3.css" rel="stylesheet" />
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
    <script>
      (function($) {
        var $window = $(window),
                $html = $('html');
        function resize() {
        if ($window.width() < 514) {
        return $html.addClass('mobile'
                }
                $html.removeClass('mobile');
            }
            $window
                .resize(resize)
                .trigger('resize');
        })(jQuery);
    </script>
  <style>
  
  #section1 {padding-top:50px;height:500px ;}
  #section2 {padding-top:10px; background-color: #ffffff;}
  #section3 {padding-top:10px;  background-color: #ffffff;}
  #section41 {padding-top:10px;background-color: #ffffff;}
  #section5 {padding-top:10px;padding-bottom:10px;background-color: #ffffff;}
  #section6 {padding-top:10px; background-color: #ffffff;}
  
  .l-container{height: 360px;}
  .bk{background-color:#202020;}
  
  .bh { border-right-style: ridge; border-color: #303030}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; height: 40% ; background-color: black;}
  a {text-decoration: none !important;}
  
  #imgCont{height: 400px; }
  #imgCont img{ max-height: 100%; max-width: 90%;}
  .dvImg {height: 100px;}
  .dvImg img{max-height: 100%; max-width: 100%;}
  
  @media screen and ( max-width:  500px){
    #imgCont {
     height : 150px;   
    }
  }
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
    <div class="w3-padding-64 ">&nbsp;</div>
    <br /><br /> 
    <div class="w3-row-padding">
      <div class="col-md-8">
    
      <?php while($row = mysqli_fetch_array($getNews)){ ?>      
          <div class="container-fluid  w3-padding">
             
             <div id="imgCont" >
             <img  src="image/<?php echo $row['image'];  ?>" class="img-responsive" /></div>
             <br />
          </div>
          
          <div class="container-fluid">
          <h2><?php echo $row['headline']; ?></h2>
            <hr /> 
            <?php echo nl2br($row['post']); ?> 
            <?php } ?>
            <hr />
          </div>
    </div>
    <div class="col-md-4 w3-light-grey">
    <div class="container-fluid w3-margin">
         <table class="table w3-card w3-white" >
           <th class="w3-red" colspan="2">Related Articles:
           <span class="w3-right w3-large">»»</span></th>
           <tr>
              <?php 
            while($row = mysqli_fetch_array($topNews)){ ?>
              <td><div class="dvImg"><img src="image/<?php echo $row['image'];  ?>"  /></div></td>
              <td ><a href="read-news.php?id=<?php echo $row['bid'] ?>" class="w3-text-black"> 
              <strong><?php echo $row['headline']; ?></strong></a> <br /><br />
               
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $news->humanTiming(strtotime($row['posted_on'])); ?>
                 
              </td>
              
           </tr> <?php  } ?></table>        
    </div>
  </div>

  </div>
</div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58776976596ca1df"></script>
<script src="js/NavTime.js"></script> 
<?php include_once("ContactUs.php") ?>
</body>
</html>