<?php

/* Template Name:Home

*/

?>

<?php
get_header();
?>

<!-- banner-area -->
<div class="full-width banner-panel">
        <div class="cart-slider-area">
          <div class="cart-slider"><img class="object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/banner.jpg" alt="banner"></div>
          <div class="cart-slider"><img class="object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/banner.jpg" alt="banner"></div>
          <div class="cart-slider"><img class="object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/banner.jpg" alt="banner"></div>
        </div>
      </div>
      <!-- banner-area -->

      <!-- banner-bottom-area -->
      <div class="full-width suplyer-panal">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 supplyer-in">
              <div class="suppler-box text-center" style="display: flex; flex-wrap: wrap;">
                <div class="woocommerce-categories" style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px;">
    <?php 
    $category_slugs = array('gold-party-supplies', 'plastic-wine-glasses', 'furniture'); // Specify the category slugs

    // Loop through each slug
    foreach ($category_slugs as $category_slug) {
        // Check if the category exists
        $category_exists = term_exists($category_slug, 'product_cat');
        if ($category_exists !== 0 && $category_exists !== null) { // Check if the term exists and is not a top-level term
            // Get the term object
            $category = get_term_by('slug', $category_slug, 'product_cat');
    ?>
            <div class="suplyer-content color-black font-400 font-13" style="text-align: center;">
                <div class="">
                    <?php
                    $image_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    // Output category image if available
                    if ($image_id) {
                        echo wp_get_attachment_image($image_id, 'custom-size'); // Use custom image size
                    }
                    ?>
              </div>
              <div class="color-black font-400 font-13">
                  <h4 class="suplyer-content color-black font-20 font-700 text-uppercase"><?php echo $category->name;?> </h4>
                  <p><?php echo $category->description;?></p>
                  <button onclick="location.href='all-product.html'" class="shop-now-button background-blue font-13 font-700 color-white text-uppercase">Shop Now</button>
            
              </div>
        </div>
    <?php
        }
    }
    ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- banner-bottom-area -->


      <!-- featured-product-section -->
      <div class="full-width featured-product-pnl text-center">
        <div class="container-fluid">
                          
          <div class="header-title text-center"><h4 class="font-20 font-700 color-black text-uppercase">Featured Products</h4></div>
            <div class="full-width featured-area">

            <!-- start 1st product -->
                    <div class="col-md col-12 featured-box text-center">
                        <div class="full-width featured-box-in">
                        <span class="sale font-700 font-11 color-red background-white text-uppercase border-red">SALE</span>
                        <span class="on-one font-600 font-15 color-white background-blue">#1</span>
                        <span class="off-dis font-600 font-13 color-white background-red">40% off</span>
                        <div class="featured-box-img">
                            <div class="transition5s addtocart-hover-pnl">
                                <a href="<?php the_permalink(); ?>" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart-hover-icon.png">
                                </a>
                                <a href="<?php the_permalink(); ?>" class="cart-hover-dv search-plus"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-icon-hover.png"></a>
                                <a href="<?php the_permalink(); ?>" class="cart-hover-dv wishlist"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wish-list-icon-hover.png"></a>           
                            </div>
                            <?php echo $image_url ?>
                        </div>
                        <div class="featured-box-info font-12 font-400 color-black">
                            <p><?php echo $product->get_short_description() ?></p>
                            <!-- <div class="rating"><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/rating-img.jpg" alt="rating"> <span>5 reviews</span></div> -->
                            <a class="seemore font-600 font-12 color-white background-blue text-uppercase" href="<?php the_permalink(); ?>">See More</a>
                        </div>
                        </div>
                    </div> 
                    <!-- end 1st product -->
      <!-- best-seller-section -->
      <div class="full-width featured-product-pnl best-seller-pnl text-center">
        <div class="container-fluid">
          <div class="header-title text-center"><h4 class="font-20 font-700 color-black text-uppercase">Best Sellers</h4></div>
            <div class="full-width best-seller-area">
              <div class="col-md col-12 featured-box text-center">
                <div class="full-width featured-box-in">
                  <span class="sale font-700 font-11 color-red background-white text-uppercase border-red">SALE</span>
                  <span class="on-one font-600 font-15 color-white background-blue">#1</span>
                  <span class="off-dis font-600 font-13 color-white background-red">40% off</span>
                  <div class="featured-box-img">
                    <div class="transition5s addtocart-hover-pnl">
                     
                      <a href="javascript:void(0)" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cart-hover-icon.png">
                      </a>
                      <a href="" class="cart-hover-dv search-plus"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus-icon-hover.png"></a>
                      <a href="" class="cart-hover-dv wishlist"><img src="<?php echo get_template_directory_uri();?>/assets/images/wish-list-icon-hover.png"></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/best-seller-1.jpg" alt="featured-img">
                  </div>
                  <div class="featured-box-info font-12 font-400 color-black">
                    <p>Palm Leaf 3.5" Square Eco Friendly Mini Disposable Sample Plates</p>
                    <div class="rating"><img src="<?php echo get_template_directory_uri();?>/assets/images/rating-img.jpg" alt="rating"> <span>5 reviews</span></div>
                    <a class="seemore font-600 font-12 color-white background-blue text-uppercase" href="product-details.html">See More</a>
                  </div>
                </div>
              </div>
              <div class="col-md col-12 featured-box text-center">
                <div class="full-width featured-box-in">
                  
                  <div class="featured-box-img">
                    <div class="transition5s addtocart-hover-pnl">
                     
                      <a href="javascript:void(0)" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cart-hover-icon.png">
                      </a>
                      <a href="" class="cart-hover-dv search-plus"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus-icon-hover.png"></a>
                      <a href="" class="cart-hover-dv wishlist"><img src="<?php echo get_template_directory_uri();?>/assets/images/wish-list-icon-hover.png"></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/best-seller-2.jpg" alt="featured-img">
                  </div>
                  <div class="featured-box-info font-12 font-400 color-black">
                    <p>Palm Leaf 3.5" Square Eco Friendly Mini Disposable Sample Plates</p>
                    <div class="rating"><img src="<?php echo get_template_directory_uri();?>/assets/images/rating-img.jpg" alt="rating"> <span>5 reviews</span></div>
                    <a class="seemore font-600 font-12 color-white background-blue text-uppercase" href="product-details.html">See More</a>
                  </div>
                </div>
              </div>
              <div class="col-md col-12 featured-box text-center">
                <div class="full-width featured-box-in">
                  
                  <div class="featured-box-img">
                    <div class="transition5s addtocart-hover-pnl">
                     
                      <a href="javascript:void(0)" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cart-hover-icon.png">
                      </a>
                      <a href="" class="cart-hover-dv search-plus"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus-icon-hover.png"></a>
                      <a href="" class="cart-hover-dv wishlist"><img src="<?php echo get_template_directory_uri();?>/assets/images/wish-list-icon-hover.png"></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/best-seller-3.jpg" alt="featured-img">
                  </div>
                  <div class="featured-box-info font-12 font-400 color-black">
                    <p>Palm Leaf 3.5" Square Eco Friendly Mini Disposable Sample Plates</p>
                    <div class="rating"><img src="<?php echo get_template_directory_uri();?>/assets/images/rating-img.jpg" alt="rating"> <span>5 reviews</span></div>
                    <a class="seemore font-600 font-12 color-white background-blue text-uppercase" href="product-details.html">See More</a>
                  </div>
                </div>
              </div>
              <div class="col-md col-12 featured-box text-center">
                <div class="full-width featured-box-in">
                  <div class="featured-box-img">
                    <div class="transition5s addtocart-hover-pnl">
                     
                      <a href="javascript:void(0)" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cart-hover-icon.png">
                      </a>
                      <a href="" class="cart-hover-dv search-plus"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus-icon-hover.png"></a>
                      <a href="" class="cart-hover-dv wishlist"><img src="<?php echo get_template_directory_uri();?>/assets/images/wish-list-icon-hover.png"></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/best-seller-4.jpg" alt="featured-img">
                  </div>
                  <div class="featured-box-info font-12 font-400 color-black">
                    <p>Palm Leaf 3.5" Square Eco Friendly Mini Disposable Sample Plates</p>
                    <div class="rating"><img src="<?php echo get_template_directory_uri();?>/assets/images/rating-img.jpg" alt="rating"> <span>5 reviews</span></div>
                    <a class="seemore font-600 font-12 color-white background-blue text-uppercase" href="product-details.html">See More</a>
                  </div>
                </div>
              </div>
              <div class="col-md col-12 featured-box text-center">
                <div class="full-width featured-box-in">
                  <div class="featured-box-img">
                    <div class="transition5s addtocart-hover-pnl">
                     
                      <a href="javascript:void(0)" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cart-hover-icon.png">
                      </a>
                      <a href="" class="cart-hover-dv search-plus"><img src="<?php echo get_template_directory_uri();?>/assets/images/plus-icon-hover.png"></a>
                      <a href="" class="cart-hover-dv wishlist"><img src="<?php echo get_template_directory_uri();?>/assets/images/wish-list-icon-hover.png"></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/featured-product1.jpg" alt="featured-img">
                  </div>
                  <div class="featured-box-info font-12 font-400 color-black">
                    <p>Palm Leaf 3.5" Square Eco Friendly Mini Disposable Sample Plates</p>
                    <div class="rating"><img src="<?php echo get_template_directory_uri();?>/assets/images/rating-img.jpg" alt="rating"> <span>5 reviews</span></div>
                    <a class="seemore font-600 font-12 color-white background-blue text-uppercase" href="product-details.html">See More</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <!-- best-seller-section -->

      <!-- value-banner -->
      <div class="full-width value-banner">
        <div class="value-banner-in">
          <div class="value-banner-img">
            <div class="overlay"></div>
