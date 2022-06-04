<?php 
/*

    Template Name: WooCommerce Returns Page
*/
?>

<?php  

    // page variables
    $page_title = "Returns Policy - Cartoon Chris";    
    $html_title = "Our Returns Policy";
    $page_description = "Chris Bambrough is a cartoonist - Page Description";
    $page_keywords = "chris bambrough, painter, cartoonist, caricaturist";
    $page_image = "img/cartoons/cartoons-square.png";

    $page_url = "https://www.cartoonchris.co.uk";
    $main_class = "returns";

?>


<?php include "../inc/header.php" ?>


<section class="full-width-banner">

    <article class="intro-banner">
        
        <?php      
        
            $newimage_args = array(
        
                'post_type' => 'cartoon_examples'
        
            );
        
            $cartoon_examples = new WP_Query( $newimage_args );  
        
        ?>
    
        <?php if ( $cartoon_examples->have_posts() ) : while( $cartoon_examples->have_posts() ) : $cartoon_examples->the_post() ?>

            <h2> Returns Policy</span> </h2>

            <p> 
                
                <!-- 300 Chars -->
                Our website is run on a secure web server via the WooCommerce Platform. Please read below for all the information about how we manage your data.<br /><br />

            </p>  

    </article>

    <?php endwhile; else: ?>

        <p>There's no content for the Returns page.</p>

    <?php endif; ?>  

    <!-- Leading Page Image -->
    <?php echo the_post_thumbnail( 'full' ); ?>

</section> 


<section class="side-one">

    <article> 

        <?php require "template-parts/side-one/the-loop.php" ?>

    </article>
    
    <article class="cartoon-examples">

        <h2>Cartoon Examples </h2>

        <!-- Start Cartoon Examples Loop -->    
        <?php if ( $cartoon_examples->have_posts() ) : while( $cartoon_examples->have_posts() ) : $cartoon_examples->the_post() ?>
    

            <!-- Content goes here! -->  
            <?php if ( get_field( "image_1" ) ): ?>

            <a href="<?php the_field( "image_1" )?>" title="<?php the_field( "image_alt_1" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_1" ) ?>">

                <img src="<?php the_field( "image_1" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_2" ) ): ?>

            <a href="<?php the_field( "image_2" )?>" title="<?php the_field( "image_alt_2" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_2" ) ?>">

                <img src="<?php the_field( "image_2" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_3" ) ): ?>

            <a href="<?php the_field( "image_3" )?>" title="<?php the_field( "image_alt_3" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_3" ) ?>">

                <img src="<?php the_field( "image_3" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_4" ) ): ?>

            <a href="<?php the_field( "image_4" )?>" title="<?php the_field( "image_alt_4" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_4" ) ?>">

                <img src="<?php the_field( "image_4" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_5" ) ): ?>

            <a href="<?php the_field( "image_5" )?>" title="<?php the_field( "image_alt_5" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_5" ) ?>">

                <img src="<?php the_field( "image_5" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_6" ) ): ?>

            <a href="<?php the_field( "image_6" )?>" title="<?php the_field( "image_alt_6" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_6" ) ?>">

                <img src="<?php the_field( "image_6" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_7" ) ): ?>

            <a href="<?php the_field( "image_7" )?>" title="<?php the_field( "image_alt_1" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_7" ) ?>">

                <img src="<?php the_field( "image_7" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_8" ) ): ?>

            <a href="<?php the_field( "image_8" )?>" title="<?php the_field( "image_alt_8" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_8" ) ?>">

                <img src="<?php the_field( "image_8" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>    
            
            <?php if ( get_field( "image_9" ) ): ?>
                
            <a href="<?php the_field( "image_9" )?>" title="<?php the_field( "image_alt_9" ) ?>" data-lightbox="cartoons" data-title = "<?php the_field( "image_alt_9" ) ?>">

                <img src="<?php the_field( "image_9" ) ?>" class="example_cartoon" alt="Example... " title="Example... " />  
            </a>

            <?php endif; ?>

            <!-- If there are more custom fields to add, do it here!  -->

        <?php endwhile; else: ?>

            <p>There's no content for this part of the page</p>

        <?php endif; ?>  
        
    </article>

</section>

<section class="side-two">

    <?php require "template-parts/side-two/side-two.php"; ?>

</section>

<?php include "../inc/footer.php" ?>

