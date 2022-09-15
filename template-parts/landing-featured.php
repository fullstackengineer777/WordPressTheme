    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php 
                    $loop = new WP_Query(array( 'category_name'=>'landing_featured', 'order_by'=>'post_id','order'=>'ASC'))
                ?>
                  
                <?php      
                    while($loop->have_posts()):
                    $loop->the_post();  
                    $post_id = $loop->post->ID;
                    $featured_img_url = get_the_post_thumbnail_url($post_id);
                ?>              
                    
                            <div class="col-12 col-md-4 mb-4">
                                <div class="card h-100">
                                    <a href="shop-single.html">
                                       <img src="<?php echo $featured_img_url; ?>" class="card-img-top" alt="...">
                                         <!-- the_post_thumbnail();  -->
                                    </a>
                                    <div class="card-body">
                                        <ul class="list-unstyled d-flex justify-content-between">
                                            <li>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-muted fa fa-star"></i>
                                                <i class="text-muted fa fa-star"></i>
                                            </li>
                                            <li class="text-muted text-right">$240.00</li>
                                        </ul>
                                        <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?php the_title(); ?></a>
                                        <p class="card-text">
                                           <?php the_content(); ?>
                                        </p>
                                        <p class="text-muted">Reviews (24)</p>
                                    </div>
                                </div>
                            </div>

                <?php endwhile; ?>
           

            </div>
        </div>
    </section>