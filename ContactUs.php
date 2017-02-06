<?php
    $message = "";
    if(isset($_POST['submit'])){
        
       $to = "luthandodlamini94@gmail.com";
       $name = $_POST['name'];
       $from = $_POST['email'];
       $headers = 'From: $from'. "\r\n".
                    'Reply-To: $to'."\r\n".
                    'X-Mailer: PHP'.phpversion();
        $txt = $_POST['body'];
        
        mail($to,$name,$txt,$headers);
        $message = "Email has been sent  successfully";

    } else {
       // echo "Sorry, error occured!";
    }

?>

<!--Contact Us Modal -->
<div class="modal fade w3-margin" id="myModal" role="dialog">
<div class="modal-dialog w3-card-12">
<div class="modal-content">
<div class="modal-header w3-black w3-card-2">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title w3-black"> <span class="fa fa-phone-square"></span> Contact Details</h3>
</div>
<div class="modal-body">
<div class="w3-padding-8">

<form class="w3-form" method="post">
<p id=""> <span class="fa fa-envelope"></span> <b>Email &nbsp; &nbsp;:</b> luth***********</p>
<p id=""><span class="glyphicon glyphicon-phone"></span> <b>Cell No  :</b> +27 74 **********</p>
<div>
    <p>
        <a href="https://www.facebook.com/sihle.l.dlamini">
            <span class="fa fa-facebook-square w3-xlarge w3-text-indigo"></span>
        </a> &nbsp; <a href="https://twitter.com/LuthandoDlamini ">
            <span class="fa fa-twitter-square w3-xlarge w3-text-blue"></span>
        </a> &nbsp;<a href="https://plus.google.com/u/0/app/basic/103739394219354837528?tab=XX">
            <span class="fa fa-google-plus-square w3-xlarge w3-text-red"></span>
        </a> &nbsp;
        <a href="http://www.linkedin.com/in/luthando-dlamini-27392b98?trk=nav_responsive_tab_profile">
            <span class="fa fa-linkedin-square w3-xlarge w3-text-blue-grey"></span>
        </a> &nbsp;
    </p>
</div>
<p class="w3-black w3-center w3-padding">Let's talk business </p>

<input class="w3-input w3-animate-input" name="name" type="text" placeholder="Name" required="" />
<br />
<input class="w3-input" name="email" type="text" placeholder="Email" required="" />
<br />
<textarea class="w3-input" name="body" placeholder="Message" required=""></textarea>
<br />

<button type="submit" id="Send" class="w3-btn">Send</button>
</form>
</div></div></div></div></div></div>