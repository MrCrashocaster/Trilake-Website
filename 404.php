<?php get_header(); ?>

<div id="ctaContact" style="background: url('https://trilakeguideservice.com/wp-content/uploads/2021/12/pexels-cottonbro-4828253-min-e1646622391180.jpg') center top no-repeat; background-size: cover; width: 100%;">
    <div id="nav" class="nav">
        <div class="wrapper1200">
            <div class="navContent">
                <div class="navItems">
                    <div class="singleItem">
                        <a href="<?php echo get_home_url(); ?>" class="h4">Home</a>
                    </div>
                    <div class="singleItem">
                        <a href="/packages/" class="h4">Packages</a>
                    </div>
                    <div class="singleItem">
                        <a href="/about/" class="h4">About</a>
                    </div>
                    <div class="singleItem">
                        <a href="/contact/" class="h4">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mobileMenu">
        <div id="overlay-button"><span></span></div>
        <div id="overlay">
            <ul>
            <li><a class="cwm" href="<?php echo get_home_url(); ?>">Home</a></li>
            <li><a class="cwm" href="/packages/">Packages</a></li>
            <li><a class="cwm" href="/about/">About</a></li>
            <li><a class="cwm" href="/contact/">Contact</a></li>
            </ul>
        </div>
    </div>    
    <div class="wrapper1200">
        <div class="card">
            <div class="cardContent">
                <div class="h2"><span class="underlined-word">404<div class="underline"></span></div></div>
                <div class="h2"> Error</div>
                    <p class="dark">Oh no! The page you requested does not exist. Use the navigation bar or contact us for help.
                    </p>
                    <div class="button">
                            <div class="btn">
                                <div class="btnContent btnBorderDark">
									<a href="/contact">
										<p class="dark">Contact</p>
										<div class="btnImg"></div>
									</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>