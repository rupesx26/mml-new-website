
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="view">
                        <div class="logo">
                           <a href="/"> <img src="images/head-logo.png" alt="header__logo"> </a>
                        </div>
                        <div class="navicon"><i></i><i></i><i></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navigation-bg">
        <div class="navigation">
            <ul>
                <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'work' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="work.php" class="menu-link"> Work</a></li>
                <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'about' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="about.php" class="menu-link">About</a></li>
                <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'services' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="services.php" class="menu-link">Services</a></li>
                <li <?php if( basename($_SERVER['PHP_SELF'], '.php') == 'contact' ) { ?> class="active" <?php } else { ?> <?php }?>><a href="contact.php" class="menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="blend-area">
        <div class="blend-area-inside">
            <main id="page-wrapper">