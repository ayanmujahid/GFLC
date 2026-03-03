<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>
<div class="cover-background bg-img coming-soon d-flex align-items-center position-relative min-vh-100 dark-overlay" data-overlay-dark="7" data-background="assets/images/logo-bg.png" style="background-image: url(assets/images/logo-bg.png);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 my-5">
                    <div class="mb-1-9">
                        <h1 class="text-white display-17 display-sm-14 display-md-8 display-lg-6 mb-2">We are coming soon</h1>
                        <p class="text-white lead font-weight-500 opacity9 mb-0">Our website is under construction. We'll be here soon with our new awesome site.</p>
                    </div>
                    <ul class="countdown mb-1-9">
                        <!-- days -->
                        <li><span class="days title-font">789</span>
                            <p class="timeRefDays">days</p>
                        </li>
                        <!-- end days -->
                        <!-- hours -->
                        <li><span class="hours title-font">11</span>
                            <p class="timeRefHours">hours</p>
                        </li>
                        <!-- end hours -->
                        <!-- minutes -->
                        <li><span class="minutes title-font">15</span>
                            <p class="timeRefMinutes">minutes</p>
                        </li>
                        <!-- end minutes -->
                        <!-- seconds -->
                        <li><span class="seconds title-font">45</span>
                            <p class="timeRefSeconds">seconds</p>
                        </li>
                        <!-- end seconds -->
                    </ul>
                    <h2 class="h5 text-white opacity9">Subscribe to our newsletter</h2>
                    <div class="row mb-1-9">
                        <div class="col-md-8">
                            <form class="quform newsletter-form w-90 w-sm-100" action="quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements position-relative">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element mb-0">
                                                <div class="quform-input">
                                                    <input class="form-control news-box" id="email_address" type="text" name="email_address" placeholder="Subscribe with us">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="newsletter-btn bg-primary" type="submit"><span><i class="fas fa-paper-plane text-white"></i></span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="social-icon">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>