<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<div class="full-width bredcm">
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb font-12 font400">
            <li class="breadcrumb-item"> <a href="<?php echo home_url();?>">Home</a> </li>
            <li class="breadcrumb-item active" aria-current="page">
              all products
            </li>
          </ol>
        </nav>
      </div>
    </div>
	<div class="full-width allproduct-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-3 allproduct-area-lft">
            <div class="categories-section">
              <div class="title-cat">
                <h4 class="font-14 color-555 font-700">CATEGORIES</h4>
              </div>

              
              <div class="cat-in">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="false"
                        aria-controls="collapseOne"
                      >
                        <p>ALL PRODUCTS</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseOne"
                    class="collapse"
                    aria-labelledby="headingOne"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingtwo">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsetwo"
                        aria-expanded="false"
                        aria-controls="collapsetwo"
                      >
                        <p>DINNERWARE SETS</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsetwo"
                    class="collapse"
                    aria-labelledby="headingtwo"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingthree">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsethree"
                        aria-expanded="false"
                        aria-controls="collapsethree"
                      >
                        <p>COLLECTIONS</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsethree"
                    class="collapse"
                    aria-labelledby="headingthree"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfour">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsefour"
                        aria-expanded="false"
                        aria-controls="collapsefour"
                      >
                        <p>ECO FRIENDLY</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsefour"
                    class="collapse"
                    aria-labelledby="headingfour"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfive">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsefive"
                        aria-expanded="false"
                        aria-controls="collapsefive"
                      >
                        <p>SHOP BY COLOR</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsefive"
                    class="collapse"
                    aria-labelledby="headingfive"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingsix">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsesix"
                        aria-expanded="false"
                        aria-controls="collapsesix"
                      >
                        <p>furnitures</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsesix"
                    class="collapse"
                    aria-labelledby="headingsix"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header single-link">
                    <a href="#">CLEARANCE</a>
                  </div>
                </div>
            </div>
			<div class="refine-by">
              <h4 class="font-700 font-14 color-555 text-uppercase">
                REFINE BY
              </h4>
              <div class="no-filter text-center font-12 font400">
                <span>No filters applied</span>
              </div>
            </div>
			<div class="color-filter-area">
              <div class="cat-in">
                <div class="card">
                  <div class="card-header" id="headingseven">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapseseven"
                        aria-expanded="false"
                        aria-controls="collapseseven"
                      >
                        <p>Color</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseseven"
                    class="collapse"
                    aria-labelledby="headingseven"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <div class="color-check-box">
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />White <span>(114)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Gold <span>(89)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Black <span>(78)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Silver <span>(63)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Blue <span>(22)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Ivory <span>(18)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Clear <span>(16)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Green <span>(13)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Pink <span>(9)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Red <span>(9)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Orange <span>(4)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Purple <span>(2)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Rose Gold <span>(2)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Turquoise <span>(2)</span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label
                            class="form-check-label font-12 font-600 color-555"
                          >
                            <input
                              type="checkbox"
                              class="form-check-input"
                              value=""
                            />Yellow <span>(2)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingeight">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapseeight"
                        aria-expanded="false"
                        aria-controls="collapseeight"
                      >
                        <p>PRODUCT TYPE</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseeight"
                    class="collapse"
                    aria-labelledby="headingeight"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingnine">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsenine"
                        aria-expanded="false"
                        aria-controls="collapsenine"
                      >
                        <p>SHAPE</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsenine"
                    class="collapse"
                    aria-labelledby="headingnine"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingten">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapseten"
                        aria-expanded="false"
                        aria-controls="collapseten"
                      >
                        <p>SIZE</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseten"
                    class="collapse"
                    aria-labelledby="headingten"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingeleven">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapseeleven"
                        aria-expanded="false"
                        aria-controls="collapseeleven"
                      >
                        <p>MATERIAL</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseeleven"
                    class="collapse"
                    aria-labelledby="headingeleven"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingtwelve">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed font-14 font-700 color-555 text-uppercase"
                        data-toggle="collapse"
                        data-target="#collapsetwelve"
                        aria-expanded="false"
                        aria-controls="collapsetwelve"
                      >
                        <p>STYLE</p>
                        <i class="plus-icon"></i>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapsetwelve"
                    class="collapse"
                    aria-labelledby="headingtwelve"
                    data-parent="#accordion"
                    style=""
                  >
                    <div class="card-body">
                      <ul class="cat-list font-12 font400">
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Watch Fashion</a></li>
                        <li><a href="#">Tees, Knits &amp; Polos</a></li>
                        <li><a href="#">Pants &amp; Denim</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
