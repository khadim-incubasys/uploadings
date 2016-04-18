<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php
        $pageName = basename($_SERVER['PHP_SELF']);
        //print_r($pageName);
        if ($pageName == 'index.php') :
            ?>
            <title>Mobile App Design and Development Company Dubai, U.A.E</title>
            <meta name="description" content="Mobile app developers and designers in Dubai developing impressive mobile apps for small and big companies alike! You have an idea for an app? Brilliant! Now let’s execute it.">
        <?php elseif ($pageName == 'services.php') : ?>

            <title>What We Do | Apps, Games &amp; Corporate Websites Dubai, U.A.E</title>
            <meta name="description" content="A good design is only a small portion of a bigger more awesome user experience. We understand who your audience is and what your project goals are.">
        <?php elseif ($pageName == 'how-it-work.php') : ?>

            <title>How It Works | Model for fast growth of startups</title>
            <meta name="description" content="Our concept workshop is basically a 1-day session to refine your idea and find any breaking points by testing against market fit, target audience and real world problem benchmarks">
        <?php elseif ($pageName == 'why-choose-us.php') : ?>

            <title>The Dream Team | Designers, Developers, Strategists Dubai</title>
            <meta name="description" content="Since a company is nothing without its people, we - as a people centric organization - take our time hunting for the right ones.">
        <?php elseif ($pageName == 'portfolio.php') : ?>

            <title>Our Portfolio | Apps, Games &amp; Corporate Websites</title>
            <meta name="description" content="Our work talks more than what we say. Check out our previous projects; satisfy yourself before you decide to work with us.">
        <?php elseif ($pageName == 'blog-inner.php') : ?>

            <title>Blog | Read What’s New</title>
            <meta name="description" content="Keep up with us through our blog, we post about what’s hot, what’s new and what’s going to be the hype soon.">
        <?php elseif ($pageName == 'contact-us.php') : ?>

            <title>Contact Us | Say HELLO!</title>
            <meta name="description" content="Have a query for us? Or you want a business quotation? We are always here to help. You can contact us any time you want.">
        <?php endif; ?>
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css" />
        <!--        <link rel="stylesheet" media="all" type="text/css" href="css/hover-min.css">
                <link rel="stylesheet" media="all" type="text/css" href="css/horizon-swiper.min.css">
                <link rel="stylesheet" media="all" type="text/css" href="css/unslider.css">-->
        <link rel="stylesheet" media="all" type="text/css" href="css/unslider-dots.css">
        <link rel="stylesheet" media="all" type="text/css" href="css/jasor.css">
        <link href="css/all.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800,300italic' rel='stylesheet' type='text/css'>

        <!--- Core Files -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        
        <!-- Google Captcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>
    <body>
        <!--        <div class="loader" style="background:#111213; position: fixed; z-index: 99999999999999999; width: 100%; height: 100%; text-align: center;">
                    <img src="img/test1(1).gif" alt="loader" />
                </div>-->
        <div class="main-menu" >
            <a href="" class="close-menu"><i class="fa fa-times"></i></a>

            <div class="contact-menu">
                <h4>let's work together - contact us</h4>
                <a href="mailto:info@incubasys.com" class="link"><em>info@incubasys.com</em></a>
                <div class="footer">© Incubasys 2016. All rights reserved.</div>
            </div>

            <div class="menu-div">
                <ul>
                    <li><a href="index.php" class="active">About Us</a></li>
                    <li>
                        <a href="why-choose-us.php">Why Choose Us</a>
                        <ul class="dropdown">
                            <li>
                                <a href="why-choose-us.php#team">Team</a>
                            </li>
                            <li>
                                <a href="why-choose-us.php#expertise">Expertise</a>
                            </li>
                            <li>
                                <a href="why-choose-us.php#our-story">Our Story</a>
                            </li>
                            <li>
                                <a href="why-choose-us.php#our-work">Our Work</a>
                            </li>
                            <li>
                                <a href="why-choose-us.php#testimonials">What our Clients Say</a>
                            </li>
                            <li>
                                <a href="why-choose-us.php#clients">Who We've Worked With </a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="services.php">What we do</a>
                        <ul class="dropdown">
                            <li>
                                <a href="services.php#web-apps">Web Apps &amp; Corporate Websites</a>
                            </li>
                            <li>
                                <a href="services.php#iphone-apps">Iphone/Ipad Apps</a>
                            </li>
                            <li>
                                <a href="services.php#iphone-apps">Android Apps</a>
                            </li>
                            <li>
                                <a href="services.php#games-development">Games Development </a>
                            </li>
                            <li>
                                <a href="services.php#our-work">Our Work</a>
                            </li>
                            <li>
                                <a href="services.php#clients">What our Clients Say</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="how-it-work.php">Our Process</a></li>
                    <!--                    <li><a href="how-it-work.php">How it works</a></li>-->
                    <li>
                        <a href="blog.php">More Info</a>
                    </li>
                    <!--                    <li><a href="portfolio.php">Portfolio</a></li>
                                        <li><a href="blog-inner.php">Blog</a></li>-->
                    <li><a href="contact-us.php">Contact</a></li>
                    <!-- <li><a href="#">Have an App Idea?</a></li> -->
                </ul>
            </div>
        </div>
        <header>
            <div class="wrap">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="Incubasys" />
                    </a>
                </div>
                <div class="menu pull-right">
                    <span>Menu</span>
                    <div class="line-wrap">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </header>






