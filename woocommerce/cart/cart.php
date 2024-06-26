<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
	<?php do_action('woocommerce_before_cart_table'); ?>

	<!-- cart start -->
	<div class="full-width checkout-panel cart-p">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-sm-12 col-12 cart-pLeft">
					<div class="astimated-amount-in">
						<h3 class="font-20 font-700 color-black text-uppercase cart-pLeftTtl">My Cart <span>(<?php echo WC()->cart->get_cart_contents_count();?> Items)</span></h3>



						<table class="table" cellspacing="0">
							<!-- shop_table shop_table_responsive cart woocommerce-cart-form__contents  -->
							<thead>
								<tr>

									<!-- <th class="product-thumbnail"><span
											class="screen-reader-text"><?php //esc_html_e('Thumbnail image', 'woocommerce'); ?></span>
									</th> -->
									<th><?php esc_html_e('Product', 'woocommerce'); ?></th>
									<!-- class="product-name" -->
									<th><span><?php esc_html_e('Price', 'woocommerce'); ?></span></th>
									<!-- class="product-price" -->
									<th><?php esc_html_e('Quantity', 'woocommerce'); ?></th>
									<!-- class="product-quantity" -->
									<th><span><?php esc_html_e('Total', 'woocommerce'); ?></span></th>
									<!-- class="product-subtotal" -->
									<th><span
											class="screen-reader-text"><?php esc_html_e('Remove item', 'woocommerce'); ?></span>
									</th>
									<!-- class="product-remove" -->
								</tr>
							</thead>
							<tbody>
								<?php do_action('woocommerce_before_cart_contents'); ?>

								<?php
								foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
									$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
									$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
									/**
									 * Filter the product name.
									 *
									 * @since 2.1.0
									 * @param string $product_name Name of the product in the cart.
									 * @param array $cart_item The product in the cart.
									 * @param string $cart_item_key Key for the product in the cart.
									 */
									$product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

									if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
										 $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
										?>

										<tr>
											<!-- class="woocommerce-cart-form__cart-item <?php //echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>" -->

											<!-- <td class="product-thumbnail">
												<?php
												// $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
										
												// if (!$product_permalink) {
												// 	echo $thumbnail; // PHPCS: XSS ok.
												// } else {
												// 	printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
												// }
												?>
											</td> -->
											<!-- product name start -->
											<td class="product_name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
												<!-- class="product-name" -->
												<?php
												if (!$product_permalink) {
													echo wp_kses_post($product_name . '&nbsp;');
												} else {
													/**
													 * This filter is documented above.
													 *
													 * @since 2.1.0
													 */
													echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<span><a href="%s">%s</a></span>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
												}

												do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);


												// Meta data.
												// echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.
										
												// Backorder notification.
												// if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
												// 	echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p>' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
												// }
												if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
													echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p>' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
												}
												?>
												<!-- class="backorder_notification" -->
											</td>
											<!-- product name end -->

											<!-- price start -->
											<!-- class="product-price" -->
											<td data-title="<?php esc_attr_e('Price', 'woocommerce');?>">
												<?php
												// echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
												echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
												?>
											</td>
											<!-- price end -->
											<!-- quantity start -->
											<td data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
												<!-- class="product-quantity" -->
											<span><input type="number" id="quantity_<?php echo $cart_item_key;?>" class="input-text qty"
											name="cart[<?php echo $cart_item_key;?>][qty]" value="<?php echo $cart_item['quantity'];?>" aria-label="Product quantity" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off" onchange="updateCart(this)"></span>
												<?php
												// if ($_product->is_sold_individually()) {
												// 	$min_quantity = 1;
												// 	$max_quantity = 1;
												// } else {
												// 	$min_quantity = 0;
												// 	$max_quantity = $_product->get_max_purchase_quantity();
												// }

												// $product_quantity = woocommerce_quantity_input(
												// 	array(
												// 		'input_name' => "cart[{$cart_item_key}][qty]",
												// 		'input_value' => $cart_item['quantity'],
												// 		'max_value' => $max_quantity,
												// 		'min_value' => $min_quantity,
												// 		'product_name' => $product_name,
												// 	),
												// 	$_product,
												// 	false
												// );
												?>
												<!-- <div class="dsgnPrj-FrmRow">
													<div class="full-width dsgnPrj-FrmRow_in">
														<div id="form_name">
															<?php //echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok ?>
														</div>
													</div>
												</div> -->
												<?php
												// if ($_product->is_sold_individually()) {
												// 	$min_quantity = 1;
												// 	$max_quantity = 1;
												// } else {
												// 	$min_quantity = 0;
												// 	$max_quantity = $_product->get_max_purchase_quantity();
												// }
										
												// $product_quantity = woocommerce_quantity_input(
												// 	array(
												// 		'input_name' => "cart[{$cart_item_key}][qty]",
												// 		'input_value' => $cart_item['quantity'],
												// 		'max_value' => $max_quantity,
												// 		'min_value' => $min_quantity,
												// 		'product_name' => $product_name,
												// 	),
												// 	$_product,
												// 	false
												// );
										
												// echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
												?>
											</td>
											<!-- quantity end -->

											<!-- total start -->
											<td data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>" class="cart_total_column">
												<!-- class="product-subtotal" -->
												<?php
												echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
												?>
											</td>
											<!-- total end -->

											<!-- remove start -->
											<td>
												<!-- class="product-remove" -->
												<?php
												echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
													'woocommerce_cart_item_remove_link',
													sprintf(
														'<a href="%s" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remove</a>',
														// class="remove"
														esc_url(wc_get_cart_remove_url($cart_item_key)),
														/* translators: %s is the product name */
														esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
														esc_attr($product_id),
														esc_attr($_product->get_sku())
													),
													$cart_item_key
												);
												?>
											</td>
											<!-- remove end -->
										</tr>
										<?php
									}
								}

								?>
								<?php do_action('woocommerce_cart_contents'); ?>
							</tbody>
						</table>

						<!-- <td colspan="6" class="actions"> -->
						<div class="full-width cart-pLeftCoupon">
							<div class="row">
								<div class="col-lg-6 col-sm-12 col-12">
									<form id="contact-form" method="post" action="" role="form">
										<div class="full-width design-projectFrmPart">
											<!-- below table start -->
											<div class="row coupon-apply-update-cart-div">
												<?php if (wc_coupons_enabled()) { ?>
													<!-- coupon code -->
													<div class="col-sm-5 col-12 dsgnPrj-FrmRow">



														<div class="full-width dsgnPrj-FrmRow_in couponcode">

															<!-- <label for="coupon_code">
																				<?php //esc_html_e('Coupon:', 'woocommerce'); ?>
																				class="screen-reader-text"
																			</label> -->
															<input type="text" name="coupon_code" id="coupon_code" value=""
																placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" />
															<!-- class="input-text" -->

															<!-- <input id="form_name" class="coupon-input" type="text" name="name"
																				placeholder="Coupon code"> -->
														</div>

													</div>
													<!-- end coupon code -->
													<!-- apply coupon -->
													<div class="col-sm-4 col-12 dsgnPrj-FrmRow applycpn-cd">
														<div class="full-width dsgnPrj-FrmRow_in">

															<!-- replace -->
															<button type="submit" name="apply_coupon"
																class="btn-cmmn apply-coupon-btn text-uppercase radius-5 font-12 font-700 full-width"
																value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon code', 'woocommerce'); ?>
															</button>
															<!-- class="button<?php //echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" -->

															<?php do_action('woocommerce_cart_coupon'); ?>
															<!-- <button
																						class="btn-cmmn apply-coupon-btn text-uppercase radius-5 font-12 font-700 full-width">Apply
																						Coupon code</button> -->
															<!-- replace -->

														</div>
													</div>
													
													<!-- apply coupon end-->
												

												<!-- update cart start -->
												<div class="col-sm-3 col-12 dsgnPrj-FrmRow">
													<div class="full-width dsgnPrj-FrmRow_in update-cart">

														<!-- replace -->
														<button type="submit"
															id="update_cart_button"
															class="btn-cmmn update-cart-button text-uppercase radius-5 font-12 font-700 full-width"
															name="update_cart"
															value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>">
														  <?php esc_html_e('Update cart', 'woocommerce'); ?>
													   </button>

														<!-- class="button<?php //echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" -->


														<?php do_action('woocommerce_cart_actions'); ?>

														<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>


														<!-- <button
																			class="btn-cmmn update-cart-button text-uppercase radius-5 font-12 font-700 full-width">Update
																			cart</button> -->
														<!-- replace -->

													</div>
												</div>
												<!-- update cart start -->
												<?php } ?>
											</div>
											<!-- below table end -->
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="full-width cart-pLeftCoupon cart-save-area">
							<div class="row">
								<div class="col-lg-6 col-sm-12 col-12">
									<form id="contact-form" method="post" action="" role="form">
										<div class="full-width design-projectFrmPart">
											<div class="row">
												<div class="col-sm-5 col-12 dsgnPrj-FrmRow">
													<div class="full-width dsgnPrj-FrmRow_in save-share">

														<button
															class="save-share-btn text-uppercase color-white font-12 font-700 full-width">Save
															&
															Share cart</button>

													</div>
												</div>
											</div>

										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- <td colspan="6" class="actions">

										<?php
										// if (wc_coupons_enabled()) { 
										?>
											<div>
												 class="coupon" -->
						<!-- <label for="coupon_code"
													class="screen-reader-text"><?php //esc_html_e('Coupon:', 'woocommerce'); ?></label>
												<input type="text" name="coupon_code" class="input-text" id="coupon_code"
													value=""
													placeholder="<?php //esc_attr_e('Coupon code', 'woocommerce'); ?>" />
												<button type="submit"
													class="button<?php //echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
													name="apply_coupon"
													value="<?php //esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php //esc_html_e('Apply coupon', 'woocommerce'); ?>
												</button> -->
						<?php //do_action('woocommerce_cart_coupon'); ?>
						<!-- </div> -->
						<?php
						// } 
						?>

						<!-- <button type="submit"
											class="button<?php //echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
											name="update_cart"
											value="<?php //esc_attr_e('Update cart', 'woocommerce'); ?>"><?php //esc_html_e('Update cart', 'woocommerce'); ?></button> -->

						<?php //do_action('woocommerce_cart_actions'); ?>

						<?php //wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
						<!-- </td> -->




						<?php //do_action('woocommerce_after_cart_contents'); ?>



					</div>
				</div>

				<div class="col-lg-4 col-sm-12 col-12 checkout-rgt cartRight">
					<div class="astimated-amount-in">
						<h4 class="font-16 font-700">Summary</h4>
						<table class="table table-chek">


							<?php do_action('woocommerce_after_cart_table'); ?>
							<?php do_action('woocommerce_before_cart_collaterals'); ?>

							<div class="cart-collaterals">
								<?php
								/**
								 * Cart collaterals hook.
								 *
								 * @hooked woocommerce_cross_sell_display
								 * @hooked woocommerce_cart_totals - 10
								 */
								do_action('woocommerce_cart_collaterals');
								?>
								<div class="clearfix"></div>
								<div class="cart-rgt-btn-area">
									<!-- <div class="chkout-btn-in">
										<button onclick="location.href='<?php home_url('checkout');?>'"
											class="btn-cmmn chkout-btn text-uppercase color-white font-12 font-700 full-width">checkout
										</button>
									</div> -->
									<div class="">
										<a href="<?php echo home_url('shop');?>"
											class="conitue-shopping-button btn-cmmn continue-shopping text-uppercase color-white font-12 font-700 full-width">Continue Shopping
										</a>
									</div>
								</div>
							</div>

							<?php //do_action('woocommerce_after_cart'); ?>
						</table>
						<!-- <div class="clearfix"></div> -->

						<!-- <div class="cart-rgt-btn-area">
							<div class="chkout-btn-in">
								<button onclick="location.href='checkout.html'"
									class="btn-cmmn chkout-btn text-uppercase color-white font-12 font-700 full-width">checkout
								</button>
							</div>
							<div class="continue-shopping-in">
								<a href="all-product.html"
									class="btn-cmmn continue-shopping text-uppercase color-white font-12 font-700 full-width">Continue
									Shopping
								</a>
							</div>
						</div> -->

					</div>
				</div>








			</div>
		</div>
	</div>



</form>

<?php //do_action('woocommerce_before_cart_collaterals'); ?>

<!-- <div class="cart-collaterals">
	<?php
	/**
	 * Cart collaterals hook.
	 *
	 * @hooked woocommerce_cross_sell_display
	 * @hooked woocommerce_cart_totals - 10
	 */
	//do_action('woocommerce_cart_collaterals');
	?> -->
</div>

<?php //do_action('woocommerce_after_cart'); ?>