<?php
/**
 * The template for displaying Author info
 *
 * @package WordPress
 * @subpackage MYTHEME
 * @since 602
 */
?>
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <?php
            $the_query = new WP_Query(array('category_name' => 'landing_category', 'posts_per_page' => 3));
            if( $the_query->have_posts()){
                while($the_query->have_posts()):
                    $the_query->the_post();
                $post_id = $the_query->post->ID;
                $featured_img_url = get_the_post_thumbnail_url($post_id);
        ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#">
                  <img src="<?php echo $featured_img_url; ?>" class="rounded-circle img-fluid border">
                </a>
                <h5 class="text-center mt-3 mb-3"><?php the_title(); ?></h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>

        <?php endwhile; ?>
        <?php } ?>
    </div>
</section>