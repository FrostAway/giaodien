<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>
<?php get_header(); ?>

<div class="clearfix"></div>
<div class="main-box">
    <div class="left-bar">
        <div class="bar-title"><a href="#"><i class="fa fa-shopping-cart"> </i> <span>Sản phẩm bán chạy</span></a></div>
        <ul class="featured-product">
            <li><a href="#">
                    <img src="assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
            <li><a href="#">
                    <img src="assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
            <li><a href="#">
                    <img src="assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
            <li><a href="#">
                    <img src="assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- end left bar -->

    <div class="content">

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
        
        </div>
    <!-- end content -->
</div>
<div class="clearfix"></div>
<!-- end main -->

<?php get_footer( 'shop' ); ?>