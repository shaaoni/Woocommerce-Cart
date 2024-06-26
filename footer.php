<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<div class="full-width footer-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-5 col-12">
        <div class="full-width stay-conected">
          <h5 class="font-13 font-700 color-white">STAY CONNECTED</h5>
          <div class="social-media-area">
            <div class="social-media-in">
              <a class="social-media facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a class="social-media twiter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a class="social-media instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a class="social-media youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </div>
            <div class="facebook-feeds">
              <h5 class="font-11 font-700 color-white">LIKE US on FACEBOOK</h5>
              <div class="like-share-pnl">
                <a href=""><span class="like font-11 font-700 color-white">Like 7.5k</span></a>
                <a href=""><span class="font-11 font-700 color-white">Share</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="full-width subscribe-section">
          <h5 class="font-13 font-700 color-white">KEEP ME UP TO DATE ON NEWS AND EXCLUSIVE OFFERS</h5>
          <div class="full-width subscribe-pnl">
            <div class="subscribe-input">
              <input class="scb-input" type="text" placeholder="Enter your email address" name="">
              <button class="subcrb-btn">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="full-width suqure-img-section">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/secure-img.png" alt="sequre-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-rating-img.png" alt="sequre-img">
        </div>
      </div>
      <div class="col-xl-8 col-lg-7 col-md-7 col-12">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-link">
              <h5 class="font-13 font-700 color-white text-uppercase">CUSTOMER SERVICE</h5>
              <ul class="font-12 font-400 color-white">
                <li><a href="">Customer Reviews</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Returns Policy</a></li>
                <li><a href="">Help & FAQs</a></li>
                <li><a href="">Gift Certificates</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-link">
              <h5 class="font-13 font-700 color-white text-uppercase">INFORMATION</h5>
              <ul class="font-12 font-400 color-white">
                <li><a href="">Blog</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Shipping</a></li>
                <li><a href="">Sitemap</a></li>
                <li><a href="">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-link">
              <h5 class="font-13 font-700 color-white text-uppercase">SHOP</h5>
              <ul class="font-12 font-400 color-white">
                <li><a href="">All Products</a></li>
                <li><a href="">Dinnerware Sets</a></li>
                <li><a href="">Collections</a></li>
                <li><a href="">Eco Friendly</a></li>
                <li><a href="">Shop By Color</a></li>
                <li><a href="">Clearance</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copy-right-sec font-12 font-400 color-white">
              <p>© 2021 valuecart.ca All Rights Reserved.</p>
              <p>Disclaimer: Computer and monitor configurations, resolutions, and other hardware and software can
                affect how colors look on your screen. We have put an effort into displaying the colors of our products
                ccurately, however, variations may occur and products' colors may appear different in-person.</p>
              <p>**Free ground shipping for orders over $149 applies to the 48 United States only.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade customer-login-pnl" id="exampleModalCenter" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-icon-popup.jpg"></span>
      </button>
      <div class="modal-body">
        <div class="full-width customer-login-pnl text-center">
          <div class="customer-login-logo"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
          </div>
        </div>
        <div class="full-width customer-login-area text-center">
          <h3 class="font-700 font-20 color-black text-uppercase">CUSTOMER LOGIN</h3>
          <div class="full-width customer-login-frm text-center">
            <form id="contact-form" method="post" action="" role="form">
              <div class="full-width customer-login-input-pnl">
                <input class="customer-login-input" type="text" placeholder="Email Address" name="">
              </div>
              <div class="customer-login-input-pnl">
                <input class="customer-login-input" type="Password" placeholder="Password" name="">
              </div>
              <a href="#">Forgot your password?</a>
              <div class="clearfix"></div>
              <div class="full-width customer-login-sbmt-btn">
                <button class="sbmit-btn-logn">LOG IN</button>
              </div>
              <div class="full-width dont-have-account">
                <a class="register-nw" href="create-account.html">Don’t have an account? <span>Register now</span></a>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>

  jQuery(document).ready(function ($) {
    // Add to cart AJAX
    $('body').on('click', '.cart-add', function (e) {
      e.preventDefault();
      var product_id = $(this).data('product-id');
      $.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        datatype: "json",
        //contentType: "application/json; charset=utf-8",
        data: {
          'action': 'add_to_cart',
          'product_id': product_id,
        },
        success: function (response) {
          //var parsed_data = JSON.parse(response);
          // Update mini cart content
          //console.log(response);
          // if (response.fragments) {
          //     jQuery.each(response.fragments, function(key, value) {
          //         jQuery(key).replaceWith(value);

          //     });
          // }
          jQuery('#cart_quantity').text(response + ' Item');

          // Update cart quantity in the header
          //if (response.cart_quantity !== undefined) {
          //$('.font-400').text(response.cart_quantity);
          //}

          // Update mini cart in the header
          //if (response.mini_cart_html !== undefined) {
          //$('#custom-mini-cart').html(response.mini_cart_html);
          // }
        }
      });
    });
  });
</script>

<script>
  jQuery(function ($) {
    $('.wc-block-cart-item__remove-link').click(function (e) {
      e.preventDefault();
      alert('Are you sure you want to remove this item from your cart?');
      var product_id = $(this).data('product-id');
      $.ajax({
        type: 'POST',
        url: wc_add_to_cart_params.ajax_url,
        dataType: "json",
        data: {
          'action': 'remove_cart_item',
          'product_id': product_id,
        },
        success: function (response) {
          jQuery('#cart_quantity').text(response + ' Item');
        }
      });
    });
  });
</script>

<script>
function updateCart(input) {
    var cartKey = input.id.split('_')[1];
    var quantity = input.value;

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'POST',
        data: {
            action: 'update_cart_quantity',
            cart_key: cartKey,
            quantity: quantity
        },
        success: function(response) {
            // Update the cart count displayed on the page
            jQuery('#cart_quantity').text(response);
        }
    });
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('update_cart_button').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Loop through each product row in the cart
        document.querySelectorAll('tbody tr').forEach(function(item) {
            var quantity = item.querySelector('.qty').value; // Get the quantity
            var price = parseFloat(item.querySelector('.price-per-product').innerText.replace(/\$/g, '')); // Get the price per product
            var subtotal = quantity * price; // Calculate the subtotal
            item.querySelector('.cart_total_column').innerText = '$' + subtotal.toFixed(2); // Update the subtotal
        });
    });
});
</script>



<?php wp_footer(); ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custome.js"></script>



</body>

</html>