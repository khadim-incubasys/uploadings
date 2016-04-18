<?php include('include/header.php'); ?>
<div class="wrapper our-contact">

    <div class="contact os-animation staggered-animation-container">
        <div class="banner-title">
            <h2>Contact Us<span>+</span> </h2>
            <p>Say Hi!</p>
        </div>

        <div class="no-padding form-area staggered-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.4s">
            <form class="form-inline" method="POST" action="thankyou.php" name="Contact">
                <div class="form-group col-xs-6">
                    <input type="text" class="form-control name" name="name" placeholder="Your Name" required />
                </div>
                <div class="form-group  col-xs-6">

                    <input type="email" class="form-control email" name="email" placeholder="Your Email" required />
                </div>
                <div class="form-group  col-xs-6">
                    <input type="text" class="form-control phone" name="phone" placeholder="Phone" required />
                </div>
                <div class="form-group  col-xs-6">
                    <input type="text" class="form-control company" name="company" placeholder="Company" required />
                </div>
                <div class="form-group  col-xs-12 develop">
                    <!--<input type="text" class="form-control develop" name="develop" placeholder="I Want to Develop" required />-->
                    <p class="d-text"> I Want to Develop: </p>

                    <div class="col-xs-12 no-padding">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <span class="custom-checkbox">
                                <input type="checkbox" /> 
                                <span class="box"><span class="tick"></span></span>
                                Mobile App
                            </span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                            <span class="custom-checkbox">
                                <input type="checkbox" /> 
                                <span class="box"><span class="tick"></span></span>
                                Web Application
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <span class="custom-checkbox">
                                <input type="checkbox" /> 
                                <span class="box"><span class="tick"></span></span>
                                Website
                            </span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                            <span class="custom-checkbox">
                                <input type="checkbox" /> 
                                <span class="box"><span class="tick"></span></span>
                                Growth Hacking & User Acquisition
                            </span>
                        </div>
                    </div>



                </div>
                <div class="form-group  col-xs-12">
                    <textarea class="form-control message" placeholder="Message" name="message" required></textarea>
                </div>
                <!-- <div class="form-group  col-xs-12">
                    <div class="g-recaptcha" data-sitekey="6LcywBkTAAAAABURMbfawf_iyXrLd_N3dLuN3EvV"></div>
                </div> -->
                <div class="form-group  col-xs-12">
                    <input id="submit" name="submit" type="submit" class="btn  hvr-shutter-in-vertical submit" value="Submit">
                </div>
            </form>
        </div>

        <div class="contact-details staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.4s">
            <h2>contact info<span>+</span> </h2>
            <p>Develop & Market your App! Get Funding!</p>

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

