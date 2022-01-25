<?php 
get_header(); 
get_header('top');
// get_header('banner');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
// echo '<pre style="color: #fff">';
// print_r(get_the_category());
// echo '</pre>';
?>


</div>
<div id="second-main">
    <div class="wrapper">
        <div id="content">
            <h1 class="cattitle"><?php echo get_the_category()[0]->name; ?></h1>
            <div class="post-wrapper">
                <?php
                    if ( have_posts() ) :
                        while (have_posts()) : the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                        /* get the WC_Product Object */ 
                        $except = get_the_excerpt();
                        // echo $except;
                ?>
                <div class="items">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <div class="infowrapper">
                            <div class="name"><?php the_title(); ?></div>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
                ?>
            </div>

            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '&larr;',
                'next_text' => '&rarr;',
            )); ?>
            <!-- <ul class="pagination">
                <li><span class="button disabled">Prev</span></li>
                <li><a href="#" class="page active">1</a></li>
                <li><a href="#" class="page">2</a></li>
                <li><a href="#" class="page">3</a></li>
                <li><span>&hellip;</span></li>
                <li><a href="#" class="page">8</a></li>
                <li><a href="#" class="page">9</a></li>
                <li><a href="#" class="page">10</a></li>
                <li><a href="#" class="button">Next</a></li>
            </ul> -->
            
        </div>

    </div>

</div>

<?php 

get_footer(); 
?>