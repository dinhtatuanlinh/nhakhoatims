<?php 
get_header(); 
get_header('top');
get_header('banner');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>


</div>
<div id="main" class="main-index">
    <div id="services">
        <img src="" alt="" class="background">
        <div class="wide">
            <h3>Dịch vụ nha khoa Tims</h3>
            <div class="wrapper">
                

            </div>
        </div>
    </div>
    <div id="about">
        <div class="wide">
            <div class="wrapper">
                <div class="text">
                    <h3>GIỚI THIỆU</h3>
                    <p>Viện Nghiên cứu phát triển Y học Dân Tộc được thành lập bởi Bộ Khoa Học Công Nghệ và trực thuộc Trung
                        Ương Hội Giáo Dục Chăm sóc sức khỏe cộng đồng Việt Nam với nhiệm vụ Nghiên cứu khoa học, chuyển giao
                        công nghệ, chăm sóc sức khỏe cộng đồng theo phương pháp Y Học Dân Tộc. Trong thời gian qua Viện đã
                        có
                        rất nhiều công trình đề tài nghiên cứu về chiết xuất hoạt chất quý từ dược liệu và nghiên cứu và
                        khảo
                        sát thực tế từ những bài thuốc của các dân tộc, vùng miền và thầy thuốc giỏi khắp mọi miền tổ quốc.
                        Viện
                        đã chuyển giao công nghệ và rất nhiều bài thuốc quý cho rất nhiều đối tác là các công ty Dược, Doanh
                        nghiệp kinh doanh sản xuất về Thực phẩm chức năng, Mỹ Phẩm…..</p>
                </div>
                <img src="https://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/trungtamduoclieu-com.jpg" alt="about">
            </div>
        </div>
        <img class="background" src="https://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/o2dwukvh20200717045128.jpg" alt="">
    </div>

    <div id="blog">
        <div class="wrapper">
            <h2>tin tức</h2>
            <div class="blog-wrapper">

                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            // 'number' => '8',
                            'numberposts'      =>8 ,
                            'category'         => 0,
                            'orderby'          => 'rand',
                            'order' => 'DESC',
                        );
                        $blogs = get_posts($args);
                        $query = new WP_Query( $args );
                        // echo count($blogs);
                        // echo '<pre style="color: #fff">';
                        // print_r($blogs[0]);
                        // echo '</pre>';
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $except = get_the_excerpt();
                                ?>
                    <div class="swiper-slide">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                alt="<?php the_title(); ?>">
                            <div class="blog-title"><?php the_title(); ?></div>
                            <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                        <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                            <p class="short"><?php echo explode("\n", wordwrap($except, 150))[0]; ?>...</p>

                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <div class="more">Xem thêm</div>
                        </a>


                    </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();// reset lại đối tương wp_query
                    ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<?php 

get_footer(); 
?>