<?php
    $message = "";
    if(isset($_POST['submit'])){
        
        $to = "luthandodlamini94@gmail.com";
        $name = $_POST['name'];
       $from = $_POST['fromEmail'];
       $headers = 'From: '. $from."\r\n".
                    'Reply-To: $to'."\r\n".
                    'X-Mailer: PHP'.phpversion();
        $txt = $_POST['body'];
        
        mail($to,$name,$txt,$headers);
        $message = "Email has been sent  successfully";

    } else {
       // echo "Sorry, error occured!";
    }
    
    $msg = "";
    if(isset($_POST['submit1'])){
        
        $to = "luthandodlamini94@gmail.com";
        $name = $_POST['name1'];
       $from = $_POST['fromEmail1'];
       $headers = 'From: '.$from. "\r\n".
                    'Reply-To: $to'."\r\n".
                    'X-Mailer: PHP'.phpversion();
        $txt = $_POST['body1'];
        
        mail($to,$name,$txt,$headers);
        $msg = "Email has been sent  successfully";

    } else {
       // echo "Sorry, error occured!";
    }

?>