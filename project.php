<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./templates/pageHeader.php'); ?> 
</head>
<body>
<?php require('./templates/bodyHeader.php'); ?>
    <section class="project-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="align-center">
                        <div class="section-heading bottom2">
                            <h2 class="align-center">FINDCreative eve.</h2>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
                    </div>
                </div>
            </div>
            <div class="project-views">
                <div class="row align-item-center">
                    <div class="col-md-7">
                        <img src="images/fca-desktop.png"/>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <h3>Desktop</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                    </div>
                    <!-- <div class="col-md-2">
                        <img src="images/fca-mobile-1.png"/>
                    </div>
                    <div class="col-md-2">
                        <img src="images/fca-mobile-2.png"/>
                    </div> -->
                </div>
            </div>

            <div class="project-views">
                <div class="row align-item-center">
                    <div class="col-md-4">
                        <h3>Mobile</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/fca-mobile-1.png"/>
                            </div>
                            <div class="col-md-6">
                                <img src="images/fca-mobile-2.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>       

    <section class="dark-bg about-company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h4>Techs</h4>
                    <ul class="list">
                        <li><span class="key">FrontEnd </span> <span>:</span> <span class="value">React, GSAP, Webpack</span></li>
                        <li><span class="key">BackEnd </span> <span>:</span> <span class="value">Express, Node</span></li>
                        <li><span class="key">Days </span> <span>:</span> <span class="value">70 Days</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="next-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <a href="">
                        <span class="next">NEXT</span> 
                        <span class="arrow">
                            <img src="images/next-arrow.svg" alt="next">
                        </span> 
                        <span class="page-name">About</span>
                    </a>

                    <div class="cta-img">
                        <img src="images/mml-vector-5.png" alt='mml' />
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require('./templates/footer.php'); ?>
</body>
</html>