<img class="object-cover" src="<?php echo get_field('home_image');?>" alt="banner">
          </div>
        </div>
        <div class="container value-banner-content">
          <div class="row justify-content-center align-items-center">
            <div class="text-center value-banner-info-main color-black-light font-13 font-600">
             
              <h2 class="color-blue font-36 font-900 text-uppercase"><?php echo get_field('home_image_title');?></h2>
              <?php echo get_field('home_image_content');?>
             
            </div>
          </div>
        </div>
      </div>
      <!-- value-banner -->

<!-- review-section -->
<div class="full-width featured-product-pnl review-section text-center">
    <div class="container-fluid">
        <div class="header-title text-center">
            <h4 class="font-20 font-700 color-black text-uppercase">Real Reviews from Real Customers</h4>
        </div>
        <div class="full-width review-area">

            <?php

            $products = wc_get_products(array('status' => 'publish'));

            foreach ($products as $product) {
                // Get the product details
                $product_id = $product->get_id();
                $product_title = $product->get_name();
                $product_image = $product->get_image();

                $comments = get_comments(
                    array(
                        'post_id' => $product_id,
                        'status' => 'approve', // only approved comments
                        'type' => 'review',  // only comments marked as reviews
                        'number' => 1,         // limit to one comment per product
                    )
                );

                // Display each comment (review) along with the commenter's name
                // Output commenter's name and review content
                ?>
                <div class="col-md col-12 review-box">
                    <div class="full-width review-box-in">

                        <div class="rating"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-small.jpg"
                                alt="rating"> <span class="review-count font-12 color-black font-400">12589 Reviews</span>
                        </div>
                        <div class="review-content-pnl text-left">
                            <h4 class="font-600 font-20 color-black"><?php echo $product_title; ?></h4>
                            <div class="row">
                                <div class="col-sm-4 rev-cl-lf">
                                    <div class="review-pnl-img border-gray">
                                        <div class="review-img-sec text-center"><?php echo $product_image; ?>"
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8 rev-cl-rg">
                                    <div class="content-in-rev font-italic color-gray font-14 font-400 text-left">
                                        <?php
                                        if ($comments) {
                                            foreach ($comments as $comment) {
                                                ?>

                                                <p><?php echo esc_html($comment->comment_content); ?></p>
                                                <span
                                                    class="color-blk-dv font-14 font-600"><?php echo esc_html($comment->comment_author); ?></span>
                                                <?php
                                            }


                                        } else {
                                            echo '<p>No reviews found for this product.</p>';
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rev-list-itm font-11 font-400 color-blk-dv">
                            <p><?php echo $product_title; ?></p>
                        </div>
                    </div>
                </div>


                <?php
            }

            // Restore original post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- review-section -->

<?php

get_footer();

?>