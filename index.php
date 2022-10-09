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
    <a name='services'></a>
    <div id="services" class="section">
        
        <img src="" alt="" class="background hide">
        <h3>Dịch vụ nha khoa Tims</h3>
        <div class="wrapper g_cols">
            
            <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'numberposts'      =>12,
                    'cat'         => 3,
                    'orderby'    => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query( $args );

                // echo '<pre style="color: #fff">';
                // print_r($blogs[0]);
                // echo '</pre>';
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                    $except = get_the_excerpt();
            ?>
            <div class="cols d_4_cols t_4_cols m_1_cols">
                <img src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                <div class="heading">
                    <?php the_title(); ?>
                </div>
                <div class="text">
                    <?php echo explode("\n", wordwrap($except, 150))[0]; ?>...
                </div>
                <a class="button" href="<?php the_permalink(); ?>">
                    xem thêm
                </a>
            </div>


            <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
            ?>
        </div>
    </div>

    <a name='comments'></a>
    <div id="comments"  class="section">

        <h3>cảm nhận khách hàng</h3>
        <div class="video">
            <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'name' => 'comment_video', 
                    'numberposts'      =>1,
                    'orderby'    => 'date',
                    'order' => 'DESC',
                );
                $commentVideo = new WP_Query( $args );
                if ( $commentVideo->have_posts() ) :
                    while ($commentVideo->have_posts()) : $commentVideo->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn

            ?>
            <?php  echo get_post_meta( get_the_ID(), 'video', true ); ?>
            <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
            ?>  
        </div>
        <div class="wrapper g_cols">
            <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'category_name' => 'comments',
                    'numberposts'      =>12,
                    'orderby'    => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query( $args );

                // echo '<pre style="color: #fff">';
                // print_r($blogs[0]);
                // echo '</pre>';
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                    $except = get_the_excerpt();
            ?>

            <div class="rows d_2_cols t_2_cols m_1_cols">
                <div class="img">
                    <img src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="comment">
                    <div class="heading">
                        <?php the_title(); ?>
                    </div>
                    <div class="text">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>

            <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
            ?>
        </div>
    </div>

    <a name='promotion'></a>
    <div id="promotion"  class="section">

        <h3>chương trình ưu đãi</h3>
        <div class="wrapper g_cols">
            <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'name' => 'promotions', 
                    'numberposts'      =>1,
                    'orderby'    => 'date',
                    'order' => 'DESC',
                );
                $promotion = new WP_Query( $args );

                // echo '<pre style="color: #000">';
                // print_r(wp_upload_dir( "2022/08" )["url"]);
                // echo '</pre>';
                if ( $promotion->have_posts() ) :
                    while ($promotion->have_posts()) : $promotion->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn

            ?>
            <div class="img cols d_1_cols t_1_cols m_1_cols">
                <img class="hide-mobile" src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 1200, 600); ?>" alt="<?php the_title(); ?>">
                <img class="hide-desktop hide-tablet" src="<?php  echo get_post_meta( get_the_ID(), 'mobile_image', true ); ?>" alt="<?php the_title(); ?>">
            </div>
            <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
            ?>          

            <div class="form"><?php echo do_shortcode('[contact-form-7 id="141" title="Nhận thông tin khuyến mại"]'); ?></div>
        </div>
    </div>
    
    <a name='priceTable'></a>
    <div id="priceTable"  class="section">

        <h3>bảng giá</h3>
        <div class="wrapper">
            <img src="<?php echo DTTL_THEME_URL_IMG; ?>/1.png" alt="">
            <img src="<?php echo DTTL_THEME_URL_IMG; ?>/2.png" alt="">
        </div>
    </div>
    <a name='about'></a>
    <div id="about" class="section">
        
        <img src="" alt="" class="background hide">
        <h3>Giới thiệu</h3>
        <div class="wrapper g_cols">
            <div class="cols d_2_cols t_2_cols m_1_cols center_box">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/11.jpg" alt="">
            </div>
            <div class="cols d_2_cols t_2_cols m_1_cols cols_center">
                <div class="heading outstanding">TIMS Dental - Luôn làm tốt hơn!</div>
                <div class="text">
                    <p>Mang đến sự trải nghiệm tối giản, sử dụng công nghệ thông minh, dịch vụ nhanh chóng, thấú cảm với khách hàng, an toàn tuyệt đối.</p>
                    <p>Chuyên các dịch vụ nha khoa cao cấp:</p>
                    <ul>
                        <li>Trồng lại răng đã mất</li>
                        <li>Điều chỉnh răng lệch lạc</li>
                        <li>Mặt dán sứ thẩm mỹ</li>
                        <li>Phục hồi sứ thẩm mỹ</li>
                        <li>Điều trị răng miệng tổng quát</li>
                    </ul>
                    <strong>Triết lý điều trị: Nụ cười đẹp từ răng chắc khoẻ</strong>
                    <p>Tiêu chí hàng đầu của một cười đẹp là phải có nền tảng từ một sức khoẻ răng miệng tốt. Vì vậy nha khoa TIMS quyết tâm trở thành bạn đồng hành của mọi gia đình trong lĩnh vực chăm sóc răng miệng khoẻ đẹp từ gốc với các gói theo dõi, điều trị, thẩm mỹ cho trẻ em đến người lớn tuổi. </p>
                    <p>Nha khoa TIMS tự hào khi xây dựng và thiết kế lại nụ cười cho những khách hàng lớn tuổi mất răng lâu năm, đảm bảo được sức khoẻ với khả năng ăn nhai tối ưu nhất. Hạn chế xâm lấn, bảo toàn răng gốc trong việc cải thiện lại thẩm mỹ hình dáng, màu sắc răng.</p>
                </div>
            </div>
            
        </div>
        
        <div class="wrapper g_cols g_cols_reverse">
            <div class="cols d_2_cols t_2_cols m_1_cols center_box">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/22.jpg" alt="">
            </div>
            <div class="cols d_2_cols t_2_cols m_1_cols cols_center">
                <div class="heading outstanding">Trang thiết bị</div>
                <div class="text">
                    <p>Đầu tư vào công nghệ quét dấu hiện đại nhất thế giới – Máy iTero 5D cho thấy trước kết quả chỉnh nha và theo dõi tiến trình dịch chuyển răng một cách chính xác. Quét dấu toàn hàm chỉ trong vài phút, phát hiện sớm các bệnh lý răng miệng, giúp lưu trữ hồ sơ 3D, đồng thời ứng dụng thuật toán “số hóa nụ cười” tối ưu kế hoạch chỉnh nha nhanh chóng, hiệu quả.</p>
                    <p>Sở hữu máy chụp film CT Cone Beam tối tân – Trợ thủ đắc lực trong điều trị Nha khoa. Chỉ với 1 lần quét soi rõ hàng triệu góc nhìn, chính xác tuyệt đối. Với hình ảnh 3D ưu việt giúp phân tích cấu trúc xương hàm chuẩn xác. Không làm đau, không gây khó chịu, không giữ tia bức xạ trong cơ thể sau chụp như các thiết bị chụp film truyền thống.</p>
                    <p>Chọn trang bị ghế nha khoa Sinius từ hãng Sirona Dentsply. Vì loại ghế cao cấp này có thể điều chỉnh được tốc độ nhanh chậm, đảm bảo độ bền tay khoan, giúp khách hàng có được cảm giác thoải mái, êm dịu, yên tâm trong suốt thời gian chỉnh nha và làm đẹp.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- <a name='doctors'></a>
    <div id="doctors" class="section">
        
        <img src="" alt="" class="background hide">
        <h3>Đội ngũ bác sỹ</h3>
        <div class="wrapper g_cols">
            <div class="cols d_2_cols t_2_cols m_1_cols center_box">
                <img src="https://thumbs.dreamstime.com/b/handsome-cheerful-male-doctor-stock-vector-cartoon-character-set-three-poses-illustration-204326741.jpg" alt="">
            </div>
            <div class="cols d_2_cols t_2_cols m_1_cols cols_center">

                <div class="text">
                    <p>Tại nha khoa TIMS chúng tôi không chỉ có một mà là cả một đội ngũ Y – Bác sĩ cùng nhau lên kế hoạch và điều trị cho khách hàng. Chúng tôi nghiên cứu, thống nhất và đưa ra một kế hoạch điều trị tối ưu có kết quả lâu dài và tiết kiệm chi phí nhất.</p>
                    <p>Đội ngũ Y – Bác sĩ tại nha khoa TIMS còn là người bạn đồng hành tận tâm với quý khách hàng trong suốt quá trình trước và sau điều trị.</p>
                </div>
                <a class="button" href="/">
                    xem thêm
                </a>
            </div>
            
        </div>
    </div> -->
    <a name='values'></a>
    <div id="values" class="section">
        
        <img src="" alt="" class="background hide">
        <h3>giá trị cốt lõi</h3>
        <div class="wrapper g_cols Jus_con_center">
            <div class="cols d_3_cols t_3_cols m_1_cols">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Don-gian.jpg" alt="">
                <div class="heading">
                    Simplicity : Đơn giản
                </div>
                <div class="text">
                    Đơn giản trong phong cách, trong quy trình, trong thiết kế hài hoà sang trọng mang lại trải nghiệm tối giản cho khách hàng Sự đơn giản là sự tinh tế tột cùng
                </div>
            </div>
            <div class="cols d_3_cols t_3_cols m_1_cols">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Thau-cam.jpg" alt="">
                <div class="heading">
                    Sympathy: Thấu cảm
                </div>
                <div class="text">
                    Đội ngũ TIMS tư vấn có tâm có tầm như người bạn đồng hành xuyên suốt quá trình sử dụng dịch vụ của khách hàng. Giải đáp những thắc mắc, thấu hiểu và hỗ trợ khách hàng lựa chọn phương pháp điều trị tối ưu nhất, hợp lý nhất. Chăm sóc và hướng dẫn khách hàng sau điều trị.
                </div>
            </div>
            <div class="cols d_3_cols t_3_cols m_1_cols">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Thong-minh.jpg" alt="">
                <div class="heading">
                    Smart: Thông minh
                </div>
                <div class="text">
                    Không chỉ sử dụng những trang thiết bị hiện đại mà còn áp dụng những kỹ thuật mới nhất, vật liệu tiên tiến nhất đã hiệu quả trên các nghiên cứu lâm sàng vào thực tế. Đội ngũ TIMS luôn cập nhật cải tiến với tinh thần luôn làm tốt hơn cho khách hàng
                </div>
            </div>
            <div class="cols d_3_cols t_3_cols m_1_cols">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Nhanh-chong.jpg" alt="">
                <div class="heading">
                    Speed: Nhanh chóng
                </div>
                <div class="text">
                    Thời gian điều trị nhanh chóng sau khi đã xác định chính xác nhu cầu cũng như nguyện vọng của khách hàng. TIMS thiết kế nụ cười để bạn hình dung sau mỗi ca điều trị. Chỉ bắt đầu điều trị khi đã hoàn thành suy nghĩ trong tâm trí.
                </div>
            </div>
            <div class="cols d_3_cols t_3_cols m_1_cols">
                <img src="<?php echo DTTL_THEME_URL_IMG; ?>/An-toan.jpg" alt="">
                <div class="heading">
                    Safety: An toàn
                </div>
                <div class="text">
                    <p>Đội ngũ TIMS luôn thực hiện tất cả dưới sự an toàn vô khuẩn được ưu tiên hàng đầu cho khách hàng.  Hệ thống phòng thông khí 1 chiều giúp giảm tối đa tải lượng virus trong không khí.</p>
                    <p>An toàn lao động cho nhân viên, an toàn trong cách thức điều trị xâm lấn tối thiểu, can thiệp tối thiểu để kết quả điều trị sau cùng an toàn và ổn định về lâu về dài nhất.</p>
                </div>
            </div>

        </div>
    </div>
    <a name='commitments'></a>
    <div id="commitments" class="section">
        
        <img src="" alt="" class="background hide">
        <h3>cam kết</h3>
        <div class="wrapper g_cols">
            <div class="cols d_2_cols t_2_cols m_1_cols center_box">
                <img src="https://www.franksonnenbergonline.com/wp-content/uploads/2018/01/image_do-you-understand-the-meaning-of-commitment.jpg" alt="">
            </div>
            <div class="cols d_2_cols t_2_cols m_1_cols">
                <div class="text">
                    <p>Với châm ngôn “ Do better – Luôn làm tốt hơn” nha khoa TIMS luôn:</p>
                    <ul>
                        <li><strong>Tốt hơn</strong> trong điều trị</li>
                        <li><strong>Tốt hơn</strong> trong kiến thức và cập nhật những phương pháp tiên tiến</li>
                        <li><strong>Tốt hơn</strong> trong dịch vụ chăm sóc khách hàng</li>
                        <li><strong>Tốt hơn</strong> trong trang bị cơ sở vật chất và thiết bị máy móc Tất cả cho khách hàng những trải nghiệm dịch vụ đơn giản, nhẹ nhàng và luôn được chăm sóc tận tâm. </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <div id="blog">
        <div class="wrapper">
            <!-- <h2>tin tức</h2> -->
            <div class="swiper blog-wrapper">

                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            // 'number' => '8',
                            'numberposts'      => 8,
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
                            <!-- <img class="lazyload"
                                data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                alt="<?php the_title(); ?>"> -->
                            <!-- <div class="blog-title"><?php the_title(); ?></div> -->
                            <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                        <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                            <!-- <p class="short"><?php echo explode("\n", wordwrap($except, 150))[0]; ?>...</p> -->

                        </a>
                        <!-- <a href="<?php the_permalink(); ?>">
                            <div class="more">Xem thêm</div>
                        </a> -->


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