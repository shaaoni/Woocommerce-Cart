<?php

/* Template Name:Home

*/

?>

<?php get_header(); ?>
<?php
function get_average_product_rating($product_id)
{
    global $wpdb;
    $rating_sum = $wpdb->get_var("
        SELECT SUM(meta_value)
        FROM {$wpdb->commentmeta} cm
        INNER JOIN {$wpdb->comments} c ON c.comment_ID = cm.comment_id
        WHERE c.comment_post_ID = $product_id
        AND cm.meta_key = 'rating'
        AND c.comment_approved = 1
    ");
    $rating_count = $wpdb->get_var("
        SELECT COUNT(*)
        FROM {$wpdb->commentmeta} cm
        INNER JOIN {$wpdb->comments} c ON c.comment_ID = cm.comment_id
        WHERE c.comment_post_ID = $product_id
        AND cm.meta_key = 'rating'
        AND c.comment_approved = 1
    ");
    if ($rating_count > 0) {
        return round($rating_sum / $rating_count, 1);
    } else {
        return 0;
    }
}
?>
<!-- banner-area -->
<div class="full-width banner-panel">
    <div class="cart-slider-area">
        <div class="cart-slider"><img class="object-cover"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="banner"></div>
        <div class="cart-slider"><img class="object-cover"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="banner"></div>
        <div class="cart-slider"><img class="object-cover"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="banner"></div>
    </div>
</div>
<!-- banner-area -->

<!-- banner-bottom-area -->

<div class="full-width suplyer-panal">
    <div class="container-fluid">
        <div class="row">
            <?php
            $args = array(
                'orderby' => 'slug',
                'order' => 'ASC',
            );
            $categories = get_terms('product_cat', $args);
            $count = 1;
            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
                    $category_link = get_term_link($category);
                    if ($count <= 3) {
                        ?>
                        <div class="col-md-4 supplyer-in">
                            <div class="suppler-box text-center">
                                <a href="<?php echo esc_url($category_link); ?>">

                                    <div class="suplyer-box-img ">
                                        <?php
                                        // Output category image
                                        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                        $image = wp_get_attachment_url($thumbnail_id);

                                        if ($image) {
                                            echo '<img class="object-cover" src="' . esc_url($image) . '" alt="' . esc_attr($category->name) . '" />';
                                        }
                                        ?>
                                    </div>
                                    <div class="suplyer-content color-black font-400 font-13">
                                        <h4 class="color-black font-20 font-700 text-uppercase">
                                            <?php
                                            // Output category title
                                            echo esc_html($category->name);
                                            ?>
                                        </h4>
                                        <p><?php
                                        // Output category description
                                        echo esc_html($category->description);
                                        ?></p>
                                        <button onclick="location.href='<?php echo esc_url($category_link); ?>'"
                                            class="shop-now-button background-blue font-13 font-700 color-white text-uppercase"><?php echo get_field('shop_now'); ?></button>
                                        <!-- . esc_html($category->name); -->
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php }
                    $count++;
                }
            }
            ?>

        </div>
    </div>
</div>
<!-- banner-bottom-area -->


