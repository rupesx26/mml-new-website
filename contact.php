<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./templates/pageHeader.php'); ?> 
</head>
<body>
<?php require('./templates/bodyHeader.php'); ?>
                <section class="page-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>Contact.</h2>
                                </div>
                                <div class="section-para">
                                    <p> Keep in touch for the latest insights, knowledge seminars, industry trends and every new development within the Makemelive World.
</p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </section>
                <!-- contact form start -->
                <section class="about-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-offset-lg-2">
                                <div class="contact-form-wrapper">
                                    <!-- <div class="section-contact-title">
                                        <h2>Contact Us</h2>
                                    </div> -->
                                    <form id="contact-form" method="post" action="contact.php" role="form">
                                        <div class="messages"></div>
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_name">First name *</label>
                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name." required="required" data-error="First name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Last name *</label>
                                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name." required="required" data-error="Last name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_email">Email *</label>
                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email." required="required" data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_phone">Phone *</label>
                                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number." required="required">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_message">Message *</label>
                                                        <textarea is="form_message" name="message" class="form-control" placeholder="Please type your message." rows="4" required="required" data-error="Please, type your message."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="button-wrap">
                                                        <input type="submit" class="btn btn-success btn-sent" value="Send message">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- contact form end -->
                
                <section class="dark-bg about-company">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <h4>Company</h4>
                                <ul class="list">
                                    <li><span class="key">Company Name </span> <span>:</span> <span class="value">Makemelive Technologies LLP</span></li>
                                    <li><span class="key">Establisbed </span> <span>:</span> <span class="value">26.09.2016</span></li>
                                    <li><span class="key">Directors </span> <span>:</span> <span class="value">Sharik Shaikh and Rupesh Mayekar</span></li>
                                    <li><span class="key">Business activities </span> <span>:</span> <span class="value">Digital Solution, SEO Consultation, Entity Setup</span></li>
                                    <li><span class="key">Address </span> <span>:</span> <span class="value">Heena Arcade, 17, DN Ghosh Road, Collectors colony, <br/>Momin Nagar, Jogeshwari, Mumbai, Maharashtra 400102</span></li>
                                    <li><span class="key">Contact </span> <span>:</span> <span class="value">091673 52347</span></li>
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
                                    <span class="page-name">Services</span>
                                </a>
                                <div class="cta-img">
                                    <img src="images/mml-vector-2.png" alt='mml' />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    <?php require('./templates/footer.php'); ?>
</body>
</html>