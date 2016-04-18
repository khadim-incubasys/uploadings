<?php include('include/header.php'); ?>
<div class="wrapper">
    <div class="portfolio-area os-animation staggered-animation-container">
        <div class="banner-title staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
            <h2>PORTFOLIO <span>+</span> </h2>
            <p>Check all our Projects</p>
        </div>
        <section class="portfolio-grids staggered-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
            <div class="container">
                <h2>OUR PORTFOLIO</h2>
                <!-- categories  -->
                <div class="col-md-3">
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
                <div class="col-md-9">
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
        <?php include('comon/counter.php'); ?>
    </div>
<!-- Home Slider Js  -->
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="js/jasor.js"></script>

<?php include('include/footer.php'); ?>