<!-- featured-product-section -->
<div class="full-width featured-product-pnl text-center">
    <div class="container-fluid">
        <div class="header-title text-center">
            <h4 class="font-20 font-700 color-black text-uppercase"><?php echo get_field('featured_title'); ?></h4>
        </div>
        <div class="full-width featured-area">
            <?php
            $args = array(
                'status' => 'publish',
                'limit' => -1,
                'visibility' => 'visible',
                'featured' => true,
            );

            $featured_products = wc_get_products($args);
            $count_sale_product = 0;
            if ($featured_products) {
                foreach ($featured_products as $product) {
                    $image_id = $product->get_image_id();
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); // Change 'full' to the image size you prefer
                    $product_id = $product->get_id();
                    $product_title = get_the_title($product_id);
                    $product_permalink = get_permalink($product_id);
                    $regular_price = $product->get_regular_price();
                    $sale_price = $product->get_sale_price();

                    $count_rating = $wpdb->get_var("
                    SELECT COUNT(*)
                    FROM {$wpdb->commentmeta} cm
                    INNER JOIN {$wpdb->comments} c ON c.comment_ID = cm.comment_id
                    WHERE c.comment_post_ID = $product_id
                    AND cm.meta_key = 'rating'
                    AND c.comment_approved = 1
                ");
                    $average_rating = get_average_product_rating($product_id);
                    $full_stars = floor($average_rating);
                    $decimal_part = $average_rating - $full_stars;

                    if ($decimal_part > 0) {
                        // If there's a decimal part, show one less blank star
                        $blank_stars = 4 - $full_stars;
                    } else {
                        $blank_stars = 5 - $full_stars - 1;
                    }
                    ?>
                    <div class="col-md col-12 featured-box text-center">
                        <div class="full-width featured-box-in">
                            <?php
                            if ($product->is_on_sale()) {
                                if (!empty($sale_price) && !empty($regular_price)) {
                                    $count_sale_product++;
                                    $percatage_off = (($regular_price - $sale_price) / $regular_price) * 100;
                                    $sale = round($percatage_off, 0);
                                    ?>
                                    <span
                                        class="sale font-700 font-11 color-red background-white text-uppercase border-red"><?php echo get_field('sale'); ?></span>
                                    <span
                                        class="on-one font-600 font-15 color-white background-blue"><?php echo $count_sale_product; ?></span>
                                    <span
                                        class="off-dis font-600 font-13 color-white background-red"><?php echo $sale . ' ' . get_field('percentage_off'); ?></span>
                                    <?php
                                }
                            }
                            ?>
                            <div class="featured-box-img">
                                <div class="transition5s addtocart-hover-pnl">
                                    <a href="" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart" data-product-id="<?php echo $product_id; ?>">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/cart-hover-icon.png">
                                    </a>

                                    <!-- <a href="" class="cart-hover-dv search-plus">
                                        <img
                                            src="<?php //echo get_template_directory_uri(); ?>/assets/images/plus-icon-hover.png">
                                    </a> -->
                                    <?php echo do_shortcode('[woo_quick_view]');?>

                                    <div class="cart-hover-dv wishlist" data-tinvwl_product_id="<?php echo $product_id; ?>">
                                        <div class="tinv-wishlist-clear">
                                            <a role="button" tabindex="0" name="add-to-wishlist" aria-label="Add to Wishlist"
                                                class=" cart-hover-dv wishlist tinvwl_add_to_wishlist_button tinvwl-icon-heart tinvwl-position-after tinvwl-loop"
                                                data-tinv-wl-list="[]" data-tinv-wl-product="<?php echo $product_id; ?>"
                                                data-tinv-wl-productvariation="0" data-tinv-wl-productvariations="[]"
                                                data-tinv-wl-producttype="simple" data-tinv-wl-action="addto">
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/wish-list-icon-hover.png"></a>
                                        </div>
                                    </div>

                                </div>
                                <img src="<?php echo $image_url ?>" alt="featured-img">
                            </div>
                            <div class="featured-box-info font-12 font-400 color-black">
                                <p><?php echo $product_title; ?></p>
                                <div class="rating">

                                    <?php for ($i = 0; $i < $full_stars; $i++) { ?>
                                        <span style="color:gold; font-size: 22px;"><i class="fa fa-star"
                                                aria-hidden="true"></i></span>
                                    <?php }
                                    if ($decimal_part > 0) {
                                        ?>
                                        <span style="color:gold; font-size: 22px;"><i class="fa fa-star-half-o"
                                                aria-hidden="true"></i></span>
                                        <?php
                                    }
                                    ?>
                                    <?php for ($i = 0; $i < $blank_stars; $i++) { ?>
                                        <span style="color:gold; font-size: 22px;"><i class="fa fa-star-o"
                                                aria-hidden="true"></i></span>
                                    <?php } ?>
                                    <span><?php echo ' ' . $count_rating . ' ' . get_field('reviews');
                                    ; ?></span>
                                </div>
                                <a class="seemore font-600 font-12 color-white background-blue text-uppercase"
                                    href="<?php echo $product_permalink; ?>"><?php echo get_field('see_more'); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- featured-product-section -->

<!-- best-seller-section -->
<div class="full-width featured-product-pnl best-seller-pnl text-center">
    <div class="container-fluid">
        <div class="header-title text-center">
            <h4 class="font-20 font-700 color-black text-uppercase"><?php echo get_field('best_seller_title'); ?></h4>
        </div>
        <div class="full-width best-seller-area">
            <?php
            $args = array(
                'status' => 'publish',
                'limit' => -1,
                'visibility' => 'visible',
                '_is_best_seller' => 'yes',
            );

            $best_sellers_query = wc_get_products($args);
            // Display best seller products
            $count_sale_product = 0;
            if ($best_sellers_query) {
                foreach ($best_sellers_query as $product) {
                    $image_id = $product->get_image_id();
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); // Change 'full' to the image size you prefer
                    $product_id = $product->get_id();
                    $product_title = get_the_title($product_id);
                    $product_permalink = get_permalink($product_id);
                    $regular_price = $product->get_regular_price();
                    $sale_price = $product->get_sale_price();

                    $count_rating = $wpdb->get_var("
                    SELECT COUNT(*)
                    FROM {$wpdb->commentmeta} cm
                    INNER JOIN {$wpdb->comments} c ON c.comment_ID = cm.comment_id
                    WHERE c.comment_post_ID = $product_id
                    AND cm.meta_key = 'rating'
                    AND c.comment_approved = 1
                ");

                    $average_rating = get_average_product_rating($product_id);
                    $full_stars = floor($average_rating);
                    $decimal_part = $average_rating - $full_stars;

                    if ($decimal_part > 0) {
                        // If there's a decimal part, show one less blank star
                        $blank_stars = 4 - $full_stars;
                    } else {
                        $blank_stars = 5 - $full_stars - 1;
                    }
                    ?>

                    <div class="col-md col-12 featured-box text-center">
                        <div class="full-width featured-box-in">
                            <?php
                            if ($product->is_on_sale()) {
                                if (!empty($sale_price) && !empty($regular_price)) {
                                    $count_sale_product++;
                                    $percatage_off = (($regular_price - $sale_price) / $regular_price) * 100;
                                    $sale = round($percatage_off, 0);
                                    ?>
                                    <span
                                        class="sale font-700 font-11 color-red background-white text-uppercase border-red"><?php echo get_field('sale'); ?></span>
                                    <span
                                        class="on-one font-600 font-15 color-white background-blue"><?php echo $count_sale_product; ?></span>
                                    <span
                                        class="off-dis font-600 font-13 color-white background-red"><?php echo $sale . ' ' . get_field('percentage_off'); ?></span>
                                    <?php
                                }
                            }
                            ?>

                            <div class="featured-box-img">
                                <div class="transition5s addtocart-hover-pnl">

                                    <a href="#" class="cart-hover-dv cart-add" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart" data-product-id="<?php echo $product_id; ?>">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart-hover-icon.png">
                                    </a>
                                    <!-- <a class="woo-quick-view-button"> -->
                                        <?php echo do_shortcode('[woo_quick_view]');?>
                                    <!-- </a> -->
                                    
                                    <!-- <a href="" class="cart-hover-dv wishlist" data-product-id="<?php //echo $product_id; ?>"><img
                                            src="<?php //echo get_template_directory_uri(); ?>/assets/images/wish-list-icon-hover.png">
                                    </a> -->
                                    <div class="cart-hover-dv wishlist" data-tinvwl_product_id="<?php echo $product_id; ?>">
                                        <div class="tinv-wishlist-clear">
                                            <a role="button" tabindex="0" name="add-to-wishlist" aria-label="Add to Wishlist"
                                                class=" cart-hover-dv wishlist tinvwl_add_to_wishlist_button tinvwl-icon-heart tinvwl-position-after tinvwl-loop"
                                                data-tinv-wl-list="[]" data-tinv-wl-product="<?php echo $product_id; ?>"
                                                data-tinv-wl-productvariation="0" data-tinv-wl-productvariations="[]"
                                                data-tinv-wl-producttype="simple" data-tinv-wl-action="addto">
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/wish-list-icon-hover.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <img src="<?php echo $image_url ?>" alt="featured-img">
                            </div>
                            <div class="featured-box-info font-12 font-400 color-black">
                                <p><?php echo $product_title; ?></p>
                                <div class="rating">
                                    <?php for ($i = 0; $i < $full_stars; $i++) { ?>
                                        <span style="color:gold; font-size: 22px;"><i class="fa fa-star"
                                                aria-hidden="true"></i></span>
                                    <?php }
                                    if ($decimal_part > 0) {
                                        ?>
                                        <span style="color:gold; font-size: 22px;"><i class="fa fa-star-half-o"
                                                aria-hidden="true"></i></span>
                                        <?php
                                    }
                                    ?>
                                    <?php for ($i = 0; $i < $blank_stars; $i++) { ?>
                                        <span style="color:gold; font-size: 22px;"><i class="fa fa-star-o"
                                                aria-hidden="true"></i></span>
                                    <?php } ?>
                                    <span><?php echo ' ' . $count_rating . ' ' . get_field('reviews'); ?></span>
                                </div>
                                <a class="seemore font-600 font-12 color-white background-blue text-uppercase"
                                    href="<?php echo $product_permalink; ?>"><?php echo get_field('see_more'); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
            } else {
                echo 'No best seller products found.';
            }
            ?>
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
            <img class="object-cover" src="<?php echo get_field('home_image'); ?>" alt="banner">
        </div>
    </div>
    <div class="container value-banner-content">
        <div class="row justify-content-center align-items-center">
            <div class="text-center value-banner-info-main color-black-light font-13 font-600">

                <h2 class="color-blue font-36 font-900 text-uppercase"><?php echo get_field('home_image_title'); ?></h2>
                <?php echo get_field('home_image_content'); ?>

            </div>
        </div>
    </div>
</div>
<!-- value-banner -->

<!-- review-section -->
<div class="full-width featured-product-pnl review-section text-center">
    <div class="container-fluid">
        <div class="header-title text-center">
            <h4 class="font-20 font-700 color-black text-uppercase"><?php echo get_field('customer_review'); ?></h4>
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

                $count_rating = $wpdb->get_var("
                    SELECT COUNT(*)
                    FROM {$wpdb->commentmeta} cm
                    INNER JOIN {$wpdb->comments} c ON c.comment_ID = cm.comment_id
                    WHERE c.comment_post_ID = $product_id
                    AND cm.meta_key = 'rating'
                    AND c.comment_approved = 1
                ");

                $average_rating = get_average_product_rating($product_id);
                $full_stars = floor($average_rating);
                $decimal_part = $average_rating - $full_stars;

                if ($decimal_part > 0) {
                    // If there's a decimal part, show one less blank star
                    $blank_stars = 4 - $full_stars;
                } else {
                    $blank_stars = 5 - $full_stars - 1;
                }
                ?>

                <div class="col-md col-12 review-box">
                    <div class="full-width review-box-in">
                        <div class="rating">
                            <span>
                                <?php for ($i = 0; $i < $full_stars; $i++) { ?>
                                    <span style="color:gold; font-size: 22px;"><i class="fa fa-star"
                                            aria-hidden="true"></i></span>
                                <?php }
                                if ($decimal_part > 0) {
                                    ?>
                                    <span style="color:gold; font-size: 22px;"><i class="fa fa-star-half-o"
                                            aria-hidden="true"></i></span>
                                    <?php
                                }
                                ?>
                                <?php for ($i = 0; $i < $blank_stars; $i++) { ?>
                                    <span style="color:gold; font-size: 22px;"><i class="fa fa-star-o"
                                            aria-hidden="true"></i></span>
                                <?php } ?>
                            </span>
                            <span
                                class="review-count font-12 color-black font-400"><?php echo ' ' . $count_rating . ' ' . get_field('reviews'); ?>
                            </span>
                        </div>
                        <div class="review-content-pnl text-left">
                            <h4 class="font-600 font-20 color-black"><?php echo $product_title; ?></h4>
                            <div class="row">
                                <div class="col-sm-4 rev-cl-lf">
                                    <div class="review-pnl-img border-gray">
                                        <div class="review-img-sec text-center"><?php echo $product_image; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8 rev-cl-rg">
                                    <div class="content-in-rev font-italic color-gray font-14 font-400 text-left">
                                        <?php
                                        //Output the product review if available
                                        if ($comments) {
                                            $comment = $comments[0]; // Get the first comment
                                            foreach ($comments as $comment) {
                                                ?>

                                                <p>
                                                    <?php echo esc_html($comment->comment_content); ?>
                                                </p>
                                                <span class="color-blk-dv font-14 font-600">
                                                    <?php echo esc_html($comment->comment_author); ?>
                                                </span>
                                                <?php
                                            }
                                        } else {
                                            // Output if no reviews found for this product
                                            echo '<div class="col-md col-12 review-box"><p>No reviews found for this product.</p></div>';
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