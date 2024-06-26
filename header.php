<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<?php

function get_wishlist_item_count()
{

   // Get current user ID
   $user_id = get_current_user_id();
   //echo esc_attr( $user_id );

   // Check if user is logged in
// if ($user_id) {
   // Get wishlist items for the current user
   $wishlist_items = get_user_meta($user_id, 'wishlist', true);
   echo $wishlist_items;
   //  if (is_string($wishlist_items)) {
   $wishlist_items = json_decode($wishlist_items, true);
   //   }

   // Check if wishlist items exist
   //  if (!empty($wishlist_items)) {
   if (($wishlist_items !== false) && is_array($wishlist_items)) {
      // Count the number of wishlist items
      $wishlist_count = count($wishlist_items);
      echo $wishlist_count;

      // Output the wishlist count
      return $wishlist_count;
   } else {
      // Output if wishlist is empty
      echo 'Wishlist is empty';
      //return 0;
   }
   // } else {
//     // Output if user is not logged in
//     echo 'Please log in to view your wishlist';
// }

}


?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <link rel="profile" href="https://gmpg.org/xfn/11">

   <meta charset="utf-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custome.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
      rel="stylesheet">
   <title>Value Cart :: Homepage</title>
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

   <nav class="navbar navbar-expand-lg fixed-top cart-custom-nav background-white header_main">
      <div class="full-width main-menu-area">
         <div class="full-width top-part text-center background-black">
            <div class="container-fluid">
               <div class="top-part-in font-15 font-400 color-white">
                  <p>MADNESS CLEARANCE SALE <span>TAKE 25% OFF SITEWIDE</span> + FREE SHIPPING OVER $149 <span>USE
                        CODE</span> CLEARANCE25 | </p>
               </div>
            </div>
         </div>
         <div class="country-login-area countryMobile">
            <div class="lag-drop-pnl">
               <div class="dropdown selectCountry">
                  <button class="selectCountryButn" type="button" data-toggle="dropdown"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets//images/cad-icon.png"> CAD
                  </button>
                  <ul class="dropdown-menu font_14px font400">
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cad-icon.png">
                           CAD</a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cad-icon.png">
                           English</a></li>
                  </ul>
               </div>
            </div>
            <div class="login-reg font-13 font-400">
               <a data-toggle="modal" data-target="#exampleModalCenter" href="">Login or Register</a>
            </div>
         </div>
         <div class="full-width main-menu">
            <div class="container-fluid">
               <div class="top-nav-cart-pnl">
                  <div class="resMenuLeft">
                     <button class="navbar-toggler res_menu_icon" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                     </button>

                     <div class="logo-pnl">
                        <a class="navbar-brand logo" href="<?php echo home_url(); ?>"><img
                              src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo"></a>
                     </div>
                  </div>


                  <div class="nav-area-right">

                     <div class="nav-menu-main">

                        <div class="collapse navbar-collapse cart-nav-panel" id="navbarSupportedContent">
                           <ul class="navbar-nav mr-auto font-14 font400 color-black text-uppercase">
                              <li class="nav-item  dropdown active">
                                 <a class="nav-link" href="all-product.html" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">search by
                                    categories</a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo home_url('shop');?>">All Product</a>
                                    <a class="dropdown-item" href="<?php echo home_url('wishlist');?>">Wishlist</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo home_url('about-us'); ?>">About Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo home_url('contact'); ?>">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo home_url(); ?>">How it Works</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo home_url('shop'); ?>">SHOP</a>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <div class="search-nav">
                        <div class="search_icon"><img
                              src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.png"></div>
                        <div class="search_form">
                           <form class="form-inline my-2 my-lg-0">
                              <input class="form-control sch-input" type="search" placeholder="Search"
                                 aria-label="Search">
                              <button class="btn sech-bttn" type="submit"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.png"></button>
                           </form>
                        </div>
                     </div>


                     <div class="country-login-area countryDesktop">
                        <div class="lag-drop-pnl">
                           <div class="dropdown selectCountry">
                              <button class="selectCountryButn" type="button" data-toggle="dropdown"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/cad-icon.png"> CAD
                              </button>
                              <ul class="dropdown-menu font_14px font400">
                                 <li><a href="#"><img
                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/cad-icon.png">
                                       CAD</a></li>
                                 <li><a href="#"><img
                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/cad-icon.png">
                                       English</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="login-reg font-13 font-400"><a data-toggle="modal" data-target="#exampleModalCenter"
                              href="">Login or Register</a></div>
                     </div>

                     <div id="wishlisht">

                        <a href="<?php echo home_url('wishlist'); ?>">
                        <i id='hart_icon' class="fa fa-heart-o" aria-hidden="true"> </i>
                        <?php
                        $wishlist_shortcode = do_shortcode('[ti_wishlist_products_counter]');
                        $wvalue = strval($wishlist_shortcode);
                        $wvalue = substr($wishlist_shortcode, 253);
                        ?>
                        <span id="wishlist_text">
                           WISHLIST
                           <span class="font-400">
                              <?php echo $wvalue; ?>
                           </span>
                        </span>
                        </a>
                     </div>
                     <div class="cart">
                        <div class="cart-in" id="custom-mini-cart">
                           <?php echo do_shortcode('[custom_techno_mini_cart]'); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>
   <div class="full-width header-height"></div>