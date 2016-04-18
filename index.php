<?php include('include/header.php'); ?>
<div class="wrapper">
    <div class="home">
        <section class="slider">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1280px; height: 500px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div class="h-slides" data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1280px; height: 500px; overflow: hidden;">
                    <div class="single-slide" data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/slider.jpg" alt="slider image 1" />
                        <div data-u="caption" data-t="0" class="cap">
                            <div class="inner-cap">
                                <h2>Web &amp; Mobile App Development</h2>
<!--                                <p>We ensure the success of your app by providing more than just development. We morph into your CTO and help devise the technical, product and marketing strategies to scale your idea and employ the best growth hacking techniques to make your app go viral.</p>-->
                                <p>We ensure the success of your app by providing more than just development. </p>
                                <a href="services.php" class="fill-btn hvr-shutter-in-horizontal"> Know More </a>
                                <a href="contact-us.php" class="empty-btn hvr-shutter-out-horizontal"> Request a Quote </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                    <div data-u="prototype" style="width:12px;height:12px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora02l arr-left" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora02r arr-right" data-autocenter="2"></span>
                <a href="#scroll" class="scroll-down"><img src="img/down.png" alt="scroll down" /></a>
            </div>
        </section>

        <section class="why-us os-animation staggered-animation-container" id="scroll">
            <div class="wrap">
                <div class="left-sec staggered-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                    <div class="head">
                        <h2>Why Us</h2>
                    </div>
                </div>
                <div class="right-sec staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                    <!--<h3>Incubasys = Systematic Incubation of an app idea</h3>-->
                    <h5>You have an idea for an app? Brilliant! Now let’s execute it. </h5>
                    <p>We don't just build (the app) &amp; forget - we devise a Product &amp; Brand strategy, we understand your audience before crafting the perfect UX/UI and while our coders are busy bringing your app to life, we prepare you for the post launch phase by creating a marketing strategy utilising growth hacking techniques that only the best are aware of.</p>
                    <a href="how-it-work.php" class="fill-btn hvr-shutter-in-horizontal"> Know More </a>
                    <a href="contact-us.php" class="empty-btn hvr-shutter-out-horizontal"> Request a Quote </a>
                </div>
            </div>
        </section>

        <section class="what-we-do os-animation staggered-animation-container">
            <div class="wrap">
                <h4 class="staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">What we do</h4>
               <!-- <p class="staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">The hardest part is the execution of your vision and idea!</p>-->
                <ul class="what-ul no-listing staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="03s">
                    <li>
                        <img src="img/ios.png" alt="IOS/Android App Development" />
                        <p>IOS/Android <br/> App Development</p>
                    </li>
                    <li>
                        <img src="img/game.png" alt="Game Development" />
                        <p>Game <br/> Development</p>
                    </li>
                    <li>
                        <img src="img/web.png" alt="Web App &amp; Corporate Development" />
                        <p>Web App &amp; <br/>Corporate Development</p>
                    </li>
                    <li>
                        <img src="img/brandig.png" alt="Branding &amp; Product strategy" />
                        <p>Branding &amp; <br/> Product Strategy</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="portfolio-grids os-animation staggered-animation-container">
            <div class="container">
                <h2>OUR PORTFOLIO</h2>
                <!-- categories  -->
                <div class="col-md-3 staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                    <div class="categories-grid">
                        <span class="rubik-text darker-text uppercase">choose category</span>

                        <nav class="categories">
                            <ul class="portfolio_filter">
                                <li><a href="" class="active" data-filter="*">all</a></li>
                                <li><a href="" data-filter=".web">Web Projects</a></li>
                                <!-- <li><a href="" data-filter=".game">Game Development</a></li>
                                <li><a href="" data-filter=".web">Web Apps</a></li>
                                <li><a href="" data-filter=".corporate">CORPORATE WEBSITES</a></li>
                                <li><a href="" data-filter=".branding">BRANDING & PRODUCT STRATEGY </a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- all works -->
                <div class="col-md-9 staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                    <div class="row portfolio_container">
                        <!-- single work -->
                        <div class="col-md-4 portfolio_item web">
                            <a href="dfwac.php" class="work-grid ">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="work-hover_container">
                                    <div class="work-hover_content">
                                        <span class="work-title">DFWAC</span>
                                        <span class="work-category">web design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 portfolio_item web">
                            <a href="spacefynd.php" class="work-grid ">
                                <img src="img/portfolio/2.jpg" alt="image">
                                <div class="work-hover_container">
                                    <div class="work-hover_content">
                                        <span class="work-title">spacefynd</span>
                                        <span class="work-category">web design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 portfolio_item web">
                            <a href="minarecrewter.php" class="work-grid ">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="work-hover_container">
                                    <div class="work-hover_content">
                                        <span class="work-title">Minarecrewter</span>
                                        <span class="work-category">web design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 portfolio_item web">
                            <a href="ozoneplay.php" class="work-grid ">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="work-hover_container">
                                    <div class="work-hover_content">
                                        <span class="work-title">Ozoneplay</span>
                                        <span class="work-category">web design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- end single work -->

                    </div>
                    <!-- end row -->
                </div>
                <!-- all works end -->
            </div>
        </section>

        <section class="testimonial os-animation staggered-animation-container">
            <div class="wrap">
                <div class="testimonial-image staggered-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                    <img src="img/client.png" alt="testimonial client" class="img-responsive" />
                </div>
                <div class="my-slider staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                    <h2>What our Clients are Saying</h2>
                    <p class="sub-head">We value your feedback!</p>
                    <ul>
                        <li>Very Happy about their services, quality and professionalism. Definitely a great value for money and will keep use them for all my projects! Special Thanks to Sulaiman Naeem who was managing my project.</li>
                        <li>Thorough professionals with the required touch of personal assistance! Highly recommended!</li>
                        <li>They've always let us feel prioritized and valued. Professional team and always commits to whatever they promised. Quality of works guaranteed for the various projects we had with them. Looking forward to more projects with them. </li>
                        <li>Great service, very professional attitude, I really appreciate the follow-up and continued support. My best recommendations to a professional team who have been crucial in the start-up. It has been a truly rewarding journey with Incubasys.</li>
                    </ul>
                </div>
            </div>
        </section>

        <?php include('comon/counter.php'); ?>

        <section class="what-we-do blog os-animation staggered-animation-container">
            <div class="wrap">
                <h4>Blog</h4>
                <p>Resources to help you develop your app idea.</p>
                <div class="horizon-swiper staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                    <div class="horizon-item">
                        <a href="how-do-i-get-my-app-to-go-viral.php">
                            <img src="images/img4.jpg" alt="Blog Post 1" class="img-responsive" />
                        </a>
                        <h2><a href="how-do-i-get-my-app-to-go-viral.php">How do I get my app to go viral?</a></h2>
                        <p>Inspired by the success of popular apps like Candy Crush Saga, Snapchat, Timberman, etc. mobile app developers start a project thinking their idea has the potential to grab the attention of millions of users and begin a viral loop.</p>
                    </div>
                    <div class="horizon-item">
                        <a href="develop-an-app-and-game.php">
                            <img src="images/img5.jpg" alt="Blog Post 1" class="img-responsive" />
                        </a>
                        <h2><a href="develop-an-app-and-game.php">How long does it take to develop an app/game?</a></h2>
                        <p>Besides other questions, one of the top queries that people and companies ask developers when it comes to mobile app/game development is that how long exactly does it take to build an app functional?</p>
                    </div>
                    <div class="horizon-item">
                        <a href="cost-of-app-building.php">
                            <img src="images/img6.jpg" alt="Blog Post 1" class="img-responsive" />
                        </a>
                        <h2><a href="cost-of-app-building.php">How much does an app cost to build?</a></h2>
                        <p>Ever since smartphones came into existence, app industry started growing and now for the past few years we have witnessed some drastic changes and explosions in the industry. </p>
                    </div>
                    <div class="horizon-item">
                        <a href="build-an-awesome-startup.php">
                            <img src="images/img1.jpg" alt="Blog Post 1" class="img-responsive" />
                        </a>
                        <h2><a href="build-an-awesome-startup.php">How to build an awesome team for a new start up?</a></h2>
                        <p>“Hey, let’s start a new company today!�? said no one ever. The idea for a new business might come to you in the strangest of settings and time but you cannot simply launch a company the next day.</p>
                    </div>
                    <div class="horizon-item">
                        <a href="got-users.php">
                            <img src="images/img2.jpg" alt="Blog Post 1" class="img-responsive" />
                        </a>
                        <h2><a href="got-users.php">How Uber/Airbnb got its first 100,000 users</a></h2>
                        <p>Every startup dreams of making it big in their industry. Airbnb and Uber are two startups that have changed the face of their respective industries and accomplished in a few months what takes established companies years to achieve.</p>
                    </div>
                    <div class="horizon-item">
                        <a href="intellectual-property-for-startups.php">
                            <img src="images/img3.jpg" alt="Blog Post 1" class="img-responsive" />
                        </a>
                        <h2><a href="intellectual-property-for-startups.php">Introduction to intellectual property for start ups</a></h2>
                        <p>Building a startup is no minor feat and the owner has their hands in so many different places at the same time that it seems near impossible to turn their dream into a reality.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- Home Slider Js  -->
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="js/jasor.js"></script>

<?php include('include/footer.php'); ?>
