<?php

$newsObj = new myblog(); 
 //My Stories
 $resMystories = $newsObj->myStories();
 $resMystoriesTop =$newsObj->myStoriesTop();
 $anoMystories =  $newsObj->anomyStories();
 
 //Programming
 $resProgramming = $newsObj->Programming();
 $resProgrammingTop = $newsObj->getProgrammingTop();
$resProg = $newsObj->anoProgramming();
 //Business
 $resBusiness = $newsObj->business();
 $resBusinessTop = $newsObj->businessTop();
 $anoBusiness = $newsObj->businessSec();

?>