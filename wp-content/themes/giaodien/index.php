<?php get_header(); ?>
<?php include_once 'includes/slide.php'; ?>

<div class="main-box">
    <div class="left-bar">
        <div class="bar-title"><a href="#"><i class="fa fa-shopping-cart"> </i> <span>Sản phẩm bán chạy</span></a></div>
        <ul class="featured-product">
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-be-ben-trai-16.jpg" />
                    <span>Dụng cụ nhà bếp 250.000 đ</span>
                </a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- end left bar -->

    <div class="content">
        <div class="content-title">
            <h2><span><i class="fa fa-book"></i> Sách</span></h2>
        </div>
        <div class="main-content">
            <?php query_posts(array('taxonomy'=> 'product_cat', 'post_type'=>'product')); ?>
            <ul class="list-product">
                <?php if(have_posts()): while (have_posts()): the_post(); ?>
                    <li class="product">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>

                        <div class="price">
                            <span class="regular"><?php echo get_post_meta(get_the_ID(), '_regular_price', true).' '.  get_woocommerce_currency() ?></span>
                            <span class="sale"><?php echo get_post_meta(get_the_ID(), '_sale_price', true).' '.  get_woocommerce_currency() ?></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="add-to-cart">
                            <a href="#">Mua hàng</a>
                        </div>
                    </li>
                <?php endwhile; wp_reset_query(); endif; ?>
                    <div class="clearfix"></div>
            </ul>
            <div class="clearfix"></div>

        </div>
        <div class="banner-content">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/source/body/banner-18.jpg" /></a>
        </div>
        <!-- end main content -->
    </div>
    <!-- end content -->
</div>
<!-- end main box 1 -->
<div class="clearfix"></div>
<div class="main-box">
    <div class="left-bar">
        <div class="bar-title"><a href="#"><i class="fa fa-users"> </i> <span>Đối tác của chúng tôi</span></a></div>
        <ul class="list-partner">
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/partner.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-doi-tac-19.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/partner.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-doi-tac-19.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/partner.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-doi-tac-19.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/partner.jpg" />
                </a></li>
            <li><a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh-doi-tac-19.jpg" />
                </a></li>
        </ul>
    </div>
    <!-- end left bar -->
    <div class="content">
        <div class="content-title">
            <h2><span><i class="fa fa-camera"></i> Điện tử</span></h2>
        </div>
        <div class="main-content">
            <?php query_posts(array('taxonomy'=> 'product_cat', 'post_type'=>'product')); ?>
            <ul class="list-product">
                <?php if(have_posts()): while (have_posts()): the_post(); ?>
                    <li class="product">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>

                        <div class="price">
                            <span class="regular"><?php echo get_post_meta(get_the_ID(), '_regular_price', true).' '.  get_woocommerce_currency() ?></span>
                            <span class="sale"><?php echo get_post_meta(get_the_ID(), '_sale_price', true).' '.  get_woocommerce_currency() ?></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="add-to-cart">
                            <a href="#">Mua hàng</a>
                        </div>
                    </li>
                <?php endwhile; wp_reset_query(); endif; ?>
                    <div class="clearfix"></div>
            </ul>
            <div class="clearfix"></div>

        </div>
        <div class="banner-content">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/source/body/banner-18.jpg" /></a>
        </div>
        <!-- end main content -->
    </div>
    <!-- end content -->
</div>
<!-- end main box 2 -->

<div class="clearfix"></div>
<!-- end main -->

<?php get_footer(); ?>