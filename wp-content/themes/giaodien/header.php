<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/slide-bar.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.elevatezoom.js"></script>
        
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div id="container">
            <div id="top-menu">
                <div class="nav-right">
                    <ul>
                        <li class="account"><i class="fa fa-user"></i> <a href="#">Tài khoản</a>
                            <ul>
                                <li><a href="#">Đăng nhập</a></li>
                                <li><a href="#">Đăng ký</a></li>
                            </ul>
                        </li>
                        <li class="account"><i class="fa fa-wrench"></i> <a href="#">Cài đặt</a></li>
                    </ul>
                </div>
            </div>
            <!-- end top menu -->
            <div id="header">
                <div id="logo"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/source/homepage/header/logo-02.png" /></a></div>
                <div id="top-search-form">
                    <form>
                        <input type="text" value="" class="text-search" name="text-search" placeholder="Tìm kiếm" />
                        <button class="btn-search" name="btn-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="check-out"><a href=""><i class="fa fa-dollar"> </i> Thanh toán</a></div>
                <div class="shopping-cart"><a href="#"><i class="fa fa-shopping-cart"> </i> Giỏ hàng</a></div>
                <div class="clearfix"></div>
            </div>
            <!-- end header -->

            <div id="main-menu">
                <div class="ver-menu">
                    <h3><i class="fa fa-navicon"></i> Danh mục sản phẩm</h3>
                    <ul class="child-0">
                        <li><a href="#">Thời trang</a>
                            <ul class="child-1">
                                <div class="list-child">
                                    <li><a href="#">Thời trang nữ</a></li>
                                    <li><a href="#">Thời trang nam</a></li>
                                </div>
                                <div class="menu-banner">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/source/slide/banner-slide1.jpg" />
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Thực phẩm</a>
                            <ul class="child-1">
                                <div class="list-child">
                                    <li><a href="#">Đồ uống</a></li>
                                    <li><a href="#">Bánh kẹo</a></li>
                                    <li><a href="#">Đồ hộp</a></li>
                                    <li><a href="#">Gia vị</a></li>
                                    <li><a href="#">Thực phẩm khác</a></li>
                                </div>
                                <div class="menu-banner">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/source/slide/banner-slide2.jpg" />
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Đồ gia dụng</a>
                            <ul class="child-1">
                                <div class="list-child">
                                    <li><a href="#">Đồ dùng nhà bếp</a></li>
                                    <li><a href="#">Đồ dùng cá nhân</a></li>
                                    <li><a href="#">Đồ dùng cá nhân</a></li>
                                    <li><a href="#">Đồ dùng cá nhân</a></li>
                                    <li><a href="#">Đồ dùng cá nhân</a></li>
                                    <li><a href="#">Đồ dùng cá nhân</a></li>
                                </div>
                                <div class="menu-banner">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/source/slide/banner-slide3.jpg" />
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Dụng cụ nhà bếp</a>
                            <ul class="child-1">
                                <div class="list-child">
                                    <li><a href="#">Thời trang nữ</a></li>
                                    <li><a href="#">Thời trang nam</a></li>
                                </div>
                                <div class="menu-banner">
                                    banner
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Nội thất</a></li>
                        <li><a href="#">Đồ chơi - Đồ lưu niệm</a></li>
                        <li><a href="#">Điện thoại</a></li>
                        <li><a href="#">Máy tính</a></li>
                        <li><a href="#">Đồ điện tử</a></li>
                        <li><a href="#">Xe máy - Xe đạp điện</a></li>
                    </ul>
                </div>

                <div class="hoz-menu">
                    <ul class="">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <div class="clearfix"></div>
                    </ul>

                </div>

            </div>
         
            <!-- end header -->
	