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
        <?php if (have_posts()):while (have_posts()): the_post(); ?>
                <div class="message"><i class="fa fa-check"> </i> Samsung Galaxy Grand Price G530H đã được thêm vào giỏ hàng <a class="view-cart" href="#">Xem giỏ hàng</a></div>
                <div class="breadcrumb"><a href="#">Trang chủ</a> / <a href="#">Điện thoại Di Động</a> / <a href="#">Samsung Galaxy Price G530H</a></div>
                <div class="main-content">

                    <div class="product-box">
                        <div class="image">
                            <?php $galleries = ($product->get_gallery_attachment_ids()) ?>


                            <div class="main-image">
                                <img id="zoom-image" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()))[0]; ?>" data-zoom-image="<?php echo get_template_directory_uri() ?>/assets/images/large-image.jpg"/>
                            </div>
                            <div id="gallery-image" class="item-image">
                                <?php foreach ($galleries as $gid) { ?>
                                    <a href="#" data-image="<?php echo wp_get_attachment_image_src($gid)[0]; ?>" data-zoom-image="<?php echo bloginfo('template_directory') ?>/assets/images/large-image.jpg"> <img id="img_01" width="89" src="<?php echo wp_get_attachment_image_src($gid)[0]; ?>" /> </a> 
                                <?php } ?>
                            </div>
                            <script>
                                $('#zoom-image').elevateZoom({
                                    cursor: 'pointer',
                                    easing: true,
                                    tint: true,
                                    tintColour: '#f4f4f4',
                                    tintOpacity: 0.7,
                                    zoomWindowOffetx: 10,
                                    zoomWindowWidth: 530,
                                    gallery: 'gallery-image',
                                    galleryActiveClass: 'active'
                                });
                                $("#zoom-image").bind("click", function (e) {
                                    var ez = $('#img_01').data('elevateZoom');
                                    $.fancybox(ez.getGalleryList());
                                    return false;
                                });
                            </script>
                        </div>
                        <div class="p-meta">
                            <h2 class="rmeta"><?php the_title(); ?></h2>
                            <form class="cart" enctype="multipart/form-data" method="post">
                                <table class="p-table">
                                    <tr class="rate">
                                        <td >Đánh giá sản phẩm </td>
                                        <td><span><i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </span></td>
                                    </tr>
                                    <tr  class="price">
                                        <td>Giá sản phẩm</td>
                                        <td><span class="sale"><?php echo get_post_meta(get_the_ID(), '_sale_price', true).' '.  get_woocommerce_currency() ?> </span> <span class="regular"><?php echo get_post_meta(get_the_ID(), '_regular_price', true).' '.  get_woocommerce_currency() ?></span></td>
                                    </tr>
                                    <tr class="color">
                                        <td > Chọn màu </td>
                                        <td><a href="#">Trắng </a> <a href="#">Đen </a> <a href="#">Xanh </a> <a href="#">Hồng </a> </td>
                                    </tr>
                                    <tr class="qty">
                                        <td >Số lượng </td>
                                        <td><input type="number" name="quantity" value="1"/></td>
                                    </tr>
                                    <tr>
                                    <input type="hidden" value="<?php echo get_the_ID(); ?>" name="add-to-cart" />
                                    <td><button style="border: none;" class="add-to-cart "><a href="#"><i class="fa fa-shopping-cart"> </i> <span>ĐẶT HÀNG</span></a></button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!-- end main content -->

                <div class="content-title">
                    <span>Mô tả sản phẩm</span>
                </div>
                <div class="description">
                    <div class="clearfix"></div>
                    <div class="desc-image">
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()))[0]; ?>" />
                    </div>
                    <div class="desc-text">
                        <h5><?php the_title() ?></h5>
                        <?php the_content(); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="content-title">
                    <span>Đánh giá</span>
                </div>
                <div class="description">
                    <ul class="comments">
                        <li>
                            <div class="customer">
                                <img class="avatar" src="<?php echo get_template_directory_uri() ?>/assets/source/body/anh-khach-hang-27.jpg" />
                                <h4>Nguyễn Văn A</h4>
                                <i>Hà Nội</i>
                            </div>
                            <div class="comment">
                                <h5>Xếp hạng <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i></h5>
                                <p>
                                    Samsung Galaxy Grand Prime G530H là chiếc smartphone lõi tứ nằm trong 
                                    phân khúc tầm trung của Samsung, máy chạy hệ điều hành Android 4.4 KitKat 
                                    mới nhất, có thiết kế mỏng nhẹ, tinh tế và đẹp mắt. Màn hình qHD đem lại 
                                    cho bạn những trải nghiệm làm việc cũng như giải trí tuyệt vời. Đặc biệt 
                                    với camera trước 5.0 MP được tối ưu hóa với nhiều chế độ chụp và hiệu ứng 
                                    độc đáo, là chiếc điện thoại không thể thiếu cho các tín đồ selfie với 
                                    mức giá vừa phải.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </li>

                        <li>
                            <div class="customer">
                                <img class="avatar" src="<?php echo get_template_directory_uri() ?>/assets/source/body/anh-khach-hang-27.jpg" />
                                <h4>Nguyễn Văn A</h4>
                                <i>Hà Nội</i>
                            </div>
                            <div class="comment">
                                <h5>Xếp hạng <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i></h5>
                                <p>
                                    Samsung Galaxy Grand Prime G530H là chiếc smartphone lõi tứ nằm trong 
                                    phân khúc tầm trung của Samsung, máy chạy hệ điều hành Android 4.4 KitKat 
                                    mới nhất, có thiết kế mỏng nhẹ, tinh tế và đẹp mắt. Màn hình qHD đem lại 
                                    cho bạn những trải nghiệm làm việc cũng như giải trí tuyệt vời. Đặc biệt 
                                    với camera trước 5.0 MP được tối ưu hóa với nhiều chế độ chụp và hiệu ứng 
                                    độc đáo, là chiếc điện thoại không thể thiếu cho các tín đồ selfie với 
                                    mức giá vừa phải.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                    <a class="button btn-primary right">Xem thêm</a>
                    <div class="clearfix"></div>

                    <div class="form-comment">
                        <h2>ĐÁNH GIÁ CỦA BẠN</h2>
                        <table class="form-table">
                            <tr>
                                <td>
                                    <p><label>Họ tên</label></p>
                                    <p><input type="text" value="Họ và tên" name="username" /></p>
                                    <p><label>Tuổi</label></p>
                                    <p><input type="text" value="24" name="age" /></p>
                                    <p><label>Địa chỉ</label></p>
                                    <p><input type="text" value="Hà Nội" name="address" /></p>

                                </td>
                                <td>
                                    <p><label>Đánh giá</label></p>
                                    <textarea name="content"></textarea>
                                    <p><label>Xếp hạng sản phẩm</label></p>
                                    <p><i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> </p>
                                </td>
                            </tr>

                        </table>
                        <p><input type="submit" value="GỬI ĐÁNH GIÁ" class="button btn-primary" /></p>
                    </div>
                </div>


                <div class="content-title">
                    <span><i class="fa fa-camera"></i> Sản phẩm liên quan</span>
                </div>
                <div class="main-content">
                    <ul class="list-product">
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <li class="product">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/source/body/anh san pham-17.jpg" />
                                <h4><a href="#">108 Bí quyết giáo dục con của cha mẹ thông thái</a></h4>

                                <div class="price">
                                    <span class="regular">50.000 đ</span>
                                    <span class="sale">45.000 đ</span>
                                </div>
                                <div class="clearfix"></div>
                                <div class="add-to-cart">
                                    <a href="#">Mua hàng</a>
                                </div>
                            </li>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- end main content -->
            </div>
            <?php
        endwhile;
    endif;
    ?>
    <!-- end content -->
</div>
<div class="clearfix"></div>
<!-- end main -->

<?php get_footer(); ?>

