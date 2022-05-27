
<?php  

    // page variables
    $page_title = "JGDM WordPress Selectors"; 
    $html_title = "JGDM WordPress Selectors";
    $page_description = "";
    $page_keywords = "";
    $page_image = "";
    $twitter_card = "jgdm_woocommerce-selectors";

    $page_url = "https://www.jonniegrieve.co.uk";

?>


<?php include "template-parts/inc/header.php" ?>

<?php

    // WP Query
    $banner_args = array(

        'post_type' => '',
        'post_count' => 6

    );

    $banners = new WP_Query( $banner_args );  

?>   

    <h1>JGDM WooCommerce Selectors</h1>

    <a href="/jgdm-woocommerce-selectors/shop" class="shop_title" target="blank">Shop</a>

    <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

    <div class="content_container">

        <h2> <?php the_title();  ?> </h2>

        <p> <?php the_content(); ?> </p>
        
    </div>

    <?php endwhile; else: ?>

        <p>No Content Available</p>

    <?php endif; ?>  
        

<?php include "template-parts/inc/footer.php" ?> 

<?php echo "index.php"; ?>


