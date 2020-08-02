<!DOCTYPE html>
<html>
<head>
  <?php require('./templates/pageHeader.php'); ?>
</head>
<body>
<div class="loader-wrapper">
        <div class="loader-content">
            <h2> <svg class="loading" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="574.558px" height="50px" viewBox="0 0 574.558 120" enable-background="new 0 0 574.558 120" xml:space="preserve">
             <defs>
               <pattern id="water" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
                 <path fill="#000" d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
               </pattern>
               
               <text id="text" transform="matrix(1 0 0 1 -8.0684 80.7852)" font-size="100" font-weight="600">MAKEMELIVE</text>
               
               <mask id="text_mask">
                 <use x="0" y="0" xlink:href="#text" opacity="1" fill="#eee"/>
               </mask>
             </defs>
            
             <use x="0" y="0" xlink:href="#text" fill="#eee"/>
             
             <rect class="water-fill" mask="url(#text_mask)" fill="url(#water)" x="400" y="0" width="1600" height="50"/>
           </svg></h2>
            <div>
                <div class="timezone"></div>
                <div class="country"></div>
            </div>
        </div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
        
    </div>
    <?php require('./templates/bodyHeader.php'); ?>

    <section class="home-section">
        <div id="home-banner" class="home-banner">
            <div class="container">
                <div class="row">
                    <div class="banner">
                        <div class="text-content">
                            <div class="slide">
                                <span class="text-dynamic cursive">Digital </span>
                                <span class="text-static">Agency</span>
                                <span class="welcome-text">Welcome! It is a digital company </span>
                            </div>
                            <!-- <div class="slide">SEO</div>
                            <div class="slide">Code</div>
                            <div class="slide">Creative</div> -->
                        </div>
                        
                        <div class="image-content">
                            <!-- <div class="video-wrapper"> -->
                                <video class="mml-video" id="myVideo" loop="" data-index="2" autoplay="" playsinline="true" webkit-playsinline="true" muted="" preload="none" src="images/mml.mp4"></video>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-intro" class="home-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Makemelive Technologies</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="process-slider">
                            <div class="img-slide">
                                <picture> 
                                    <source srcset="images/img01.jpg" type="image/webp">
                                    <img src="images/img01.jpg" alt="" loading="lazy" class=""> 
                                </picture>
                            </div>
                            <div class="img-slide">
                                <picture> 
                                    <source srcset="images/img02.jpg" type="image/webp">
                                    <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                </picture>
                            </div>
                            <div class="img-slide">
                                <picture> 
                                    <source srcset="images/img03.jpg" type="image/webp">
                                    <img src="images/img03.jpg" alt="" loading="lazy" class=""> 
                                </picture>
                            </div>
                            <div class="img-slide">
                                <picture> 
                                    <source srcset="images/img02.jpg" type="image/webp">
                                    <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4>Creative</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Material</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work-section" class="work-section section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading align-right">
                        <h2>Work</h2>
                    </div>

                    <div class="work-list-wrapper">
                        <div class="list-row">
                            <div class="list-col">
                                <div class="image-container">
                                    <picture>
                                        <source srcset="images/img02.jpg" type="image/webp">
                                        <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                    </picture>
                                    <a class="project-link" href=""><span>visit</span></a>
                                </div>

                                <div class="tile-content">
                                    <h4 class="cursive">FINDCreative</h4>
                                    <span>Digital Agency</span>
                                </div>
                            </div>

                            <div class="list-col">
                                <div class="image-container">
                                    <picture>
                                        <source srcset="images/img02.jpg" type="image/webp">
                                        <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                    </picture>
                                    <a class="project-link" href=""><span>visit</span></a>
                                </div>
                                <div class="tile-content">
                                    <h4 class="cursive">FINDCreative</h4>
                                    <span>Digital Agency</span>
                                </div>
                            </div>
                        </div>

                        <div class="list-row">
                            <div class="list-col">
                                <div class="image-container">
                                    <picture>
                                        <source srcset="images/img02.jpg" type="image/webp">
                                        <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                    </picture>
                                    <a class="project-link" href=""><span>visit</span></a>
                                </div>
                                <div class="tile-content">
                                    <h4 class="cursive">FINDCreative</h4>
                                    <span>Digital Agency</span>
                                </div>
                            </div>

                            <div class="list-col">
                                <div class="image-container">
                                    <picture>
                                        <source srcset="images/img02.jpg" type="image/webp">
                                        <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                    </picture>
                                    <a class="project-link" href=""><span>visit</span></a>
                                </div>
                                <div class="tile-content">
                                    <h4 class="cursive">FINDCreative</h4>
                                    <span>Digital Agency</span>
                                </div>
                            </div>
                        </div>

                        <div class="list-row">
                            <div class="list-col">
                                <div class="image-container">
                                    <picture>
                                        <source srcset="images/img02.jpg" type="image/webp">
                                        <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                    </picture>
                                    <a class="project-link" href=""><span>visit</span></a>
                                </div>
                                <div class="tile-content">
                                    <h4 class="cursive">FINDCreative</h4>
                                    <span>Digital Agency</span>
                                </div>
                            </div>

                            <div class="list-col">
                                <div class="image-container">
                                    <picture>
                                        <source srcset="images/img02.jpg" type="image/webp">
                                        <img src="images/img02.jpg" alt="" loading="lazy" class=""> 
                                    </picture>
                                    <a class="project-link" href=""><span>visit</span></a>
                                </div>
                                <div class="tile-content">
                                    <h4 class="cursive">FINDCreative</h4>
                                    <span>Digital Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-cta">
                        <a class="link" href="">
                            <span>view work</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="member-section" class="member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Members</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>

                        <div class="col-md-6">
                            <h3>Our Team</h3>
                            <p>Team Moto is :- Think - Code - Create - Repeat Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                        
                    </div>
                    
                    <div class="team-slider">
                        
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff01.jpg" type="image/webp">
                                <img src="images/staff01.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff07.jpg" type="image/webp">
                                <img src="images/staff07.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff04.jpg" type="image/webp">
                                <img src="images/staff04.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff03.jpg" type="image/webp">
                                <img src="images/staff03.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff05.jpg" type="image/webp">
                                <img src="images/staff05.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff06.jpg" type="image/webp">
                                <img src="images/staff06.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        <div class="staff">
                            <picture>
                                <source srcset="images/staff02.jpg" type="image/webp">
                                <img src="images/staff02.jpg" alt="" loading="lazy" class=""> 
                            </picture>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news-section" class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>News</h2>
                    </div>
                    <ul class="news-list">
                        <li class="">
                            <div class="news-type">Blog.</div>
                            <div class="news-content"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p></div>
                            <div class="news-cta"><a hre='' class="menu-link">view more</a></div>
                        </li>
                        <li class="">
                            <div class="news-type">Work.</div>
                            <div class="news-content"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p></div>
                            <div class="news-cta"><a hre='' class="menu-link">view more</a></div>
                        </li>
                        <li class="">
                            <div class="news-type">Lab.</div>
                            <div class="news-content"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p></div>
                            <div class="news-cta"><a hre='' class="menu-link">view more</a></div>
                        </li>
                        <li class="">
                            <div class="news-type">Tech.</div>
                            <div class="news-content"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p></div>
                            <div class="news-cta"><a hre='' class="menu-link">view more</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
              
    <?php require('./templates/footer.php'); ?>

</body>
</html>