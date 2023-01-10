<?php




//******************** Shortcode Add ****************** */


// Home Shortode

add_shortcode('home', 'home_theme_shortcode');

function home_theme_shortcode($atts, $content ){

    $attributes = extract(shortcode_atts(array(
        'bg'            => '',
        'title'         => 'Simple App that we CREATE',
        'button_url'    => '#',
        'button'        =>  'KNOW US BETTER',
    ),$atts));



        ob_start();?>
            <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome" style="background-image: url(<?php echo $bg;?>);">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <h1><?php echo $title;?></h1>
                    <p><?php echo do_shortcode($content);?></p> 
                    <a href="<?php echo $button_url;?>" class="main-button-slider"><?php echo $button;?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->




        <?php return ob_get_clean();
}



// About Shortcode

add_shortcode('about', 'about_theme_func');

function about_theme_func(){

    ob_start();?>


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">

                <?php 
                
                $posts = new WP_Query(array(
                    'post-type' => 'posts'
                ));
                
                while($posts->have_posts()) : $posts->the_post();?>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            
                            <?php the_post_thumbnail();?>
                            <h4><?php the_title();?></h4>
                            <p>
                                <?php 
                                echo wp_trim_words(get_the_content(), '15', '...')
                                ;?>
                            </p>
                            <a href="<?php the_permalink();?>" class="main-button">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

              <?php endwhile;?>

            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <?php return ob_get_clean();


}


// Feature Shortcode

add_shortcode('feature', 'feature_theme_short');

function feature_theme_short($attr){

    $attributes = extract(shortcode_atts(array(
        'bg'        => '',
        'leftimg'   =>  '',

        'topicon'   =>  '',
        'toptitle'  =>  'Vestibulum pulvinar rhoncus',
        'toptext'   =>  'Please do not redistribute this template ZIP file for a download purpose. You may us for
    additional licensing of our template or to get a PSD file.',

    'middleicon'   =>  '',
    'middletitle'  =>  'Vestibulum pulvinar rhoncus',
    'middletext'   =>  'Please do not redistribute this template ZIP file for a download purpose. You may us for
additional licensing of our template or to get a PSD file.',


    'buttomicon'   =>  '',
    'buttomtitle'  =>  'Vestibulum pulvinar rhoncus',
    'buttomtext'   =>  'Please do not redistribute this template ZIP file for a download purpose. You may us for
    additional licensing of our template or to get a PSD file.',



    ), $attr ));

    ob_start();?>

<div class="left-image-decor" style="background-image: url(<?php echo $bg;?>);"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php echo $leftimg;?>" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="<?php echo $topicon;?>" alt="">
                            <div class="text">
                                <h4><?php echo $toptitle;?></h4>
                                <p><?php echo $toptext;?></p>
                            </div>
                        </li>

                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="<?php echo $middleicon;?>" alt="">
                            <div class="text">
                                <h4><?php echo $middletitle;?></h4>
                                <p><?php echo $middletext;?></p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="<?php echo $buttomicon;?>" alt="">
                            <div class="text">
                                <h4><?php echo $buttomtitle;?></h4>
                                <p><?php echo $buttomtext;?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <?php return ob_get_clean();
}






// Testmonial Shortcode

add_shortcode('testmonials', 'test_theme_short');

function test_theme_short($attr){

    $attributes = extract(shortcode_atts(array(
        'bg'        =>  '',
        'title'     =>  'What They Think About Us',
        'subtitle'  =>  'Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
        Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.'
    ) , $attr));

    ob_start();?>

<div class="right-image-decor"></div>

<!-- ***** Testimonials Starts ***** -->
<section class="section" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="center-heading">
                    <h2>What They Think <em>About Us</em></h2>
                    <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                        Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                </div>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            
                <?php 
                $count = 0;
                
                if($count==1) :?>
                    <div class="owl-carousel owl-theme">
                <?php else :?>
                    <div class="owl-carousel">
                
                <?php endif;?>


            <?php 
            
            $test = new WP_Query(array(
                'post_type' =>  'testmonial'
            ));

     
            
            while($test->have_posts()) : $test->the_post(); $count++?>

               

        
                        <div class="item service-item">
                            <div class="author">
                                <i><?php the_post_thumbnail(array(120,120));?></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4><?php the_title();?></h4>
                                <?php the_content();?>
                                <span><?php echo get_post_meta(get_the_id(), 'subtitle', true);?></span>
                            </div>
                        </div>
                      
                   
                <?php endwhile;?>
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->




    <?php return ob_get_clean();


}