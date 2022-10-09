<div id="sidebar" class='mobile-hide'>
    
    <div class="recommendBlog">
        <h2>Bài viết nên đọc</h2>
        <?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'kien-thuc-kim-cuong',
                    )
                ),
                'posts_per_page' => 4,
                'orderby'    => 'rand',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );
            // echo '<pre style="color: #000">';
            // print_r($query);
            // echo '</pre>';
        ?>
        <?php
            if ( $query->have_posts() ) :
                while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                $except = get_the_excerpt();
        ?>
        <div class="items">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="infowrapper">
                    <div class="name"><?php the_title(); ?></div>
                    <!-- <div class="date">Đăng vào: <?php the_date() ; ?></div> -->
                    <p><?php echo str_split(  $except, 100)[0]; ?></p>
                </div>
            </a>
        </div>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();// reset lại đối tương wp_query
        ?>
    </div>
    <iframe src="https://webtygia.com/api/vang?bgheader=0b2139&colorheader=ffffff&padding=5&fontsize=13&undefined"
        frameborder="0"></iframe>
</div>