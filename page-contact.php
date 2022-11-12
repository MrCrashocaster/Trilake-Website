<?php 

/*****************************************************
 Template Name: Contact Template
*****************************************************/

get_header(); ?>


<div id="contact">
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>   

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <?php if( have_rows('hero') ): ?>
        <?php while( have_rows('hero') ): the_row(); ?>

            <div id="packagesHero" style="background: url('<?php if(get_sub_field('background_image')['url']) { the_sub_field('background_image')['url']; } ?>') center top no-repeat; background-size: cover; height: 100vh; width: 100%;">

                <div class="heroOverlay"></div>

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

                <div class="heroContent">

                    <?php if( have_rows('headline') ): ?>
                        <?php while( have_rows('headline') ): the_row(); ?>

                            <div class="wrapper1200">

                                <div class="heroHeadline animate__animated animate__fadeIn">

                                    <div class="h1"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?> <span class="red"><?php if(get_sub_field('red_headline')) { the_sub_field('red_headline'); } ?></span></div>

                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                    <div id="scrollButton" class="scrollButtonContainer">

                    <img class="animate__animated animate__pulse animate__infinite infinite" src="https://trilakeguideservice.com/wp-content/uploads/2022/05/scroll.png"/>


                </div>

                </div>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>

    <div id="contactContent">
        <?php if( have_rows('contact_information') ): ?>
            <?php while( have_rows('contact_information') ): the_row(); ?>
                <div class="wrapper1200">
                    <div class="contactContainer">
                        <div id="contactForm" class="contactForm">
                            <?php if( have_rows('contact_form') ): ?>
                                <?php while( have_rows('contact_form') ): the_row(); ?>
                                    <?php if( have_rows('headline') ): ?>
                                        <?php while( have_rows('headline') ): the_row(); ?>
                                            <div class="formHeadline animate__animated animate__fadeIn">
                                                <div class="h2 cwm"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?> <span class="red"><?php if(get_sub_field('red_headline')) { the_sub_field('red_headline'); } ?></span></div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="contactInfoContainer">
                            <?php if( have_rows('contact_information_section') ): ?>
                                <?php while( have_rows('contact_information_section') ): the_row(); ?>
                                    <?php if( have_rows('contact_information_section_headline') ): ?>
                                        <?php while( have_rows('contact_information_section_headline') ): the_row(); ?>
                                            <div class="h2"><span class="underlined-word"><?php if(get_sub_field('underlined_headline')) { the_sub_field('underlined_headline'); ?><div class="underline"></span></div><?php } ?></div>
                                            <div class="h2 dark subtext"> <?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?></div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php if( have_rows('contact_information') ): ?>
                                        <?php while( have_rows('contact_information') ): the_row(); ?>
                                            <p class="dark"><strong>Location:</strong> <?php if(get_sub_field('location')) { the_sub_field('location'); } ?></p>
                                            <p class="dark"><strong>Phone:</strong> <a href="tel:<?php if(get_sub_field('phone')) { the_sub_field('phone'); } ?>" class="dark"><?php if(get_sub_field('phone')) { the_sub_field('phone'); } ?></a></p>
                                            <p class="dark"><strong>Email:</strong> <a href="mailto:<?php if(get_sub_field('email')) { the_sub_field('email'); } ?>" class="dark"><?php if(get_sub_field('email')) { the_sub_field('email'); } ?></a></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>