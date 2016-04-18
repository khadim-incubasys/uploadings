<?php include('include/header.php'); ?>
  <div class="wrapper our-contact">

<div class="contact os-animation staggered-animation-container">
    <div class="banner-title">
        <h2>Thankyou!<span>+</span> </h2>
        <p>Say Hi!</p>
    </div>   

    <div class="no-padding form-area staggered-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.4s">
        <?php
            /*$your_secret = "6LcywBkTAAAAAGNCje36swuafLdfAnT28cAj6PgS";
            $client_captcha_response = $_POST['g-recaptcha-response'];
            $user_ip = $_SERVER['REMOTE_ADDR'];

            $captcha_verify = open_https_url("https://www.google.com/recaptcha/api/siteverify?secret=$your_secret&response=$client_captcha_response&remoteip=$user_ip");
            $captcha_verify_decoded = json_decode($captcha_verify);
            if(!$captcha_verify_decoded->success)
              die('DIRTY ROBOT');*/

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $company = $_POST['company'];
            $develop = $_POST['develop'];
            $message = $_POST['message'];
            $human = $_POST['human'];
            $from = 'From: Incubasys';
            $to = 'info@incubasys.com';
            $subject = 'Request Form';

            $body = "Name: $name \n E-Mail: $email \n Phone: $phone \n Company: $company \n Develop: $develop \nMessage:\n$message";

            if ($_POST['submit']) {
                if ($email != '') {
                    if (mail ($to, $subject, $body, $from)) {
                        echo "<h3>Thankyou!</h3>";
                        echo '<p>You have successfully submitted your information to Incubasys. We will be in touch with you within 24hrs.</p>';
                    } else { 
                        echo '<p>Something went wrong, go back and try again!</p><p><input type="button" value="Go Back" onclick="history.back(-1)" class="goback" /></p>'; 
                    }
                } else {
                    echo '<p>You need to fill in all required fields!!</p><p><input type="button" value="Go Back" onclick="history.back(-1)" class="goback" /></p>';
                }
            }
        ?>
    </div>

    <div class="contact-details staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.4s">
        <h2>contact info<span>+</span> </h2>
        <p>Develop &amp; Market your App! Get Funding!</p>
        
        <div class="address">
            <h4>U.A.E</h4>
            <p>204 Churchill Tower, Business Bay, Dubai</p>
            <p>T <a href="Tel:+97142776220">+971 4 277 6220</a></p>
        </div>
        
        <div class="address">
            <h4>Pakistan</h4>
            <p>32-R, Johar Town Lahore</p>
            <p>T <a href="Tel:+924235956229">+92 423 5956229</a></p>
        </div>
        <div class="address">
            <h4>Australia</h4>
            <p>140 Williams Street Melbourne, Victoria 3030</p>
            <p>T <a href="Tel:+61386409691">+61 3 8640 9691</a></p>
        </div>
        <div class="address">
            <h4>Singapore</h4>
            <p>#16-06 18 Spottiswoode Park Road Singapore 088642</p>
            <p>T <a href="Tel:+6597309834">+65 973 09834</a></p>
        </div>
        <div class="call-to-action">
            <h4>Want TO See More of Our Work?</h4>
            <a href="" class="empty-btn hvr-shutter-out-horizontal work-btn"> Our Work </a>
        </div>
    </div>
    
    <div class="map-area staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
        <div id="map_canvas"></div>
    </div>
    
</div>


<?php include('include/footer.php'); ?>

