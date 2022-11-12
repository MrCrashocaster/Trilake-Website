<?php 

/*****************************************************
 Template Name: About Template
*****************************************************/

get_header(); ?>

<div id="about">

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

                    <div class="wrapper1200">

                        <?php if( have_rows('headline') ): ?>

                            <?php while( have_rows('headline') ): the_row(); ?>

                                <div class="heroHeadline animate__animated animate__fadeIn">

                                    <div class="h2"><span class="underlined-word"><?php if(get_sub_field('underlined_headline')) { the_sub_field('underlined_headline'); ?><div class="underline"></span></div><?php } ?></div>
                                    <div class="h2"> <?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?></div>

                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>

                    <div id="scrollButton" class="scrollButtonContainer">

                    <img class="animate__animated animate__pulse animate__infinite infinite" src="https://trilakeguideservice.com/wp-content/uploads/2022/05/scroll.png"/>

                </div>

                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div id="aboutSection">
        <?php if( have_rows('about_us') ): ?>
            <?php while( have_rows('about_us') ): the_row(); ?>
                <div class="aboutContainer">
                    <div class="imagesContainer">
                        <?php if( have_rows('team_members') ): ?>
                            <?php while( have_rows('team_members') ): the_row(); ?>
                                <?php if(get_sub_field('team_member_1')['url']) { ?>
                                    <div class="slide">
                                        <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="<?php the_sub_field('team_member_1')['url']; ?>" />
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('team_member_2')['url']) { ?>
                                    <div class="slide">
                                        <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="<?php the_sub_field('team_member_2')['url']; ?>" />
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('team_member_3')['url']) { ?>
                                    <div class="slide">
                                        <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="<?php the_sub_field('team_member_3')['url']; ?>" />
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('team_member_4')['url']) { ?>
                                    <div class="slide">
                                        <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="<?php the_sub_field('team_member_4')['url']; ?>" />
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('team_member_5')['url']) { ?>
                                    <div class="slide">
                                        <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="<?php the_sub_field('team_member_5')['url']; ?>" />
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('team_member_6')['url']) { ?>
                                    <div class="slide">
                                        <img data-parallax='{"y": -300, "distance": 4000, "smoothness": 20}' src="<?php the_sub_field('team_member_6')['url']; ?>" />
                                    </div>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="aboutContent">
                        <?php if( have_rows('story') ): ?>
                            <?php while( have_rows('story') ): the_row(); ?>
                                <?php if( have_rows('headline') ): ?>
                                    <?php while( have_rows('headline') ): the_row(); ?>
                                        <div class="h2 fade-left"><span class="underlined-word"><?php if(get_sub_field('underlined_headline')) { the_sub_field('underlined_headline'); ?> <div class="underline"></span></div><?php } ?></div>
                                        <div class="h2 fade-left"> <?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?></div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <p class="fade-left"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                <div class="button fade-left">
                                    <div class="btn">
                                        <div class="btnContent btnBorderDark">
                                            <a href="<?php if(get_sub_field('button_link')) { the_sub_field('button_link'); } ?>">
                                                <p class="white"><?php if(get_sub_field('button_text')) { the_sub_field('button_text'); } ?></p>
                                                <div class="btnImg"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php if( have_rows('cta_with_background') ): ?>
    <?php while( have_rows('cta_with_background') ): the_row(); ?>
        <div id="aboutCTA" style="background: url('<?php if(get_sub_field('background_image')['url']) { the_sub_field('background_image')['url']; } ?>') bottom no-repeat; background-size: cover; width: 100%;">
            <div class="wrapper1200">
                <div class="cardContent">
                    <div class="h2"><span class="underlined-word"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?><div class="underline"></span></div></div>
                    <div class="button">
                        <div class="btn">
                            <div class="btnContent btnBorderDark">
                                <a href="<?php if(get_sub_field('button_link')) { the_sub_field('button_link'); } ?>">
                                    <p class="white"><?php if(get_sub_field('button_text')) { the_sub_field('button_text'); } ?></p>
                                    <div class="btnImg"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div id="sponsors">
        <?php if( have_rows('sponsors') ): ?>
            <?php while( have_rows('sponsors') ): the_row(); ?>
                <div class="sponsorContainer">
                    <?php if( have_rows('sponsor_1') ): ?>
                        <?php while( have_rows('sponsor_1') ): the_row(); ?>
                            <div class="singleSponsor">
                                <a target="_blank" href="<?php if(get_sub_field('sponsor_link')) { the_sub_field('sponsor_link'); } ?>"><img src="<?php if(get_sub_field('sponsor_image')['url']) { the_sub_field('sponsor_image')['url']; } ?>" /></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('sponsor_2') ): ?>
                        <?php while( have_rows('sponsor_2') ): the_row(); ?>
                            <div class="singleSponsor">
                                <a target="_blank" href="<?php if(get_sub_field('sponsor_link')) { the_sub_field('sponsor_link'); } ?>"><img src="<?php if(get_sub_field('sponsor_image')['url']) { the_sub_field('sponsor_image')['url']; } ?>" /></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('sponsor_3') ): ?>
                        <?php while( have_rows('sponsor_3') ): the_row(); ?>
                            <div class="singleSponsor">
                                <a target="_blank" href="<?php if(get_sub_field('sponsor_link')) { the_sub_field('sponsor_link'); } ?>"><img src="<?php if(get_sub_field('sponsor_image')['url']) { the_sub_field('sponsor_image')['url']; } ?>" /></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('sponsor_4') ): ?>
                        <?php while( have_rows('sponsor_4') ): the_row(); ?>
                            <div class="singleSponsor">
                                <a target="_blank" href="<?php if(get_sub_field('sponsor_link')) { the_sub_field('sponsor_link'); } ?>"><img src="<?php if(get_sub_field('sponsor_image')['url']) { the_sub_field('sponsor_image')['url']; } ?>" /></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('sponsor_5') ): ?>
                        <?php while( have_rows('sponsor_5') ): the_row(); ?>
                            <div class="singleSponsor">
                                <a target="_blank" href="<?php if(get_sub_field('sponsor_link')) { the_sub_field('sponsor_link'); } ?>"><img src="<?php if(get_sub_field('sponsor_image')['url']) { the_sub_field('sponsor_image')['url']; } ?>" /></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="sponsorHeadline">
                    <div class="h2 dark subtext"><?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div id="customerPhotos">
        <div class="wrapper1200">
            <div class="customerPhotosContainer">
                <?php if( have_rows('customer_photos') ): ?>
                    <?php while( have_rows('customer_photos') ): the_row(); ?>
                        <div class="singleCustomer fade-up" style="background: url('<?php if(get_sub_field('customer_photo_1')['url']) { the_sub_field('customer_photo_1')['url']; } ?>') center top no-repeat; background-size: cover; height: 500px; width: 100%;">
                        </div>
                        <div class="singleCustomer fade-up" style="background: url('<?php if(get_sub_field('customer_photo_2')['url']) { the_sub_field('customer_photo_2')['url']; } ?>') center top no-repeat; background-size: cover; height: 500px; width: 100%;">
                        </div>
                        <div class="singleCustomer fade-up" style="background: url('<?php if(get_sub_field('customer_photo_3')['url']) { the_sub_field('customer_photo_3')['url']; } ?>') center top no-repeat; background-size: cover; height: 500px; width: 100%;">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div id="unparalledService" class="">
        <?php if( have_rows('text_left__image_right') ): ?>
            <?php while( have_rows('text_left__image_right') ): the_row(); ?>
                <div class="wrapper1200">
                    <div class="unparalledServiceContent">
                        <div class="unparalledCopyLeft">
                            <?php if( have_rows('text_left') ): ?>
                                <?php while( have_rows('text_left') ): the_row(); ?>
                                    <?php if( have_rows('headline') ): ?>
                                        <?php while( have_rows('headline') ): the_row(); ?>
                                            <div class="h2 fade-right"><span class="underlined-word"><?php if(get_sub_field('underlined_headline')) { the_sub_field('underlined_headline'); ?> <div class="underline"></span></div><?php } ?></div>
                                            <div class="h2 fade-right"> <?php if(get_sub_field('headline')) { the_sub_field('headline'); } ?></div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <p class="fade-right"><?php if(get_sub_field('body_copy')) { the_sub_field('body_copy'); } ?></p>
                                    <div class="button fade-right">
                                        <div class="btn">
                                            <div class="btnContent btnBorderDark">
                                                <a href="<?php if(get_sub_field('button_link')) { the_sub_field('button_link'); } ?>">
                                                    <p class="white"><?php if(get_sub_field('button_text')) { the_sub_field('button_text'); } ?></p>
                                                    <div class="btnImg"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="unparalledCopyRight">
                            <img class="fade-left" src="<?php if(get_sub_field('image_right')['url']) { the_sub_field('image_right')['url']; } ?>" />
                        </div>
                    </div> 
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
   
</div>

<?php get_footer(); ?>