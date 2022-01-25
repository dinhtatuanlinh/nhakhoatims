<?php 
global $post;
get_header(); 
get_header('top');

$upload_dir = wp_upload_dir();


?>


</div>
<!-- <div id="more">
    <div id="quick-menu">
        <div class="wrapper">
            <div class="mySwiper3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                        $terms = 'mat-day-chuyen';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/day-chuyen.png" alt="">
                            <p>Dây chuyền</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'bong-tai';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/hoa-tai.png" alt="">
                            <p>Bông tai</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-nu';
                        $category = get_term_by('slug', $terms, 'product_cat');

                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );

                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-nu.png" alt="">
                            <p>Nhẫn nữ</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-cuoi';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-cuoi.png" alt="">
                            <p>Nhẫn cưới</p>
                        </a>
                    </div>
                    <div class="swiper-slide"><?php
                        $terms = 'nhan-nam';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-nam.png" alt="">
                            <p>Nhẫn nam</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'bo-trang-suc';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/bo-trang-suc.png" alt="">
                            <p>Bộ trang sức</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-cau-hon';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-cau-hon.png" alt="">
                            <p>Nhẫn cầu hôn</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'lac-vong-tay';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/vong-tay.png" alt="">
                            <p>Lắc vòng tay</p>
                        </a>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div id="more-info">
        <div class="wrapper">
            <div class="post">
                <div class="wrap-title">Bạn hãy xem thêm</div>
                <div class="wrap-items">

                    <p><a class="view-more-item d-flex mb-3" target="_parent"
                        href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien">

                        Bảng giá kim cương lẻ
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/bang-gia-si-kim-cuong-gia">

                        Bảng giá kim cương sỉ
                    </a></p>
                    <p><a class="view-more-item d-flex mb-3" target="_parent"
                        href="https://jemmia.vn/bang-gia-kim-cuong-vang">

                        Bảng giá kim cương vàng giá lẻ
                    </a></p>
                    <p><a class="view-more-item d-flex mb-3" target="_parent" href="https://jemmia.vn/bang-gia-kim-cuong-fancy-cut">

                        Bảng giá kim cương Fancy cut GIA
                    </a></p>
                    


                </div>
            </div>
            <div class="post">

                <div class="wrap-title">Có thể bạn quan tâm</div>
                <div class="wrap-items">
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/trum-kim-cuong-si">

                        Jemmia Diamond - Trùm kim cương sỉ 
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/kim-cuong-vang">

                        Kim cương màu đỉnh cao quyền lực
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/ke-mao-danh-kim-cuong">

                        Moissanite kẻ mạo danh kim cương
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/bo-suu-tap-nhan-nam-dang-cap">

                        Bộ sưu tập nhẫn nam đẳng cấp
                    </a></p>
                </div>
            </div>
        </div>

    </div>
</div> -->
<div id="second-main">
<div id="quick-menu">
        <div class="wrapper">
            <div class="mySwiper3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                        $terms = 'mat-day-chuyen';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/day-chuyen.png" alt="">
                            <p>Dây chuyền</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'bong-tai';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/hoa-tai.png" alt="">
                            <p>Bông tai</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-nu';
                        $category = get_term_by('slug', $terms, 'product_cat');

                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );

                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-nu.png" alt="">
                            <p>Nhẫn nữ</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-cuoi';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-cuoi.png" alt="">
                            <p>Nhẫn cưới</p>
                        </a>
                    </div>
                    <div class="swiper-slide"><?php
                        $terms = 'nhan-nam';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-nam.png" alt="">
                            <p>Nhẫn nam</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'bo-trang-suc';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/bo-trang-suc.png" alt="">
                            <p>Bộ trang sức</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-cau-hon';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-cau-hon.png" alt="">
                            <p>Nhẫn cầu hôn</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'lac-vong-tay';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/vong-tay.png" alt="">
                            <p>Lắc vòng tay</p>
                        </a>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div id="more-info">
        <div class="wrapper">
            <div class="post">
                <div class="wrap-title">Bạn hãy xem thêm</div>
                <div class="wrap-items">

                    <p><a class="view-more-item d-flex mb-3" target="_parent"
                        href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien">

                        Bảng giá kim cương lẻ
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/bang-gia-si-kim-cuong-gia">

                        Bảng giá kim cương sỉ
                    </a></p>
                    <p><a class="view-more-item d-flex mb-3" target="_parent"
                        href="https://jemmia.vn/bang-gia-kim-cuong-vang">

                        Bảng giá kim cương vàng giá lẻ
                    </a></p>
                    <p><a class="view-more-item d-flex mb-3" target="_parent" href="https://jemmia.vn/bang-gia-kim-cuong-fancy-cut">

                        Bảng giá kim cương Fancy cut GIA
                    </a></p>
                    


                </div>
            </div>
            <div class="post">

                <div class="wrap-title">Có thể bạn quan tâm</div>
                <div class="wrap-items">
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/trum-kim-cuong-si">

                        Jemmia Diamond - Trùm kim cương sỉ 
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/kim-cuong-vang">

                        Kim cương màu đỉnh cao quyền lực
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/ke-mao-danh-kim-cuong">

                        Moissanite kẻ mạo danh kim cương
                    </a></p>
                    <p><a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/bo-suu-tap-nhan-nam-dang-cap">

                        Bộ sưu tập nhẫn nam đẳng cấp
                    </a></p>
                </div>
            </div>
        </div>

    </div>
    <div class="wrapper">
        <div id="contentBlog">
            <div class="heading">
                <h1><?php the_title(); ?></h1>
                <!-- <div class="date">Đăng vào: <?php echo get_the_date() ; ?></div> -->
            </div>
            <div class="main-content">
                <?php 
                the_content(); 
                ?>

            </div>

        </div>
        <?php
            get_sidebar();
        ?>
    </div>
    <?php
            $category_detail=wp_get_post_categories( $post->ID );
                // echo '<pre style="color: #000">';
                // print_r($category_detail); // lấy id của các cat chưa sản phẩm này
                // echo '</pre>';
            ?>
    <div id="blog">
        <div class="wrapper">
            <h2>Bài viết liên quan</h2>
            <div class="blog-wrapper">

                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'type' => 'post',
                            'tax_query'             => array(
                                array(
                                    'taxonomy'      => 'category',
                                    'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                                    'terms'         => $category_detail,// lấy id của các cat chưa sản phẩm này
                                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                                ),
                            ),
                            'numberposts'      =>8 ,
                            'category'         => 0,
                            'orderby'          => 'rand',
                            'order' => 'DESC',
                        );
                        $blogs = get_posts($args);
                        // echo count($blogs);
                        // echo '<pre style="color: #fff">';
                        // print_r($blogs[0]);
                        // echo '</pre>';
                        if($blogs){
                            foreach($blogs as $blog){
                                setup_postdata( $blog );
                                $author_id = $blog->post_author;
                                ?>
                    <div class="swiper-slide">

                        <a href="<?php echo get_permalink( $blog->ID); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($blog->ID,'full'); ?>"
                                alt="<?php echo $blog->post_title; ?>">
                            <div class="blog-title"><?php echo $blog->post_title; ?></div>
                            <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                        <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                            <p class="short">
                                <?php echo explode("\n", wordwrap(get_the_excerpt($blog->ID), 150))[0]; ?>...</p>
                        </a>

                    </div>
                    <?php
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php setPostViews(get_the_ID());//đếm số lượt xem bài post ?>


<?php 

get_footer(); 
?>